<?php
    class ForgotpasswordModel extends connectDB{
        public function checkMail($email){
            $sql = "SELECT email FROM customer where email = '$email' ";
            $kq = $this->select($sql);
            return $kq;
        }
    }
?>