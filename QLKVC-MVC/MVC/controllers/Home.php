<?php
class Home extends controller{
    function Getdata(){
        $this->view('MasterLayout',[
            'page'=>'clients/TrangchuView',
            'title' => 'Công viên Thiên đường Bảo Sơn'
        ]);
    } 

    public function getrequest(){
        $request = new Request();
        $data = $request->getFields();
        print_r($data);
    }
}
?>