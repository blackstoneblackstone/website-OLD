<?php
/***********************************************************
	Filename: app/www/control/plugin.php
	Note	: 插件前台
***********************************************************/
class plugin_c extends Control
{
	function __construct()
	{
		parent::Control();
	}

	function plugin_c()
	{
		$this->__construct();
	}

	function index_f()
	{
		//插件标识
		$plugin = $this->trans_lib->safe("plugin");
		if(!$plugin)
		{
			return false;
		}
		$this->plugin($plugin)->index();
	}
}