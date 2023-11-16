<?php
    class Langnghe extends controller{
        function Getdata(){
            $this->view('MasterLayout',[
                'page'=>'clients/LangngheView',
                'title' => 'Làng nghề'
            ]);
        } 
    }
?>