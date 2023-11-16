<?php
    class TiketModel extends connectDB{
        public function getAll(){
            $sql = "SELECT * from thongtinkvc where makhu <> 'null'";
            return $this->select($sql);
        }

        public function checkMaKhu($makhu){
            $sql = "SELECT * FROM thongtinkvc where makhu='$makhu'";
            return $this->select($sql);
        }

        public function insertVe($makhu,$tenkhu,$vitri,$dt,$giomo,$giodong,$gialon,$gianho){
            $sql = "INSERT INTO `thongtinkvc`(`makhu`, `tenkhu`, `vitri`, `dientich`, `giomo`, `giodong`, `gialon`, `gianho`) VALUES ('$makhu','$tenkhu','$vitri','$dt','$giomo','$giodong','$gialon','$gianho')";
            return $this->insert($sql);
        }

        public function deleteVe($makhu){
            $sql = "DELETE FROM `thongtinkvc` WHERE makhu='$makhu'";
            return $this->delete($sql);
        }

        public function updateVe($makhu,$tenkhu,$vitri,$giomo,$giodong,$gialon,$gianho){
            $sql = "UPDATE `thongtinkvc` SET `tenkhu`='$tenkhu',`vitri`='$vitri',`giomo`='$giomo',`giodong`='$giodong',`gialon`='$gialon',`gianho`='$gianho' WHERE makhu = '$makhu' ";
            return $this->update($sql);
        }
    }

?>