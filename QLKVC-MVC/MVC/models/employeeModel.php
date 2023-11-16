<?php
    class EmployeeModel extends connectDB{

        public function getAllEmployee(){
            $sql = "SELECT employee.*, thongtinkvc.tenkhu
            FROM employee
            INNER JOIN thongtinkvc ON employee.makhu = thongtinkvc.makhu;";
            return $this->select($sql);
        }

        public function deleteNV($mnv){
            $sql = "DELETE FROM employee WHERE id='$mnv'";
            return $this->delete($sql);
        }

        public function insertNV($id,$username,$password,$name,$email,$phone,$dob,$add,$chucvu,$date,$luong,$kvc){
            $sql = "INSERT INTO `employee`(`id`, `username`, `password`, `fullname`, `email`, `phonenumber`, `dob`, `address`, `chucvu`,`create_at`,`luong`,`makhu`) 
            VALUES ('$id','$username','$password','$name','$email','$phone','$dob','$add','$chucvu','$date','$luong','$kvc')";
            return $this->insert($sql);
        }

        public function updateNV($mnv,$name,$dob,$phone,$add, $chucvu,$luong,$kvc){        
            $sql = "UPDATE `employee` SET `fullname`='$name',`dob`='$dob',`phonenumber`='$phone',`address`='$add',`chucvu`='$chucvu',`luong`='$luong',`makhu`='$kvc' WHERE id='$mnv'";
            return $this->update($sql);
        }

        public function getChucVu(){
            // $sql = "SELECT chucvu FROM employee WHERE chucvu <> ''";
            $sql = "SELECT chucvu FROM `employee` GROUP by chucvu";
            return $this->select($sql);
        }

        public function checkMaNv($manv){
            $sql = "SELECT * FROM employee where id='$manv'";
            return $this->select($sql);
        }

        public function checkUser($user){
            $sql = "SELECT * FROM employee where username='$user'";
            return $this->select($sql);
        }

        public function checkEmail($email){
            $sql = "SELECT * FROM employee where email='$email'";
            return $this->select($sql);
        }

        public function getKvc(){
            $sql = "SELECT * FROM thongtinkvc where makhu <> 'null'";
            return $this->select($sql);
        }
    }

?>