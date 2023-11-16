<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>public/assets/clients/css/signup.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title><?php echo $data['title'] ?></title>
</head>

<body>
    <div class="container">
        <div class="content-signup">
            <div class="avatar"><i class="bi-person-circle"></i></div>
            <div class="title"><span>L</span><span>O</span><span>G</span><span>I</span><span>N</span><span>
                    M</span><span>E</span><span>M</span><span>B</span><span>E</span><span>R</span>
            </div>
            <div class="thongbao">
                <?php if(!empty(Session::get("thongbao"))){
                    echo Session::get("thongbao");
                   
                } ?>
            </div>

            <div class="form">
                <form class="login-form" method="POST" action="<?php echo WEB_ROOT; ?>login/checkLogin">
                    <div>
                        <div class="input-group ">
                            <input class="input" id="signup-username" type="text" name="loginUsername"
                                autocomplete="off" required value="<?php 
                                if(empty(Session::get("thongbao"))){
                                    if(!empty(Format::unCaesar($_COOKIE[Format::caesar('user',10)],10))){
                                        echo  Format::unCaesar($_COOKIE[Format::caesar('user',10)],10);
                                    }
                                    
                                }else{
                                    if(Session::get("user")){
                                        echo Session::get("user");
                                    }
                                } 
                                ?>">
                            <label class="label" for="signup-username">Username</label>
                        </div>
                        <div class="stt user-invalid"></div>
                        <div class="input-group">
                            <input class="input pass" id="signup-password" type="password" name="loginPassword" required
                                value="<?php 
                                if(empty(Session::get("thongbao"))){
                                    if(!empty(Format::unCaesar($_COOKIE[Format::caesar('pass',10)],10))){
                                        echo  Format::unCaesar($_COOKIE[Format::caesar('pass',10)],10);
                                    }
                                }else{
                                    if(Session::get("pass")){
                                        echo Session::get("pass");
                                    }
                                }?>">
                            <label class="label" for="signup-password">Password</label>
                            <i class="bi bi-eye-slash"></i>
                        </div>
                        <div class="stt pass-invalid"></div>
                    </div>

                    <div
                        style="font-size: 100%; display: flex; margin-bottom: 20px; margin-top: 20px; justify-content: space-between;">
                        <div style="display: flex;"><input id="chk" type="checkbox" checked name="remember"
                                class="margin-right-left">Remember</div>
                        <a href="forgotpassword">Forgot password?</a>
                    </div>

                    <div class="btn-login">
                        <input id="btn-login" type="submit" value="Login" name="btn_login" onclick="">
                    </div>

                    <div style="width: 100%; text-align: center; margin-top: 20px;">Not a member? <span><a
                                href="signup">Sign
                                up</a></span></div>

                </form>
            </div>
        </div>

    </div>



    <script src="<?php echo WEB_ROOT; ?>public/assets/clients/js/signup.js"></script>
    <script src="<?php echo WEB_ROOT; ?>public/assets/clients/js/fun.js"></script>
</body>

</html>