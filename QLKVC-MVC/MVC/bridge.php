<?php
// define('_DIR_ROOT', __DIR__);

// if(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on'){
//     $web_root = 'https://'.$_SERVER['HTTP_HOST'];
// }else{
//     $web_root = 'http://'.$_SERVER['HTTP_HOST'];
// }

// $folder = str_replace(strtolower($_SERVER['DOCUMENT_ROOT']),'', strtolower(_DIR_ROOT));

// $s = explode("\\", $folder);
// for($i =0 ;$i < count($s)-1 ; $i++){
//     $s1 .= ($s[$i]."/");
// }

// $web_root = rtrim($web_root."/".$s1,"/");


require_once './MVC/configs/routes.php';
require_once './MVC/core/Route.php';

require_once './public/mailer/PHPMailer.php';
require_once './public/mailer/SendMail.php';
require_once './MVC/configs/config.php';
require_once './public/lib/session.php';
require_once './public/lib/cookie.php';
require_once './public/lib/format.php';
require_once './MVC/core/app.php';
require_once './MVC/core/controller.php';
require_once './MVC/core/connectDB.php';
require_once './MVC/core/request.php';
require_once './MVC/core/response.php';
?>