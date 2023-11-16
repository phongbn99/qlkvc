<?php
    include_once './MVC/configs/config.php';
    include_once './public/lib/format.php';
    include_once './public/lib/session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="all,follow">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet"
        href="<?php echo WEB_ROOT; ?>public/assets/admin/vendor/choices.js/public/assets/styles/choices.min.css" />
    <link rel="stylesheet"
        href="<?php echo WEB_ROOT; ?>public/assets/admin/vendor/overlayscrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>public/assets/admin/css/style.default.css"
        id="theme-stylesheet">
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>public/assets/admin/css/custom.css">
    <link rel="shortcut icon" href="<?php echo WEB_ROOT; ?>public/assets/admin/img/favicon.ico">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

</head>
<title><?php echo $data['title']; ?></title>
</head>

<body>
    <div>
        <?php include_once './MVC/views/pages/'.$data['page'].'.php'; ?>
    </div>

    <!-- scrip -->
    <script src="<?php echo WEB_ROOT; ?>public/assets/admin/js/main.js"></script>
    <!-- JavaScript files-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

    <script src="<?php echo WEB_ROOT; ?>public/assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo WEB_ROOT; ?>public/assets/admin/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo WEB_ROOT; ?>public/assets/admin/vendor/just-validate/js/just-validate.min.js"></script>
    <script src="<?php echo WEB_ROOT; ?>public/assets/admin/vendor/choices.js/public/assets/scripts/choices.min.js">
    </script>
    <script src="<?php echo WEB_ROOT; ?>public/assets/admin/vendor/overlayscrollbars/js/OverlayScrollbars.min.js">
    </script>
    <script src="<?php echo WEB_ROOT; ?>public/assets/admin/js/charts-home.js"></script>
    <script src="<?php echo WEB_ROOT; ?>public/assets/admin/js/front.js"></script>
    <script src="<?php echo WEB_ROOT; ?>public/assets/admin/js/fun.js"></script>
    <script>
    // ------------------------------------------------------- //
    //   Inject SVG Sprite - 
    //   see more here 
    //   https://css-tricks.com/ajaxing-svg-sprite/
    // ------------------------------------------------------ //
    function injectSvgSprite(path) {

        var ajax = new XMLHttpRequest();
        ajax.open("GET", path, true);
        ajax.send();
        ajax.onload = function(e) {
            var div = document.createElement("div");
            div.className = 'd-none';
            div.innerHTML = ajax.responseText;
            document.body.insertBefore(div, document.body.childNodes[0]);

        }
    }

    injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</body>

</html>