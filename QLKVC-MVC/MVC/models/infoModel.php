<?php
    class InfoModel extends connectDB{
        public function getInfo($id){
            $sql = "SELECT * FROM customer where id='$id'";
            return $this->select($sql);
        }

        public function  updateInfo($id,$name,$dob,$email,$sdt,$addr){
            $sql = "UPDATE `customer` SET `fullname`='$name',`dob`='$dob',`email`='$email',`phonenumber`='$sdt',`address`='$addr' WHERE id='$id'";
            return $this->update($sql);
        }

        public function checkMail($email){
            $sql = "SELECT email FROM customer where email = '$email' ";
            $kq = $this->select($sql);
            return $kq;
        }
    }
?>