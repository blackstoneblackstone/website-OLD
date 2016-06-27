<?php
/***********************************************************
	Filename: app/www/control/logout.php
	Note	: 会员退出页
***********************************************************/
class logout_c extends Control
{
	function __construct()
	{
		parent::Control();
		$this->load_model("user");
	}

	function logout_c()
	{
		$this->__construct();
	}

	//会员退出
	function index_f()
	{
		session_destroy();
		load_plugin("logout",$rs);
		error($this->lang['logout_user_success'],$this->url());
	}
}
?>