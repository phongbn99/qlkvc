<?php
    class DatveModel extends connectDB{
    

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

        public function setMave(){
            $sql = "SELECT mave FROM lsdatve";
            $kq = $this->select($sql);
            $value = mysqli_fetch_array($kq);
            
            $mave = 'KVC';
            for($i = 0; $i < 6; $i++){
                $mave .= rand(0,9);
            }

            for($i = 0 ;$i < count($value); $i++){
                while($mave == $value[$i]){
                    $mave = 'KVC';
                    for($i = 0; $i < 6; $i++){
                        $mave .= rand(0,9);
                    }
                    $i = 0;
                }
            }

            return $mave;
        }

        public function insertLs($id,$date1,$date2,$te,$nl,$thanhtien,$makhu,$mkh,$madv,$matroChoi,$trangthai){
            $sql = "INSERT INTO `lsdatve`(`mave`, `ngaydat`, `ngaythamquan`, `treem`, `nguoilon`, `thanhtien`, `makhu`,`id`,`madv`,`matrochoi`, `trangthai`) VALUES ('$id','$date1','$date2','$te','$nl','$thanhtien','$makhu','$mkh','$madv','$matroChoi','$trangthai')";
            return $this->insert($sql);
        }

        public function insertCustomer($id,$name,$email,$sdt)
        {
            $sql = "INSERT INTO `customer`(`id`, `fullname`,`email`, `phonenumber`) VALUES ('$id','$name','$email','$sdt')";
            return $this->insert($sql);
        }

        public function  updateInfo($id,$sdt){
            $sql = "UPDATE `customer` SET `phonenumber`='$sdt' WHERE id='$id'";
            return $this->update($sql);
        }

        public function checkMail($email){
            $sql = "SELECT email FROM customer where email = '$email' ";
            $kq = $this->select($sql);
            return $kq;
        }

        public function dichVu(){
            $sql = "SELECT * FROM dichvu where madv <> 'null'";
            return $this->select($sql);
        }

        public function troChoi(){
            $sql = "SELECT * FROM trochoi where matrochoi <> 'null'";
            return $this->select($sql);
        }

        public function khu(){
            $sql = "SELECT * FROM thongtinkvc where makhu <> 'null'";
            return $this->select($sql);
        }
    }

?>