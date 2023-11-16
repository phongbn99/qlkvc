<?php
class Thuycung extends controller{
    function Getdata(){
        $this->view('MasterLayout',[
            'page'=>'clients/ThuycungView',
            'title' => 'Thủy cung'
        ]);
    } 
}
?>