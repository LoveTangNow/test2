<?php
/**
 * Created by PhpStorm.
 * User: ThomasLiu
 * Date: 16/7/2
 * Time: 13:39
 */

$userid = $_GET["usernamein"];

//链接数据库
$mysqli = new mysqli('127.0.0.1', '', '', 'test');

//查询
$sql = "select userpassword from users where userid = ".$userid;

$rst2 = mysqli_query($mysqli, $sql);

$num = mysqli_affected_rows($mysqli);

//print $userid+"userid";
//print $mysqli+"mysqli";
//print $sql+"sql";
//print $rst2+"rst2";
//print $num+"num";

while ($row = mysqli_fetch_row($rst2)) {
    print $row[0];
}

mysqli_free_result($rst2);
mysqli_close($mysqli);
