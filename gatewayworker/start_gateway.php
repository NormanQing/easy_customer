<?php
/**
 * This file is part of workerman.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author walkor<walkor@workerman.net>
 * @copyright walkor<walkor@workerman.net>
 * @link http://www.workerman.net/
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 */

use \Workerman\Worker;
use \GatewayWorker\Gateway;


// 自动加载类
require_once __DIR__ . '/../vendor/autoload.php';


// gateway 进程，这里使用websocket协议
//websocket占用的端口号 根据welive需要设置读取
//IP如果写0.0.0.0代表监听本机所有网卡，也就是内网、外网、本机都可以访问到

$isHttps = false; // 是否开启证书
$sslCrtPath = ''; // 证书路径
$sslKeyPath = ''; // 证书路径
$port = '8920';

if ($isHttps && $sslCrtPath && $sslKeyPath) {
    // 证书最好是申请的证书
    $context = [
        'ssl' => [
            // 请使用绝对路径
            'local_cert' => $sslCrtPath, // 也可以是crt文件
            'local_pk' => $sslKeyPath,
            'verify_peer' => false,
            // 'allow_self_signed' => true, //如果是自签名证书需要开启此选项
        ]
    ];

    $gateway = new Gateway("websocket://0.0.0.0:" . $port, $context);
    // 开启SSL，websocket+SSL 即wss
    $gateway->transport = 'ssl';
} else {
    $gateway = new Gateway("websocket://0.0.0.0:" . $port);
}


// gateway名称，status方便查看
$gateway->name = 'EasyCustomerGateway';

// gateway进程数
$gateway->count = 2;

// 本机ip，分布式部署时使用内网ip
$gateway->lanIp = '127.0.0.1';

// 内部通讯起始端口，假如$gateway->count = 2;，起始端口为4000
// 则一般会使用4000 4001  2个端口作为内部通讯端口
$gateway->startPort = 8900;

// 服务注册地址
$gateway->registerAddress = '127.0.0.1:8910';

// 心跳间隔: 服务器多少秒内未收到客服端发来的心跳数据，则判断为断线，并触发Events::onClose()事件
// 客服端(JS)中发送心跳数据的时间间隔最好小于此数值, 如此值为36，客户端发送心跳的间隔为26
// 客服端发送的心跳数据可以是任意数据
$gateway->pingInterval = 36;

//允许未收到客户端心跳数据的次数, 表示: 服务器在 pingInterval * pingNotResponseLimit 秒内未收到客服端的心跳数据，则判断为断线，并触发Events::onClose()事件
$gateway->pingNotResponseLimit = 1;

// 服务端定时向客户端发送的数据
$gateway->pingData = '{type: "ping"}';

/*
// 设置缓冲区大小, 暂无必要
$gateway->onConnect = function($connection)
{
	// 设置当前连接的应用层发送缓冲区大小, 默认为1M
    $connection->maxSendBufferSize = 2048000;
};
*/

// 如果不是在根目录启动，则运行runAll方法
if (!defined('GLOBAL_START')) {
    Worker::runAll();
}

