<?php
class Hoitruong extends controller{
    function Getdata(){
        $this->view('MasterLayout',[
            'page'=>'clients/hoitruongView',
            'title' => 'Hội trường'
        ]);
    } 
}
?>