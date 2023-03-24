<?php

/**
 * 递归加载所有模块化的路由
 * 目的所有路由都放在一个文件，路由多了，就不好维护
 * @param $path string  路由路径
 */

function requireOnce($path)
{
    foreach (glob($path) as $file) {
        if (is_dir($file)) {
            $file .= '/*';
            requireOnce($file);
        }else{
            require_once $file;
        }
    }
    return ;
}

$webRoutePath = __DIR__ . '/web/*';


requireOnce($webRoutePath);
