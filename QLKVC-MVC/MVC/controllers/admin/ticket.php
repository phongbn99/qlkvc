<?php
class Ticket extends controller{
    protected $dt;

    function __construct()
    {
        $this->dt = $this->model('tiketModel');
    }
    
    function Getdata(){
        $this->view('AdminLayout',[
            'page'=>'admin/ticketView',
            'title' => 'Quản lý vé',
            'result' => $this->dt->getAll()
        ]);
    }

    function xoaVe(){
        if(isset($_POST['btn-confirm-delete-ticket'])){ 
            $id = $_POST['delete-ticket'];
            $kq = $this->dt->deleteVe($id);           
            if($kq){
                Session::set("thongbao","Xóa khu ".$id." thành công!");
            }else{
                Session::set("thongbao","Xóa khu ".$id." thất bại!");
            }
        }
        Response::redirect("admin/ticket");
    }
    
    function themVe(){
        if(isset($_POST['save-add-ticket'])){
            $makhu = $_POST['add-makhu'];
            $tenkhu = $_POST['add-tenkhu'];
            $vitri = $_POST['add-vitri'];
            $giomo = $_POST['add-giomo'];
            $giodong = $_POST['add-giodong'];
            $venl = $_POST['add-venl'];
            $vete = $_POST['add-vete'];

            // echo $makhu." ".$tenkhu." ".$vitri." ".$giomo." ".$giodong." ".$venl." ".$vete;
            // return;

            if($venl == "") $venl = 0;
            if($vete == "") $vete = 0;
            $check = true;
            Session::set("makhuAdd",$makhu);
            Session::set("tenkhuAdd",$tenkhu);
            Session::set("vitriAdd",$vitri);
            Session::set("giomoAdd",$giomo);
            Session::set("giodongAdd",$giodong);
            Session::set("venlAdd",$venl);
            Session::set("veteAdd",$vete);

            $checkId = $this->dt->checkMaKhu($makhu);
            
            if($checkId){
                Session::set("thongbao3","Mã khu đã tồn tại!");
                $check = false;
                Response::redirect("admin/ticket");    
            }


            if($check){
                $insert = $this->dt->insertVe($makhu,$tenkhu,$vitri,"",$giomo,$giodong,$venl,$vete);
                if($insert){
                    Session::set("thongbao3","Thêm khu thành công!");
                }else{
                    Session::set("thongbao3","Thêm khu không thành công!");
                }
                Response::redirect("admin/ticket");
            }

            
        }
    }

    function suaVe(){
        if(isset($_POST['save-edit-eployee'])){
            $makhu = $_POST['edit-makhu'];
            $tenkhu = $_POST['edit-tenkhu'];
            $vitri = $_POST['edit-vitri'];
            $giomo = $_POST['edit-giomo'];
            $giodong = $_POST['edit-giodong'];
            $venl = $_POST['edit-venl'];
            $vete = $_POST['edit-vete'];

            // echo $id." ".$username." ".$name." ".$email." ".$phone." ".$dob." ".$add." ".$cv." ".$luong." ".$kvc;
            // return;


            Session::set("makhuEdit",$makhu);
            Session::set("tenkhuEdit",$tenkhu);
            Session::set("vitriEdit",$vitri);
            Session::set("giomoEdit",$giomo);
            Session::set("giodongEdit",$giodong);
            Session::set("venlEdit",$venl);
            Session::set("veteEdit",$vete);


            $update = $this->dt->updateVe($makhu,$tenkhu,$vitri,$giomo,$giodong,$venl,$vete);
            if($update){
                Session::set("thongbao4","Cập nhật khu thành công!");
            }else{
                Session::set("thongbao4","Cập nhật khu không thành công!");
            }
            Response::redirect("admin/ticket");
        }
    }

}
?>