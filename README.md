## 概述
>Easy Customer是一款PHP开发的在线客服系统，轻量程序，极速高效，部署简单


### 使用技术
    . PHP7.2

    . Laravel^6.0

    . GateWayWorker
### 部署
>1、进入到项目根目录下【后续操作都是在根目录下操作】
> 
>2、在根目录下执行命令 composer install
>
>3、复制.env.example为.env 配置数据库信息
> 
>4、数据
> 
> -   执行数据迁移命令 php artisan migrate
>
> -  执行数据填充命令 php artisan db:seed 
>
> 5、服务
>
> - 服务器需要开启端口8910 8920
> - 执行启动命令 php start.php [start | stop | restart]  [-d 该参数是让启动的进程在后台执行]
> - start: 启动服务
> - stop: 关闭服务
> - restart: 重启服务



