<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

/// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);



// 定义运行时目录
define('RUNTIME_PATH','./Runtime/');
//定义静态页面的路径
//define('HTML_PATH','./Html/');
// 定义应用目录
define('APP_PATH','./Application/');

//定义可访问模块

define('MODULE_ALLOW_LIST','Home,Admin,Wxin');
//定义默认模块
//define('BIND_MODULE','Pc');
//定义网站根目录

//define('DEFAULT_MODULE','Home');
define('IMG_URL','http://luofan.unohacha.com/');

define('WEB_PATH',dirname(__FILE__));
// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';