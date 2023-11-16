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
            <form action="<?php echo WEB_ROOT;?>admin/login/a" method="POST">
                <h3>Forgot Password</h3>

                <div class="input-text">
                    <input type="text" required="" name="username" id="username" />
                    <label for=" username">Username</label>
                </div>

                <div class="input-text">
                    <input type="text" required="" name="email" id="email" />
                    <label for="email">Email</label>
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
                    if(isset($_POST['login'])){
                        echo $data['thongbao'];
                        unset($_POST['login']);
                    }
                ?>
                </div>
                <div class="btn">
                    <input type="submit" value="login" name="login" />
                </div>
                <div class="copyright">
                    <label>Copyright &copy; HMC</label>
                </div>
            </form>

        </div>

    </div>
    <div class="wave"></div>
    <div class="wave2"></div>
</body>

</html>