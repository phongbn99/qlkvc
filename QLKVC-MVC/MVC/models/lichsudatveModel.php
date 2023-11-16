<?php
    class LichsudatveModel extends connectDB{
        public function getData(){
            $sql = "SELECT lsdatve.*, thongtinkvc.tenkhu, thongtinkvc.giomo,thongtinkvc.giodong,thongtinkvc.gialon,thongtinkvc.gianho, dichvu.tendv,dichvu.giadv, trochoi.tentrochoi,trochoi.banggia from lsdatve INNER JOIN thongtinkvc on thongtinkvc.makhu = lsdatve.makhu INNER JOIN dichvu on dichvu.madv = lsdatve.madv INNER JOIN trochoi on trochoi.matrochoi = lsdatve.matrochoi";
            return $this->select($sql);
        }

    }
?>