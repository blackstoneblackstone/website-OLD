<?php
/**
 * Created by PhpStorm.
 * User: lihb
 * Date: 7/12/16
 * Time: 3:39 PM
 */
if (@$path_info = $_SERVER["PATH_INFO"]) {
    $params=str_replace(".html","",$path_info);
    $params=str_replace("/","",$params);
    $param=explode("-",$path_info);
    $p="";
    json_encode($param);
    for($i=0;$i<count($param);$i++){
        $x=explode(".",$param[$i]);
        $p=$p.$x[0]."=".$x[1]."&";
    }
    $p=substr($p,1,count($p)-2);
    print_r(curlGet('http://www.guohans.com/index.php?'.$p,"get"));die;
}

function curlGet($url, $method = 'get', $data = '')
{
    $ch = curl_init();
    $header = "Accept-Charset: utf-8";
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, strtoupper($method));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');
    curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $temp = curl_exec($ch);
    return $temp;
}


