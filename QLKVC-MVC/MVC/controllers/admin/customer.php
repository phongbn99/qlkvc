<?php
class Customer extends controller{
    protected $dt; 
    
    function __construct()
    {
        $this->dt = $this->model('customerModel');
    }
    
    function Getdata(){
        $this->view('AdminLayout',[
            'page'=>'admin/customerView',
            'title' => 'Customer',
            'result' => $this->dt->getAllCustomer()
        ]);
    }

    function xoaKH(){
        if(isset($_POST['btn-confirm-delete-cus'])){ 
            $id = $_POST['delete-cus'];
            
            $kq = $this->dt->deleteKH($id);           
            if($kq){
                Session::set("thongbao0","Xóa khách hàng ".$id." thành công!");
            }else{
                Session::set("thongbao0","Xóa khách hàng ".$id." thất bại!");
            }
        }
        Response::redirect("admin/customer");
    }

    function themKH(){
        if(isset($_POST['save-add-cus'])){
            $id = $_POST['add-idCus'];
            $name = $_POST['add-name'];
            $dob = $_POST['add-dob'];
            $username = $_POST['add-username'];
            $email = $_POST['add-email'];
            $phone = $_POST['add-phone'];
            $add = $_POST['add-add'];
            
            $check = true;
            Session::set("idAdd",$id);
            Session::set("nameAdd",$name);
            Session::set("dobAdd",$dob);
            Session::set("usernameAdd",$username);
            Session::set("emailAdd",$email);
            Session::set("phoneAdd",$phone);
            Session::set("addAdd",$add);

            $checkId = $this->dt->checkId($id);
            $checkName = Format::checkName($name);
            $checkEmail = Format::checkMail($email);
            $checkUser = $this->dt->checkUser($username);
            $checkPhone = $this->dt->checkPhone($username);
            $mailInvalid = $this->dt->checkEmail($email);

            if($checkId){
                Session::set("thongbao1","Mã khách hàng đã tồn tại!");
                $check = false;
                Response::redirect("admin/customer");    
            }

            if(!$checkName){
                Session::set("thongbao1","Tên không được chứa kí tự đặc biệt hoặc số!");
                $check = false;
                Response::redirect("admin/customer");
            }
            
            if(!$checkEmail){
                Session::set("thongbao1","Email không hợp lệ!");
                $check = false;
                Response::redirect("admin/customer");
            }

            if($checkUser){
                Session::set("thongbao1","Username đã tồn tại!");
                $check = false;
                Response::redirect("admin/customer");
            }
          //  if(!$checkPhone){
           //     Session::set("thongbao1","Điện thoại đã tồn tại!");
           //     $check = false;
          //      Response::redirect("admin/customer");
           // }

            if($mailInvalid){
                Session::set("thongbao1","Email đã liên kết với tài khoản khác!");
                $check = false;
                Response::redirect("admin/customer");
            }

            if($check){
                $insert = $this->dt->insertKH($id,ucwords(trim($name)),$dob,$username,md5(Format::getRandomString(10),false),$email,$phone,$add,Format::setDate());
                if($insert){
                    Session::set("thongbao1","Thêm khách hàng thành công!");
                }else{
                    Session::set("thongbao1","Thêm khách hàng không thành công!");
                }
                Response::redirect("admin/customer");
            }

            
        }

        
    }
    function suaKH(){
        if(isset($_POST['save-edit-cus'])){
            $id = $_POST['edit-idCus'];
            $name = $_POST['edit-name'];
            $dob = $_POST['edit-dob'];
            $username = $_POST['edit-user'];
            $email = $_POST['edit-email'];
            $phone = $_POST['edit-phone'];
            $add = $_POST['edit-add'];
            $active = $_POST['edit-active'];

            $check = true;
            Session::set("idEdit",$id);
            Session::set("nameEdit",$name);
            Session::set("dobEdit",$dob);
            Session::set("usernameEdit",$username);
            Session::set("emailEdit",$email);
            Session::set("phoneEdit",$phone);
            Session::set("addEdit",$add);
            Session::set("activeEdit",$active);
            $checkName = Format::checkName($name);
            $checkPhone = Format::checkName($phone);
            
            if(!$checkName){
                Session::set("thongbao2","Tên không được chứa kí tự đặc biệt hoặc số!");
                $check = false;
                Response::redirect("admin/customer");
            }

           // if(!$checkPhone){
              //  Session::set("thongbao2","số đã tồn tại!");
              //  $check = false;
               // Response::redirect("admin/customer");
    //}
            if($active == '' || $active == "Chưa kích hoạt"){
                $active = 0;
            }else{
                $active = 1;
            }

            if($check){
                $update = $this->dt->updateKH($id,ucwords(trim($name)),$dob,$phone,$add, $active);
                if($update){
                    Session::set("thongbao2","Cập nhật thông tin khách hàng thành công!");
                }else{
                    Session::set("thongbao2","Cập nhật thông tin khách hàng không thành công!");
                }
                Response::redirect("admin/customer");
            }
        }
    }
}
?>