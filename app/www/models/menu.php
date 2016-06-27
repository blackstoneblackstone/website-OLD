<?php
/***********************************************************
	Filename: app/www/models/menu.php
	Note	: 读取导航菜单
***********************************************************/
class menu_m extends Model
{
	var $langid = "zh";
	function __construct()
	{
		parent::Model();
	}

	function menu_m()
	{
		$this->__construct();
	}

	function langid($langid="zh")
	{
		$this->langid = $langid;
	}

	function get_all($highlight="")
	{
		$sql = "SELECT * FROM ".$this->db->prefix."menu WHERE langid='".$this->langid."' ORDER BY taxis ASC,id DESC";
		$tmplist = $this->db->get_all($sql);
		if(!$tmplist)
		{
			return false;
		}
		$plist = $slist = array();
		foreach($tmplist AS $key=>$value)
		{
			$value = sys_format_menu($value);
			if($value["parentid"])
			{
				$slist[] = $value;
			}
			else
			{
				$plist[] = $value;
			}
		}
		$rslist = array();
		foreach($plist AS $key=>$value)
		{
			$rslist[$key] = $value;
			foreach($slist AS $k=>$v)
			{
				if($v["parentid"] == $value["id"])
				{
					$rslist[$key]["sonlist"][] = $v;
				}
			}
		}
		return $rslist;
	}
        
        
         function get_all2($highlight="")
	{
		$sql = "SELECT * FROM ".$this->db->prefix."menu WHERE langid='".$this->langid."' ORDER BY taxis ASC,id DESC";
		$tmplist = $this->db->get_all($sql);
		if(!$tmplist)
		{
			return false;
		}
		$plist = $slist = array();
		foreach($tmplist AS $key=>$value)
		{
			$value = sys_format_menu($value);
			if($value["parentid"])
			{
				$slist[] = $value;
			}
			else
			{
				$plist[] = $value;
			}
		}
		/*$rslist = array();
		foreach($plist AS $key=>$value)
		{
			$rslist[$key] = $value;
			foreach($slist AS $k=>$v)
			{
				if($v["parentid"] == $value["id"])
				{
					$rslist[$key]["sonlist"][] = $v;
				}
			}
		}*/
		return $tmplist;
	}
        
}

?>