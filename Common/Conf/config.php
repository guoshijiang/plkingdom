<?php
return array(
	//'配置项'=>'配置值'
	//前台静态文件访问路径
	'CSS_URL'=>'/Public/Home/style/',
	'JS_URL'=>'/Public/Home/js/',
	'IMG_URL'=>'/Public/Home/images/',
	'BOOTSTRAP_URL'=>'/Public/Home/bootstrap',
	'JQUERY_URL'=>'/Public/Home/jquery',

	//后台静态文件访问路径
	'AD_CSS_URL'=>'/Public/Admin/css/',
	'AD_JS_URL'=>'/Public/Admin/js/',
	'AD_IMG_URL'=>'/Public/Admin/images/',

	//为Plugin插件包，设置配置变量访问路径
	'PLUGIN_URL' => '/Common/Plugin/',

	/* Mysql数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'plkingdom',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '123',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'sp_',    // 数据库表前缀
);
