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

    function votes_inc($id) {
        return $this->db->query("update " . $this->db->prefix . "poll_option set votes=votes+1 where id=" . $id . "");
    }

    function sava_poll_date() {
        $t = time() - 24 * 3600;
        $r = $this->db->get_one("select * from " . $this->db->prefix . "poll_date where time>" . $t . " and ip='" . $_SERVER['REMOTE_ADDR'] . "'");
        if ($r)
            return false;
        return $this->db->query("insert into " . $this->db->prefix . "poll_date(ip,time) values('" . $_SERVER['REMOTE_ADDR'] . "'," . time() . ")");
    }

    function getPollList() {
        return $this->db->get_all("select * from " . $this->db->prefix . "poll order by listOrder asc");
    }

    function getPollOptList($poll_id) {
        return $this->db->get_all("select * from " . $this->db->prefix . "poll_option where poll_id=" . $poll_id . "  order by listOrder asc");
    }

}

?>