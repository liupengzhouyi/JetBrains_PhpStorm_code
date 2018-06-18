<?php
/**
 * Created by PhpStorm.
 * User: liupe
 * Date: 2018-05-25
 * Time: 19:13
 */
//定义多个命名空间和不包含在命名空间中的代码
declare(encoding='UTF-8');

namespace MyProject {
    const a = 123;
    function start() {
        $aa = 234;
        return $aa;
    }
    class Dome{
        function paly() {
            return 5;
        }
    }
}

//不建议在一个文件中定义多个命名空间；
//建议使用 大括号 形式的语法

namespace MyProject02 {

}


?>