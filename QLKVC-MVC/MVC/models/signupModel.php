<?php
    class signupModel extends connectDB{
        public function user_ins($id , $fullname, $user,$pass,$email,$date){
            $sql = "INSERT INTO `customer`(`id`, `fullname`, `username`, `password`, `email`, `create_at`,`active`) VALUES ('$id','$fullname','$user','$pass','$email','$date',1)";
            $kq = $this->insert($sql);
            return $kq;
        }

        public function checkUser($user){
            $sql = "SELECT username FROM customer where username = '$user' ";
            $kq = $this->select($sql);
            return $kq;
        }
        
        public function checkMail($email){
            $sql = "SELECT email FROM customer where email = '$email' ";
            $kq = $this->select($sql);
            return $kq;
        }
        public function setId(){
            $sql = "SELECT id FROM customer";
            $kq = $this->select($sql);
            $value = mysqli_fetch_array($kq);
            
            $mkh = 'KH';
            for($i = 0; $i < 6; $i++){
                $mkh .= rand(0,9);
            }

            for($i = 0 ;$i < count($value); $i++){
                while($mkh == $value[$i]){
                    $mkh = 'KH';
                    for($i = 0; $i < 6; $i++){
                        $mkh .= rand(0,9);
                    }
                    $i = 0;
                }
            }

            return $mkh;
        }

    }
?>