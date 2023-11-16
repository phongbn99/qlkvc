<?php
    include_once './MVC/configs/config.php';

?>

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
            <header>
                <h3>Sign up with your email</h3>
                <p>Already have an account? <span><a href="login">Login</a></span> </p>
            </header>
            <div class="thongbao">
                <?php 
                if(!empty(Session::get("thongbao"))){
                    echo Session::get("thongbao");
                    Session::destroy(1);
                } 
            ?></div>

            <div class="form">
                <form class="signup-form" method="POST" action="<?php echo WEB_ROOT; ?>signup/themTK">
                    <div>
                        <div class="input-group">
                            <input class="input signupName" id="signup-firstname" type="text" name="signupFirstname"
                                autocomplete="off" required value="<?php 
                                if(!empty(Session::get("fname"))){
                                    echo Session::get("fname");
                                    Session::destroy(1);
                                } 
                                ?>">
                            <label class="label" for="signup-firstname">First name</label>
                        </div>
                        <div class="stt name-invalid"></div>
                        <div class="input-group">
                            <input class="input signupName" id="signup-lastname" type="text" name="signuplastname"
                                autocomplete="off" required value="<?php 
                                if(!empty(Session::get("lname"))){
                                    echo Session::get("lname");
                                    Session::destroy(1);
                                } 
                                ?>">
                            <label class="label" for="signup-lastname">Last name</label>
                        </div>
                        <div class="stt name-invalid"></div>
                        <div class="input-group">
                            <input class="input" id="signup-email" type="text" name="signupEmail" autocomplete="off"
                                required onkeyup="return inputEmail()" value="<?php 
                                if(!empty(Session::get("email"))){
                                    echo Session::get("email");
                                    Session::destroy(1);
                                } 
                                ?>">
                            <label class="label" for="signup-email">Email@gmail.com</label>
                        </div>
                        <div class="stt email-invalid"></div>
                        <div class="input-group ">
                            <input class="input" id="signup-username" type="text" name="signupUsername"
                                autocomplete="off" required onkeyup="inputUser()" value="<?php 
                                if(!empty(Session::get("user"))){
                                    echo Session::get("user");
                                    Session::destroy(1);
                                } 
                                ?>">
                            <label class="label" for="signup-username">Username</label>
                        </div>
                        <div class="stt user-invalid"></div>
                        <div class="input-group">
                            <input class="input pass" id="signup-password" type="password" name="signupPassword"
                                required onkeyup="inputPass()" value="<?php 
                                if(!empty(Session::get("pass"))){
                                    echo Session::get("pass");
                                    Session::destroy(1);
                                } 
                                ?>">
                            <label class="label" for="signup-password">Password</label>
                            <i class="bi bi-eye-slash"></i>
                        </div>
                        <div class="stt email-invalid"></div>
                        <div class="input-group ">
                            <input class="input" id="ghi_chu" type="text" name="ghichu" autocomplete="off" required
                                onkeyup="inputUser()" value="<?php 
                                if(!empty(Session::get("user"))){
                                    echo Session::get("user");
                                    Session::destroy(1);
                                } 
                                ?>">
                            <label class="label" for="signup-username">Ghi chú</label>
                        </div>


                        <div class="stt pass-invalid"></div>
                    </div>

                    <div style="font-size: 70%; display: flex; margin-bottom: 20px; margin-top: 20px;">
                        <input id="chk" type="checkbox" checked class="margin-right-left">I agree to the <span
                            class="margin-right-left"><a href="#">Terms of Service </a></span> and <span
                            class="margin-right-left"><a href="#"> Privacy Policy</a></span>
                    </div>

                    <div class="btn-signup">
                        <input id="btn-signup" type="submit" value="Create Account" name="btn_signup"
                            onclick="signupBtn()">
                    </div>
            </div>
            </form>
        </div>

    </div>



    <script src="<?php echo WEB_ROOT; ?>public/assets/clients/js/signup.js"></script>
    <script src="<?php echo WEB_ROOT; ?>public/assets/clients/js/fun.js"></script>
</body>

</html>