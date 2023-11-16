<?php
    class ChangepassModel extends connectDB{
        public function getUser($user,$pass){
            $sql = "SELECT * FROM customer where username='$user' AND password='$pass'";
            return $this->select($sql);
        }

        public function updatePass($user,$new_pass,$time){
            $sql ="UPDATE `customer` SET `password`='$new_pass' ,`changepass`='$time' WHERE username='$user'";
            return $this->update($sql);
        }
    }