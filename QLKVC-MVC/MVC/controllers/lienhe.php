<?php
class Lienhe extends controller{
    function Getdata(){
        $this->view('MasterLayout',[
            'page'=>'clients/LienheView',
            'title' => 'Liên hệ'
        ]);
    } 
}
?>