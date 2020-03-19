<?php
require_once('../waf/waf.php');
function writeFile($data,$type='a'){
    $filename = date("Ymd").".log";
    $handle =@ fopen($filename, $type);
    flock($handle, LOCK_EX);
    ob_start();
    echo (date('Y-m-d H:i:s') . "\n");
    print_r ($data);
    echo "\n";
    $string = ob_get_contents();
    ob_end_clean();
    $fettle = @fwrite($handle, $string);
    fclose($handle);
    @chmod($filename,0777);
    }
$log = $_SERVER["REMOTE_ADDR"].'   http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"]; 
writeFile($log);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登录</title>
    <link rel="shortcut icon" href="/static/img/logo.ico">
    <link rel="stylesheet" href="../static/css/login.css">
    <link rel="stylesheet" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body>
    <div id="login-box">
    <h1>web流量分析安全检测系统</h1>
        <div class="form">
            <form action="login_check.php" method="POST">
                <div class="item">
                    <i class="fa fa-user-secret" aria-hidden="true"></i>
                    <input type="text" name="login_username" placeholder="username">
                </div>
                <div class="item">
                    <i class="fa fa-ticket" aria-hidden="true"></i>
                    <input type="password" name="login_pwd" placeholder="password">
                </div>
                <div class="sub">
                    <input type="submit" value="登录" name="submit">
                    <a href="register.php"><button type="button">注册</button></a>
                </div> 
            </form>
        </div>
    </div>

</body>
</html>
