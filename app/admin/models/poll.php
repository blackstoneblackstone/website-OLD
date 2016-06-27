<?php

#=====================================================================
#	Filename: app/www/models/list.php
#	Note	: 获取内容数据
#=====================================================================

class poll_m extends Model {

    function __construct() {
        parent::Model();
    }

    function poll_m() {
        $this->__construct();
    }

    function getPollList() {
        return $this->db->get_all("select * from " . $this->db->prefix . "poll order by listOrder asc");
    }

    function getPollOptList($poll_id) {
        return $this->db->get_all("select * from " . $this->db->prefix . "poll_option where poll_id=" . $poll_id."  order by listOrder asc");
    }
    
    function getPollOptOne($id) {
        return $this->db->get_one("select * from " . $this->db->prefix . "poll_option where id=" . $id);
    }

//取得值
    function get_one($id) {
        $sql = " SELECT * ";
        $sql.= " FROM " . $this->db->prefix . "poll";
        $sql.= " WHERE id='" . $id . "'";
        $rs = $this->db->get_one($sql);
        return $rs;
    }

    function set_pl($id, $field, $val) {
        $sql = "UPDATE " . $this->db->prefix . "poll SET " . $field . "='" . $val . "' WHERE id IN(" . $id . ")";
        return $this->db->query($sql);
    }

    function save($data, $id = 0) {
        if ($id) {
            $this->db->update_array($data, "poll", array("id" => $id));
            return true;
        } else {
            $insert_id = $this->db->insert_array($data, "poll");
            return $insert_id;
        }
    }
    function optionsave($data, $id = 0) {
        if ($id) {
            $this->db->update_array($data, "poll_option", array("id" => $id));
            return true;
        } else {
            $insert_id = $this->db->insert_array($data, "poll_option");
            return $insert_id;
        }
    }
function del($id)
	{
		$sql = "DELETE FROM ".$this->db->prefix."poll WHERE id='".$id."'";
		return $this->db->query($sql);
	}
}

?>