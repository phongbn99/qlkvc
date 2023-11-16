<?php
class Khamphacongvien extends controller{
    function Getdata(){
        $this->view('MasterLayout',[
            'page'=>'clients/KhamphacongvienView',
            'title' => 'Hoạt động và Lịch trình'
        ]);
    } 
}
?>