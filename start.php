<?php

/**
 * run with command: php start.php start -d
 */

ini_set('display_errors', 'on');

use Workerman\Worker;

if (strpos(strtolower(PHP_OS), 'win') === 0) {
    exit("start.php not support windows, please use start-for-win.bat\n");
}

// 检查扩展
if (!extension_loaded('pcntl')) {
    exit("Please install pcntl extension.\n");
}

if (!extension_loaded('posix')) {
    exit("Please install posix extension.\n");
}

// 标记全局启动
define('GLOBAL_START', 1);

require_once __DIR__ . '/vendor/autoload.php';

// 加载所有GatewayWorker/*/start*.php, 以便启动所有服务
foreach (glob(__DIR__ . '/gatewayworker/start*.php') as $startFile) {
    require_once $startFile;
}

// 运行所有服务
Worker::runAll();


