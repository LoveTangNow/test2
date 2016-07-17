<?php
/**
 * Created by PhpStorm.
 * User: ThomasLiu
 * Date: 16/7/4
 * Time: 17:35
 */

$userid = $_GET["userid"];

//链接数据库
$mysqli = new mysqli('127.0.0.1', '', '', 'test');

//查询
$sqll = "SELECT * FROM news ORDER BY newsid DESC";
$sql = "select max(newsid) from news";
//取得最大新闻序号

$rst2 = mysqli_query($mysqli, $sqll);

while ($row = mysqli_fetch_row($rst2)) {
 print $row[0].",";
}

//$title_sql = "select newstitle from news WHERE  newsid = ".$row[0];
//$detile_sql = "select newsdetails from news WHERE  newsid = ".$row;
//$url_Sql = "select newsurl from news WHERE  newsid = ".$row;

//$rst22 = mysqli_query($mysqli, $title_sql);
//$rst222 = mysqli_query($mysqli, $detile_sql);
//$rst2222 = mysqli_query($mysqli, $url_Sql);

//$title =  mysqli_fetch_row($rst22);
//$detile =  mysqli_fetch_row($rst222);
//$url =  mysqli_fetch_row($rst2222);





//影响行数吧?

//print $userid+"userid";
//print $mysqli+"mysqli";
//print $sql+"sql";
//print $rst2+"rst2";
//print $num+"num";

//print $title."?????".$title_sql."?????".$rst22."?????".$num;

//while ($row = mysqli_fetch_row($rst2)) {
//    print $row[0];
//}
