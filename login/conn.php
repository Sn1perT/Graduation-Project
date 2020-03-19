<?php

$conn = @mysql_connect("localhost","root","root");//连接数据库
if (!$conn) {
    die("连接数据库失败:" .mysql_error());
}
mysql_select_db("weblogger",$conn);//选择数据库
mysql_query("set names utf8");

?>