<?php
class Huongdan extends controller{
    function Getdata(){
        $this->view('MasterLayout',[
            'page'=>'clients/HuongdanView',
            'title' => 'Hướng dẫn'
        ]);
    } 
}
?>