<?php
    class LoginModel extends connectDB{
        public function checkAccount($user,$pass){
            $sql = "SELECT * FROM customer where username='$user' AND password='$pass'";
            return $this->select($sql);
        }

        public function checkUser($user){
            $sql = "SELECT * FROM customer where username='$user'";
            return $this->select($sql);
        }

        public function checkActive($user){
            $sql = "SELECT * FROM customer where username='$user' AND active = 1";
            return $this->select($sql);
        }
    }
?>