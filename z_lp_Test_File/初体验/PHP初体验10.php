<?php
/**
 * Created by PhpStorm.
 * User: liupe
 * Date: 2018-05-28
 * Time: 23:45
 * main for: php类中的继承不会主动继承父类
 */
class BaseClass {
    function __construct() {
        print "BaseClass 类中构造方法" . "<br>";
    }
}
class SubClass extends BaseClass {
    function __construct() {
        parent::__construct();  // 子类构造方法不能自动调用父类的构造方法
        print "SubClass 类中构造方法" .  "<br>";
    }
}
class OtherSubClass extends BaseClass {
    // 继承 BaseClass 的构造方法
    function __construct() {
        print "OtherSubClass 类中的构造方法" .  "<br>";
    }
}

/*
class OtherSubClass extends BaseClass {
    // 继承 BaseClass 的构造方法
}
 */

// 调用 BaseClass 构造方法
$obj = new BaseClass();

// 调用 BaseClass、SubClass 构造方法
$obj = new SubClass();

// 调用 BaseClass 构造方法
$obj = new OtherSubClass();
?>