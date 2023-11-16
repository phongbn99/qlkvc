<?php
    class Banggia extends controller{
        function Getdata(){
            $this->view('MasterLayout',[
                'page'=>'clients/BanggiaView',
                'title' => 'Dịch vụ và Đặt vé'
            ]);
        }
        
        
    }
?>