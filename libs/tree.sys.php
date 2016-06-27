<?php

// +----------------------------------------------------------------------
// | Risingsun
// +----------------------------------------------------------------------
// | Copyright (c) 2012-2013 http://ericbao.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: baoyongxu <baoyongxu@163.com>
// +----------------------------------------------------------------------
class Tree {

    /**
      +----------------------------------------------------------
     * 把返回的数据集转换成Tree
      +----------------------------------------------------------
     * @access public
      +----------------------------------------------------------
     * @param array $list 要转换的数据集
     * @param string $pid parent标记字段
     * @param string $level level标记字段
      +----------------------------------------------------------
     * @return array
      +----------------------------------------------------------
     */
    public function list_to_tree($list, $pk = 'id', $pid = 'pid', $child = '_child', $self = 0, $root = 0) {
        // 创建Tree
        $tree = array();
        if (is_array($list)) {
            // 创建基于主键的数组引用
            $refer = array();
            foreach ($list as $key => $data) {
                $refer[$data[$pk]] = & $list[$key];
            }
            foreach ($list as $key => $data) {
                // 判断是否存在parent
                $parentId = $data[$pid];
                if ((($self == 0 || $root == 0) && $root == $parentId) || ($self == 1 && $root == $data[$pk])) {
                    $tree[] = & $list[$key];
                } else {
                    if (isset($refer[$parentId])) {
                        $parent = & $refer[$parentId];
                        $parent[$child][] = & $list[$key];
                    }
                }
            }
        }//dump($tree);
        return $tree;
    }

    /** 多维数组转换成带前导格式的一维数组 */
    public function getCat($catid = 0, $list= array(),$arr = array(), $prefix = "") {
        static $currentLevel;
        static $array;
        $currentLevel++;
        if ($currentLevel == 1) {
            //转换成树形数组
            $arr = $this->list_to_tree($list, 'id', 'parentid', '_child', 0, $catid);
        }
        foreach ($arr as $key => $vo) {
            foreach ($vo as $field => $val) {
                if ($field != '_child') {
                    $tem[$field] = $val;
                }
            }
            $existChild = array_key_exists('_child', $vo);
            $tem['level'] = $currentLevel;
            $tem['last'] = (($key + 1) === count($arr)) ? 1 : 0;
            //是否最后一个层级
            $tem['lastLevel'] = $existChild ? false : true;
            $tem['prefix'] = ($currentLevel == 1) ? $prefix : $prefix . '<div class="node"></div>';
            $array[] = $tem;
            if ($existChild) {
                if ($currentLevel > 1) {
                    $subPrefix = $tem['last'] ? $prefix . '<div class="indent"></div>' : $prefix . '<div class="line"></div>';
                }
                $this->getCat('',$catid = 0, $vo['_child'], $subPrefix);
            }
        }
        $currentLevel--;
        return $array;
    }

    /** 获取栏目for DWZ's left memu */
    public function getCatOpt($catid = 0, $list= array(),$arr = array(), $prefix = "") {
        static $currentLevel;
        static $array;
        $currentLevel++;
        if ($currentLevel == 1) {
            //转换成树形数组
            $arr = $this->list_to_tree($list, 'id', 'parentid', '_child', 0, $catid);
        }
        foreach ($arr as $key => $vo) {
            foreach ($vo as $field => $val) {
                if ($field != '_child') {
                    $tem[$field] = $val;
                }
            }
            $existChild = array_key_exists('_child', $vo);
            $tem['level'] = $currentLevel;
            $node = (($key + 1) === count($arr)) ? '└' :'├';
            //是否最后一个层级
            $tem['lastLevel'] = $existChild ? false : true;
            $tem['prefix'] = ($currentLevel == 1) ? $prefix : $prefix . $node;
            $array[] = $tem;
            if ($existChild) {
                if ($currentLevel > 1) {
                    $subPrefix = $tem['last'] ? $prefix . '&nbsp;' : $prefix . '│';
                }
                $this->getCatOpt('',$catid = 0, $vo['_child'], $subPrefix);
            }
        }
        $currentLevel--;
        return $array;
    }

    /** 获取导航HTML */
    public function getNav($list,$catid = 0, $level = 0, $self = 0, $class='', $id='', $arr='') {
        static $currentLevel = 0;
        $currentLevel++;
        $str = '<ul class="level_' . $currentLevel . '">';
        if ($currentLevel == 1) {
            //$list = M('Cat')->cache('Nav')->select();
            $arr = $this->list_to_tree($list, 'id', 'parentid', '_child', $self, $catid);
            $str = '<ul class="level_' . $currentLevel . ' ' . $class . '" id="' . $id . '">';
            if ($self) {
                if ($catid == 0) {
                    $str .= '<li class="home"><a class="option" href="/"><span>首页</span></a></li>';
                } else {
                    $str .= '<li class="home"><a class="option" href="'.$arr[0]['link'].'"><span>' . $arr[0]['title'] . '</span></a></li>';
                    $arr = $arr[0]['_child'];
                }
            }
        }
        foreach ($arr as $key => $val) {
            $class = ' class="li" ';
            if ($key === 0)
                $class = ' class="first li" ';
            if ($key + 1 === count($arr))
                $class = ' class="last li" ';
            $str .= '<li ' . $class . '><a class="option" href="'.$val['link'].'"><span>' . $val['title'].'</span></a>';
            if (($currentLevel < $level || $level == 0) && array_key_exists('_child', $val)) {
                $str .= $this->getNav($list,$catid, $level, $self, $class, $id, $val['_child']);
            }
            $str .= '</li>';
        }
        $str .= '</ul>';
        $currentLevel--;
        return $str;
    }
    
    public function getNav_bak($list,$catid = 0, $level = 0, $self = 0, $class='', $id='', $arr='') {
        static $currentLevel = 0;
        $currentLevel++;
        $str = '<ul class="level_' . $currentLevel . '">';
        if ($currentLevel == 1) {
            //$list = M('Cat')->cache('Nav')->select();
            $arr = $this->list_to_tree($list, 'id', 'parentid', '_child', $self, $catid);
            $str = '<ul class="level_' . $currentLevel . ' ' . $class . '" id="' . $id . '">';
            if ($self) {
                if ($catid == 0) {
                    $str .= '<li class="home"><a href"/">首页</a></li>';
                } else {
                    $str .= '<li class="home"><a href="'.$arr[0]['link'].'">' . $arr[0]['title'] . '</a></li>';
                    $arr = $arr[0]['_child'];
                }
            }
        }
        foreach ($arr as $key => $val) {
            $class = '';
            if ($key === 0)
                $class = ' class="first" ';
            if ($key + 1 === count($arr))
                $class = ' class="last" ';
            $str .= '<li ' . $class . '><a href="'.$val['link'].'">' . $val['title'].'</a>';
            if (($currentLevel < $level || $level == 0) && array_key_exists('_child', $val)) {
                $str .= $this->getNav($list,$catid, $level, $self, $class, $id, $val['_child']);
            }
            $str .= '</li>';
        }
        $str .= '</ul>';
        $currentLevel--;
        return $str;
    }

}

?>
