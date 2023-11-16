<?php
    class AdminChangepassModel extends connectDB{
        public function checkAccount($user,$pass){
            $sql = "SELECT *FROM admin where username='$user' AND password='$pass'";
            return $this->select($sql);
        }
    }

?>