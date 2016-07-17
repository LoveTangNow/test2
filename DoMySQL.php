<?php
/**
 * Created by PhpStorm.
 * User: ThomasLiu
 * Date: 16/6/29
 * Time: 21:21
 */
header("Content-type: text/html; charset=utf-8");
//解决中文echo乱码

//创建mysqli对象方式 1
//屏蔽连接产生的错误
$mysqli = new mysqli('localhost', '', '', 'test');

//只能用函数来判断是否连接成功
if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    echo 'mysql连接失败';
} else {
    echo 'mysql连接成功', '<br>';
}

//创建mysqli对象方式 2 可以设置一些参数
//$mysqli = mysqli_init();
//$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);//设置超时时间
//$mysqli->real_connect('localhost', '', '', 'test');

$sql = "select * from users";
$rst2 = mysqli_query($mysqli, $sql);


$num = mysqli_affected_rows($mysqli);
//获取操作的行数

while ($row = mysqli_fetch_row($rst2)) {
    echo $row[0], '<br>';
}

echo '操作了' . $num . '行';

echo $_SERVER['DOCUMENT_ROOT'];

mysqli_close($mysqli);


?>
