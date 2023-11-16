<?php
    class Session{
        public static function init(){
            if(version_compare(phpversion(), '5.4.0','<')){
                if(session_id() == ''){
                    session_start();
                }
            }else{
                if(session_status() == PHP_SESSION_NONE){
                    session_start();
                }
            }
        }
     

        public static function set($key,$val){
            $_SESSION[$key] = $val;
        }

        public static function get($key){
            if(isset($_SESSION[$key])){
                return $_SESSION[$key];
            }else{
                return false;
            }
        }


        public static function checkSession($data){
            self::init();
            if($data === 0){
                if(self::get("loginAdmin") == false){
                    self::destroy(0);
                    Response::redirect("admin/login");
                }
            }else{
                if(self::get("login") == false){
                    self::destroy(1);
                    Response::redirect();
                }
            }
            
        }

        public static function checkLogin($data){
            self::init();
            if($data === 0){
                if(self::get("loginAdmin") == true){
                    Response::redirect("admin/dashboard");
                }
            }else{
                if(self::get("login") == true){
                    Response::redirect();
                }
            }
        }
        
        
        public static function destroy($data){
            session_destroy();
            if($data === 0){
                Response::redirect("admin/login");
            }else{
                // Response::redirect();
            }
        }
    }
?>