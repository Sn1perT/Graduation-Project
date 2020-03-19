<?php
header("Content-type: text/html; charset=utf-8");
session_start();				//初始化session变量

include('conn.php');

if (!isset($_POST['submit'])) {
    exit('非法访问');
}

$username = $_POST['login_username'];
$pwd = md5($_POST['login_pwd']);
$che = mysql_query("select id from register where username='$username' and password='$pwd' limit 1");
$result = mysql_fetch_array($che);
if ($result) {
    echo "<script>location.href='../index.php';</script>";
    $_SESSION['username']=md5($result['username']);    //将管理员名称存到$_SESSION[admin_name]变量中
	$_SESSION['pwd']=md5($result['password']);            ////将管理员名称存到$_SESSION[pwd]变量中
    exit();
}else{
    echo "<script>alert('用户名或密码不正确，请重新登陆');</script>";
    echo "<script>location.href='login.php';</script>";
    session_start();
    unset($_SESSION['user']);//注销（也就是删除session） 直接unset
}
?>