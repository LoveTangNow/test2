<?php
/**
 * Created by PhpStorm.
 * User: ThomasLiu
 * Date: 16/7/4
 * Time: 22:46
 */
$userid = $_GET["userid"];

//链接数据库
$mysqli = new mysqli('127.0.0.1', '', '', 'test');

//查询
$sql = "select newsdetails from news WHERE newsid = ".$userid;
//取得最大新闻序号

$rst2 = mysqli_query($mysqli, $sql);

$num = mysqli_affected_rows($mysqli);

while ($row = mysqli_fetch_row($rst2)) {
    print $row[0];
}

mysqli_free_result($rst2);
mysqli_close($mysqli);