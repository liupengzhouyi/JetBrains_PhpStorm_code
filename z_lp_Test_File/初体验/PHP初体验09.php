<?php
/**
 * Created by PhpStorm.
 * User: liupe
 * Date: 2018-05-25
 * Time: 20:04
 */

class Site {
    /* 成员变量 */
    var $url;
    var $title;

    /**
     * Site constructor.
     * @param $url
     * @param $title
     */
    public function __construct($url, $title)
    {
        $this->url = $url;
        $this->title = $title;
    }

    /* 成员函数 */
    function setUrl($par){
        $this->url = $par;
    }

    function getUrl(){
        echo $this->url . PHP_EOL . "<br>";
    }

    function setTitle($par){
        $this->title = $par;
    }

    function getTitle(){
        echo $this->title . PHP_EOL . "<br>";
    }
}

$runoob = new Site('www.runoob.com', '菜鸟教程');
$taobao = new Site('www.taobao.com', '淘宝');
$google = new Site('www.google.com', 'Google 搜索');

// 调用成员函数，获取标题和URL
$runoob->getTitle();
$taobao->getTitle();
$google->getTitle();

$runoob->getUrl();
$taobao->getUrl();
$google->getUrl();
?>