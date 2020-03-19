<?php

include('conn.php');

if (!isset($_POST['submit'])) {
    exit('非法访问');
}


$username = $_POST['username'];
$password = $_POST['password'];
$pwd = $_POST['pwd'];

//写入数据

if (strlen($password)<6) {
    exit('密码长度至少为6位！<a href="javascript:history.back(-1);">返回重试</a>');
}

if ($pwd==$password) {
    $che = mysql_query("select username from register where username = '$username' limit 1");
    if (mysql_fetch_array($che)) {
        echo '错误：用户名已经存在。<a href="javascript:history.back(-1);">返回重试</a>';
        exit;
    }
    $password = md5($password);
    $pwd = md5($pwd);
    $sql = "INSERT INTO register(username,password,pwd) VALUES('$username','$password','$pwd')";
    $res = mysql_query($sql,$conn);
    if ($res) {
        echo '<script>alert("用户注册成功")</script>';
        echo '<script>location.href="login.php";</script>';
        exit;
    }else{
        echo '注册失败！' ,mysql_error(),'<br>';
        echo '<a href="javascript:history.back(-1);">返回重试</a>';
    }
}else{
    echo '密码不一致';
    echo '<a href="javascript:history.back(-1);">返回重试</a>';
}

?>