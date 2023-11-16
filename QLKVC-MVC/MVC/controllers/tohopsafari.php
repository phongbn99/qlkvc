<?php
class Tohopsafari extends controller{
    function Getdata(){
        $this->view('MasterLayout',[
            'page'=>'clients/TohopsafariView',
            'title' => 'Tổ hợp Safari'
        ]);
    } 
}
?>