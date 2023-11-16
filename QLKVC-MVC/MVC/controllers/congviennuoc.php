<?php
class Congviennuoc extends controller{
    function Getdata(){
        $this->view('MasterLayout',[
            'page'=>'clients/CongviennuocView',
            'title' => 'Công viên nước'
        ]);
    } 
}
?>