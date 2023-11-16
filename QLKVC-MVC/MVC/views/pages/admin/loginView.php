<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>public/assets/admin/css/login.css" />
</head>

<body>
    <div class="box">
        <div class="form">
            <form action="<?php echo WEB_ROOT;?>admin/login/post_data" method="POST">
                <h3>Login Admin</h3>

                <div class="input-text">
                    <input type="text" required="" name="username" id="username" value="<?php
                    if(empty(Session::get("thongbao"))){
                        if(!empty(Format::unCaesar($_COOKIE[Format::caesar('admin',10)],10))){
                            echo  Format::unCaesar($_COOKIE[Format::caesar('admin',10)],10);
                        }
                    }else{
                        if(Session::get("adminUser")){
                            echo Session::get("adminUser");
                        }
                    } ?>" />
                    <label for="username">Username</label>
                </div>

                <div class="input-text">
                    <input type="password" required="" name="password" id="password" value="<?php 
                    if(empty(Session::get("thongbao"))){
                        if(!empty(Format::unCaesar($_COOKIE[Format::caesar('passAdmin',10)],10))){
                            echo  Format::unCaesar($_COOKIE[Format::caesar('passAdmin',10)],10);
                        }
                    }else{
                        if(Session::get("adminPass")){
                            echo Session::get("adminPass");
                        }
                    } ?>" />
                    <label for="password">Password</label>
                    <i class="bi bi-eye-slash" id="display-pass"></i>
                </div>

                <div class="link">
                    <div style="display: flex;">
                        <input type="checkbox" checked name="remember" id="remember" value="1"
                            style="margin-right: 5px" />
                        <label for="remember" style="margin-bottom: 0;">Remember</label>
                    </div>
                    <a href="forgotpwd">Forgot Password?</a>
                </div>
                <div class="status">
                    <?php
                    if(!empty(Session::get("thongbao"))){
                        echo Session::get("thongbao");
                        Session::set("thongbao","");
                    }
                ?>
                </div>
                <div class="btn">
                    <input type="submit" value="login" name="login" />
                </div>
                <div class="copyright">
                    <label>Copyright &copy; Anh Phong</label>
                </div>
            </form>

        </div>

    </div>
    <div class="wave"></div>
    <div class="wave2"></div>
</body>

</html>