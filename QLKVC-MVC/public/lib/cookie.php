<?php
    class Cookie{
        public static function set($name,$value,$time){
            setcookie($name,$value,$time,"/");
        }

        public static function get($key){
            if(isset($_COOKIE[$key])){
                return $_COOKIE[$key];
            }else{
                return false;
            }
        }

        public static function destroy($name){
            setcookie($name,"",time() -3600);
        }
    }
?>