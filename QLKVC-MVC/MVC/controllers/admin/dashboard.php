<?php
class Dashboard extends controller{
    function Getdata(){
        $this->view('AdminLayout',[
            'page'=>'admin/dashboardView',
            'title' => 'Dashboard'
        ]);
    }
}
?>