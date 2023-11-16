<?php
    class CustomerModel extends connectDB{
        public function getAllCustomer(){
            $sql = "SELECT * FROM customer";
            return $this->select($sql);
        }

        public function deleteKH($mkh){
            $sql = "DELETE FROM customer WHERE id='$mkh'";
            return $this->delete($sql);
        }

        public function insertKH($id,$name,$dob,$username,$password,$email,$phone,$add,$date){
            $sql = "INSERT INTO customer VALUES('$id','$name','$dob','$username','$password','$email','$phone','$add','$date',NULL,0)";
            return $this->insert($sql);
        }

        public function updateKH($mkh,$name,$dob,$phone,$add, $active){
            $sql = "UPDATE `customer` SET `fullname`='$name',`dob`='$dob',`phonenumber`='$phone',`address`='$add',`active`=$active WHERE id = '$mkh'";
            return $this->update($sql);
        }
        
        public function checkId($id){
            $sql = "SELECT * FROM customer where id='$id'";
            return $this->select($sql);
        }

        public function checkUser($user){
            $sql = "SELECT * FROM customer where username='$user'";
            return $this->select($sql);
        }

        public function checkEmail($email){
            $sql = "SELECT * FROM customer where email='$email'";
            return $this->select($sql);
        }
        public function checkPhone($phone){
            $sql = "SELECT * FROM customer where phonenumber='$phone'";
            return $this->select($sql);
        }
    }

?>