<?php
/**
 * Created by PhpStorm.
 * User: liupeng
 * Date: 2018-05-25
 * Time: 19:48
 */

class Site {
    //成员变量
    var $url;
    var $title;

    //成员函数
    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url . PHP_EOL;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title . PHP_EOL;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

}

$runoob = new Site;
$taobao = new Site;
$google = new Site;

// 调用成员函数，设置标题和URL
$runoob->setTitle( "菜鸟教程" );
$taobao->setTitle( "淘宝" );
$google->setTitle( "Google 搜索" );

$runoob->setUrl( 'www.runoob.com' );
$taobao->setUrl( 'www.taobao.com' );
$google->setUrl( 'www.google.com' );

// 调用成员函数，获取标题和URL
$runoob->getTitle();
$taobao->getTitle();
$google->getTitle();

echo $runoob->getUrl();
echo $taobao->getUrl();
echo $google->getUrl();


?>