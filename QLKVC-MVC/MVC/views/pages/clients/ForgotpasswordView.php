<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <title><?php echo $data['title'] ?></title>

    <style>
    body {
        background: url(https://www.wallpapertip.com/wmimgs/196-1963020_website-backgrounds-website-login-page-background.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100vw;
        min-height: 100vh;
    }

    .form-gap {
        padding-top: 70px;
    }

    .thongbao1 {
        font-size: 1.4rem;
        color: red;
    }

    .input-group {
        margin-bottom: 5px;
    }

    #code {
        visibility: hidden;

    }
    </style>
</head>

<body>
    <div class="form-gap"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">
                            <h3><i class="fa fa-lock fa-4x"></i></h3>
                            <h2 class="text-center">Forgot Password?</h2>
                            <p>You can reset your password here.</p>
                            <div class="thongbao1"><?php
                                if(Session::get("thongbao1")){
                                    echo Session::get("thongbao1");
                                    if(Session::get("thongbao1") == "Email chưa đăng ký!"){
                                        Session::destroy(1);
                                    }else{
                                        
                                    }
                                }
                            ?></div>
                            <div class="panel-body">

                                <form id="register-form" role="form" autocomplete="off" class="form" method="post"
                                    action="<?php echo $web_root; ?>forgotpassword/checkMail">

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <input id="email" name="email" placeholder="Email address" required
                                                class="form-control" type="email" value="<?php if(Session::get("email")){
                                                    echo Session::get("email");
                                                } ?>">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">CODE</span>
                                            <input id="code" name="code" placeholder="Enter code" class="form-control"
                                                type="number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block"
                                            id="reset_pass" value="Send Code" type="submit">
                                    </div>

                                    <div style="display: flex; justify-content: space-between; font-size: 1.6rem;">
                                        <a href="login">Login</a>
                                        <a href="signup">Sign up</a>
                                    </div>
                                    <div style="margin-top: 20px;"><a href="index.php">Go home</a></div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    if (document.querySelector(".thongbao1").innerHTML.includes("đã gửi mã xác nhận về email")) {
        document.getElementById("code").style = "visibility: visible";
        document.getElementById("email").setAttribute('readonly', true);
        document.getElementById("reset_pass").value = "Reset password";
    } else {
        document.getElementById("code").style = "visibility: hidden";
        document.getElementById("email").removeAttribute('readonly');
        document.getElementById("reset_pass").value = "Send code";
    }
    </script>
    <script src="<?php echo $web_root; ?>public/assets/clients/js/fun.js"></script>
</body>

</html>