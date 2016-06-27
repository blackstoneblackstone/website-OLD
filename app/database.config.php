<?php
/***********************************************************
	Filename: database.config.php
	Note	: 数据库参数配置
***********************************************************/
//需要同时修改database2.config.php文件
//数据库类型
$_db_config["type"] = "mysql";
//连接数据库引挈
$_db_config["engine"] = "mysql";
//数据库服务器
$_db_config["host"] = "qdm157490504.my3w.com";
//数据库端口
$_db_config["port"] = "3306";
//数据库用户
$_db_config["user"] = "qdm157490504";
//数据库密码
$_db_config["pass"] = "guohan123";
//数据库名
$_db_config["data"] = "qdm157490504_db";
//数据表前缀
$_db_config["prefix"] = "sumeike_";
//启用缓存
//txt：文本缓存
//mem：内存缓存
//sql: 数据库缓存，值缓存在数据表 cache 中
//是否启用缓存请查看相应程序中config.inc.php中是否有设置 DB_CACHE
//未设置或设置否表示不启用缓存
//推荐前台启用缓存，后台禁用缓存
$_db_config["cache_type"] = "txt";
//配置memcache的服务器及端口
$_db_config["cache_server"] = "localhost";
$_db_config["cache_port"] = 11211;
//缓存过期时间，单位秒钟，如果设为0，也表示不缓存，不支持负数
$_db_config["cache_time"] = 3600;
?>