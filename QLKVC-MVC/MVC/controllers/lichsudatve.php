<?php
    class Lichsudatve extends controller{

        protected $dt; 
    
        function __construct()
        {
            $this->dt = $this->model('lichsudatveModel');
        }
        
        function Getdata(){
            $this->view('MasterLayout',[
                'page'=>'clients/lichsudatveView',
                'title' => 'Lịch sử đặt vé',
                'result' => $this->dt->getData()
            ]);
        }

    }
?>