<?php
/**
 * Created by PhpStorm.
 * User: liupe
 * Date: 2018-06-19
 * Time: 00:44
 */

//请修改变量p的正则表达式，使他能够匹配str中的电话
//$p = '/\d+-\d+/';
//$p = '/\d+\-\d+/';
//$p = '/[\d]+\-[\d]+/';
//$p = '/[\d|-]+/';
$str = "我的电话是010-12345678";
preg_match($p, $str, $match);
echo $match[0];
?>