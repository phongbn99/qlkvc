<?php
class Lsdatve extends controller{
    protected $dt;

    function __construct()
    {
        $this->dt = $this->model('lsdatveModel');
    }
    
    function Getdata(){
        $this->view('AdminLayout',[
            'page'=>'admin/lsdatveView',
            'title' => 'Lịch sử đặt vé',
            'result' => $this->dt->getData()
        ]);
    }

    function updateLs(){
        if(isset($_POST['btn-confirm-delete-ve'])){
            $ma = $_POST['delete-ve'];
            $update  = $this->dt->updateLsDatve($ma,"Đã hủy");
            Response::redirect("admin/lsdatve");
        }

        if(isset($_POST['btn-confirm-duyet-ve'])){
            $ma = $_POST['delete-ve'];
            $update  = $this->dt->updateLsDatve($ma,"Thành công");
            Response::redirect("admin/lsdatve");
        }
    }

}

?>