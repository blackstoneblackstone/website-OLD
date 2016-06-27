<?php

/* * *********************************************************
  Filename: app/admin/control/list.php
  Note	: 内容管理
 * ********************************************************* */

class poll_c extends Control {

    function __construct() {
        parent::Control();
        $this->load_model("poll");
    }

    function poll_c() {
        $this->__construct();
    }

    function index_f() {
        sys_popedom($this->module_sign . ":list", "tpl");
        $pollList = $this->poll_m->getPollList();
        foreach ($pollList as $key => $value) {
            $pollOptList[$value['id']] = $this->poll_m->getPollOptList($value['id']);
        }
        $this->tpl->assign('pollList', $pollList);
        $this->tpl->assign('pollOptList', $pollOptList);
        $this->tpl->display("poll/list.html");
    }

    function ajax_status_f() {
        $id = $this->trans_lib->int("id");
        if (!$id) {
            exit("error:没有指定ID");
        }
        $rs = $this->poll_m->get_one($id);
        $status = $rs["status"] ? 0 : 1;
        $this->poll_m->set_pl($id, "status", $status);
        exit("ok");
    }

    function set_f() {
        $id = $this->trans_lib->int("id");
        if ($id) {
            $rs = $this->poll_m->get_one($id);
            $this->tpl->assign("rs", $rs);
        }
        $this->tpl->display("poll/set.html");
    }

    function option_f() {
        $id = $this->trans_lib->int("id");
        $poll_id = $this->trans_lib->int("poll_id");
        if ($id) {
            $rs = $this->poll_m->getPollOptOne($id);
            $poll_id = $rs['poll_id'];
            $this->tpl->assign("rs", $rs);
        }
        $this->tpl->assign("poll_id", $poll_id);
        $this->tpl->display("poll/option.html");
    }
    
    function optionsave_f() {
        $id = $this->trans_lib->int("id");
        
        $array = array();
        $array["title"] = $this->trans_lib->safe("title");
        $array["listOrder"] = $this->trans_lib->int("listOrder");
        $array["votes"] = $this->trans_lib->int("votes");
        $array['poll_id'] = $this->trans_lib->int("poll_id");

        $this->poll_m->optionsave($array, $id);
        error("信息添加/编辑成功！", $this->url("poll"));
    }

    function setok_f() {
        $id = $this->trans_lib->int("id");
        $array = array();
        $array["title"] = $this->trans_lib->safe("title");
        $array["listOrder"] = $this->trans_lib->int("listOrder");

        $this->poll_m->save($array, $id);
        error("信息添加/编辑成功！", $this->url("poll"));
    }

    function ajax_update_cate_f() {
        $cateid = $this->trans_lib->int("cateid");
        $id = $this->trans_lib->safe("id");
        if (!$cateid || !$id) {
            exit("error: 操作错误！");
        }
        $this->list_m->set_cate($id, $cateid);
        exit("ok");
    }

    function ajax_pl_f() {
        $id = $this->trans_lib->safe("id");
        $field = $this->trans_lib->safe("field");
        $val = $this->trans_lib->int("val");
        if ($field == 'post_date') {
            $val = $this->system_time;
        }
        if (!$id) {
            exit("error:没有指定ID");
        }
        $array = sys_id_list($id);
        if (!$array[0]) {
            exit("error:错误");
        }
        $rs = $this->list_m->get_one($array[0]);
        sys_popedom($rs["module_id"] . ":check", "ajax");
        $this->list_m->set_pl($id, $field, $val);
        exit("ok");
    }

    function taxis_pl_f() {
        $taxis = $this->trans_lib->safe("taxis");
        if (!$taxis || !is_array($taxis) || count($taxis) < 1) {
            exit("error: 错误，没有取得有效信息");
        }
        foreach ($taxis AS $key => $value) {
            $key = intval($key);
            $value = intval($value);
            $this->list_m->set_taxis($key, $value);
        }
        exit("ok");
    }

    function ajax_del_f() {
        $id = $this->trans_lib->safe("id");
        if (!$id) {
            exit("error:没有指定ID");
        }
        $array = sys_id_list($id);
        if (!$array[0]) {
            exit("error:错误");
        }
        //$rs = $this->poll_m->get_one($array[0]);
        //$module_id = $rs["module_id"];
        //sys_popedom($module_id . ":delete", "ajax");
        $this->poll_m->del($id);
        exit("ok");
    }

    //加载分类
    function _load_cate($module_id, $cate_id, $if_array = false, $if_ext_select = true) {
        $this->load_model("cate");
        $this->cate_m->get_catelist($module_id);
        $ext_message = $if_ext_select ? $this->lang["select_cate"] : "";
        $cate_html = $this->cate_m->html_select("cate_id", $cate_id, $ext_message);
        $this->tpl->assign("cate_html", $cate_html);
        if ($if_array) {
            $cate_list_array = $this->cate_m->html_select_array();
            $this->tpl->assign("cate_list_array", $cate_list_array);
        }
        return $cate_list_array ? $cate_list_array : $this->cate_m->catelist();
    }

    //加载模块
    function _load_module($module_id) {
        $m_rs = $this->module_m->get_one($module_id);
        $this->tpl->assign("m_rs", $m_rs);
        return $m_rs;
    }

    //加载扩展的字段
    function _load_ext_fields($module_id) {
        if (!$module_id) {
            return false;
        }
        //读取扩展的字段列表
        $ext_list = $this->module_m->fields_index($module_id, 1);
        return $ext_list;
    }

}

?>