<?php
    class adminLoginModel extends connectDB{
        public function CheckLogin($user,$pass){
            $pass = md5($pass,false);
            $sql = "SELECT * FROM admin WHERE username='$user' and password='$pass'";
            $kq = $this->select($sql);
            return $kq;
        }
    }

?>