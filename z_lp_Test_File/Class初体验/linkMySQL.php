<?php
/**
 * Created by PhpStorm.
 * User: liupe
 * Date: 2018-07-04
 * Time: 21:29
 */

$servername = "localhost:3306";
$username = "root";
$password = "lp184126";

// 创建连接
$conn = mysqli_connect($servername, $username, $password);

// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "连接成功";

?>