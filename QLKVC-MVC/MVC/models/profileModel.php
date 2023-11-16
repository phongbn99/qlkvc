<?php
    class ProfileModel extends connectDB{
        public function getInfo(){
            $id = Session::get('adminUser');
            $sql = "SELECT * FROM admin where username='$id'";
            return $this->select($sql);
        }

        public function checkEmail($email){
            $sql = "SELECT * FROM admin where email='$email'";
            return $this->select($sql);
        }

        public function updateInfo($user,$name,$email,$sdt,$dob){
            $sql ="UPDATE `admin` SET `fullname`='$name',`email`='$email',`phone`='$sdt',`dob`='$dob' WHERE username='$user'";
            return $this->update($sql);
        }
    }

?>