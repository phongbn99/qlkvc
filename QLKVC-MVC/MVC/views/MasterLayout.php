<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>public/assets/clients/css/main.css" />
    <link rel="stylesheet"
        href="<?php echo WEB_ROOT; ?>public/assets/clients/css/fontawesome-free-6.1.2-web/css/all.min.css" />

    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>public/assets/clients/css/base.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <title><?php echo $data['title']; ?></title>
</head>

<body>
    <div id="container">
        <?php
            include_once 'inc/header.php';
        ?>
        <?php   
            if(!Session::get("login")){
                echo '<div class="footer-login footer-login-fixed">
                <p>
                    Bạn vui lòng ';
                    ?>
        <input type="button" value="Đăng nhập" class="open-login" onclick="location.href='login'"></input>
        <?php echo ' hoặc '; ?>
        <input type="button" value="Đăng ký" class="open-signup" onclick="location.href='signup'"></input>
        <?php  echo ' để sử dụng dịch vụ của website.</p>'; ?>

        <script>
        document.querySelector(".login").style.display = "block";
        document.getElementById("menu-info").style.display = "none";
        </script>
        <?php
        }else{ ?>
        <script>
        document.querySelector(".login").style.display = "none";
        document.getElementById("menu-info").style.display = "block";
        </script>
        <?php } ?>
    </div>

    <div class="open-share"></div>
    <div class="share">
        <ul>
            <li style="
              font-size: 1.3rem;
              background-color: rgba(0, 0, 0, 0.5);
              color: #fff;
            ">
                Share
            </li>
            <li class="facebook">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
            </li>
            <li class="twitter">
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </li>
            <li class="ggplus">
                <a href=""><i class="fa-brands fa-google-plus-g"></i></a>
            </li>
            <li class="prin">
                <a href=""><i class="fa-brands fa-pinterest-p"></i></a>
            </li>
            <li class="mail">
                <a href=""><i class="fa-regular fa-envelope"></i></a>
            </li>
            <li class="queen">
                <a href=""><i class="fa-solid fa-crown"></i></a>
            </li>
            <li class="close-share"></li>
        </ul>

    </div>

    <div class="contact">
        <ul>
            <li class="contact-messenger">
                <a href="https://m.me/cong200x" target="_blank"><i class="fa-brands fa-facebook-messenger"></i></a>
            </li>
            <li class="contact-phone">
                <a href="tel:+84708844444"><i class="fa-solid fa-phone"></i></a>
            </li>
        </ul>
    </div>
    <div id="cskh">
        <div id="cskh-form"></div>
    </div>

    <div id="btn-ontop"></div>

    <!-- BANNER -->
    <?php
            include_once 'inc/banner.php';
        ?>

    <!-- CONTENT -->
    <div class="content">
        <?php
                include_once './MVC/views/pages/'.$data['page'].'.php';
            ?>
    </div>
    <!-- FOOTER -->
    <?php
        include_once 'inc/footer.php';
        ?>


    <dialog id="menu" class="border-dialog">
        <div class="dl-menu-header">
            <div
                style="background-color: #0a4976; color: #fff; text-transform: uppercase; position: relative; padding: 10px; font-size: 1.6rem;">
                <span>Danh mục</span>
                <input id="btn-close-menu" type="button" value="X">
            </div>
            <div style="position: relative;"><input type="search" placeholder="Nhập từ khóa..."
                    style="width: 100%; padding: 10px;">
                <i class="fa-solid fa-magnifying-glass search"
                    style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); font-size: 1.6rem;"></i>
            </div>
        </div>
    </dialog>

    <dialog id="event-lich" class="=border-dialog"></dialog>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?php echo WEB_ROOT; ?>public/assets/clients/js/main.js"></script>

</body>

</html>