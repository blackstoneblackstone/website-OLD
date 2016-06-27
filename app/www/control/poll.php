<?php

/* * *********************************************************
  Filename: app/www/control/poll.php
  Note	: 投票处理
 * ********************************************************* */

class poll_c extends Control {

    function __construct() {
        parent::Control();
        $this->load_model("poll");
    }

    function poll_c() {
        $this->__construct();
    }

    function ok_f() {
        //判断阅读权限
		$popedom = sys_user_popedom("post");//获取阅读权限
		$module_id='46';
                if($module_id)
		{
			if(!$popedom || !$popedom["module"] || ($popedom != "all" && !in_array($module_id,$popedom["module"])))
			{
				//error($this->lang["not_popedom"]);
			}
		}
        $goback = $this->trans_lib->safe("goback");
        if (!$goback) {
            $goback = $_SERVER['HTTP_REFERER'] ? $_SERVER['HTTP_REFERER'] : $this->url("index");
        }
        $r=$this->poll_m->sava_poll_date();
        if(!$r){error("感谢您的关注！", $goback);}
        foreach ($_POST as $key => $val) {
            if (substr($key, 0, 5) === 'poll_') {
                $this->poll_m->votes_inc($val);
            }
        }
        error("投票成功！", $goback);
    }
    function result_f(){
        //判断阅读权限
		$popedom = sys_user_popedom("read");//获取阅读权限
		$module_id='46';
                if($module_id)
		{
			if(!$popedom || !$popedom["module"] || ($popedom != "all" && !in_array($module_id,$popedom["module"])))
			{
				//error($this->lang["not_popedom"]);
			}
		}
        $this->tpl->display("poll_result.".$this->tpl->ext);
    }

}

?>