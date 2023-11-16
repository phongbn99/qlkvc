<?php
class gioithieu extends controller{
    function Getdata(){
        $this->view('MasterLayout',[
            'page'=>'clients/GioithieuView',
            'title' => 'Thông tin khu vui chơi'
        ]);
    } 
}
?>