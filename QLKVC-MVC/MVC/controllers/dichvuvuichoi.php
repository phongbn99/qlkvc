<?php
class Dichvuvuichoi extends controller{
    function Getdata(){
        $this->view('MasterLayout',[
            'page'=>'clients/DichvuvuichoiView',
            'title' => 'Bảng giá'
        ]);
    } 
}
?>