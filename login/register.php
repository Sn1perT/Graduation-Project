<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注册</title>
    <link rel="shortcut icon" href="/static/img/logo.ico">
    <link rel="stylesheet" href="/static/css/register.css">
    <link rel="stylesheet" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body>
        <div id="login-box">
        <h1>web流量分析安全检测系统</h1>
            <div class="form">
                <form action="register_check.php" method="POST">
                    <div class="item">
                        <i class="fa fa-user-secret" aria-hidden="true"></i>
                        <input type="text" placeholder="username" name="username">
                    </div>
                    <div class="item">
                        <i class="fa fa-ticket" aria-hidden="true"></i>
                        <input type="password" placeholder="password" name="password">
                    </div>
                    <div class="item">
                        <i class="fa fa-ticket" aria-hidden="true"></i>
                        <input type="password" placeholder="confirm password" name="pwd">
                    </div>
                    <div class="sub">
                        <input type="submit" value="立即注册" name="submit">
                    </div>
                </form>
            </div>
        </div>
</body>
</html>


<!--<script language=Javascript>

    function Inputcheck(RegForm){
        if (RegForm.username.value == "") {
            alert("用户名不能为空");
            return(false);
        }
        if (RegForm.password.value == "") {
            alert("密码不能为空");
            return(false);
        }
        if (RegForm.pwd.value != RegForm.password.value) {
            alert("两次输入密码不一致");
            RegForm.repass.focus();
            return(false);
        }
    }
    
</script>-->