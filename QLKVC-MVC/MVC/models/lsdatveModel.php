<?php
    class LsdatveModel extends connectDB{
        public function getData(){
            $sql = "SELECT lsdatve.*, thongtinkvc.tenkhu, thongtinkvc.giomo,thongtinkvc.giodong,thongtinkvc.gialon,thongtinkvc.gianho, dichvu.tendv,dichvu.giadv, trochoi.tentrochoi,trochoi.banggia,customer.fullname from lsdatve INNER JOIN thongtinkvc on thongtinkvc.makhu = lsdatve.makhu INNER JOIN dichvu on dichvu.madv = lsdatve.madv INNER JOIN trochoi on trochoi.matrochoi = lsdatve.matrochoi INNER JOIN customer on customer.id = lsdatve.id";
            return $this->select($sql);
        }

        public function updateLsDatve($mave,$tt){
            $sql = "UPDATE `lsdatve` SET `trangthai`='$tt' WHERE mave = '$mave'";
            return $this->update($sql);
        }
    }

?>