<?php
class Tintucsukien extends controller{
    function Getdata(){
        $this->view('MasterLayout',[
            'page'=>'clients/TintucsukienView',
            'title' => 'Tin tức sự kiện '
        ]);
    } 
}
?>