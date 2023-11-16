<?php
    class Response{
        public static function redirect($uri=''){
            if(preg_match('~^(http|https)~is',$uri)){
                $url = $uri;
            }else{
                $url = WEB_ROOT.$uri;
            }
            
            header("Location: ".$url);
            exit;
        }
    }
?>