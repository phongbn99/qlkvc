<?php
class Employee extends controller{
    protected $dt; 
    
    function __construct()
    {
        $this->dt = $this->model('employeeModel');
    }
    
    function Getdata(){
        $this->view('AdminLayout',[
            'page'=>'admin/employeeView',
            'title' => 'Employee',
            'result' => $this->dt->getAllEmployee(),
            'chucvu' => $this->dt->getChucVu(),
            'chucvu1' => $this->dt->getChucVu(),
            'kvc' => $this->dt->getKvc(),
            'kvc1' => $this->dt->getKvc()
        ]);
    }

    function xoaNV(){
        if(isset($_POST['btn-confirm-delete-eployee'])){ 
            $id = $_POST['delete-eployee'];
            $kq = $this->dt->deleteNV($id);           
            if($kq){
                Session::set("thongbao","Xóa nhân viên ".$id." thành công!");
            }else{
                Session::set("thongbao","Xóa nhân viên ".$id." thất bại!");
            }
        }
        Response::redirect("admin/employee");
    }

    function themNV(){
        $pass = "12345";
        if(isset($_POST['save-add-eployee'])){
            $id = $_POST['add-employee'];
            $username = $_POST['add-username'];
            $name = $_POST['add-name'];
            $email = $_POST['add-email'];
            $phone = $_POST['add-phone'];
            $dob = $_POST['add-dob'];
            $add = $_POST['add-add'];
            $cv = $_POST['add-chucvu'];
            $luong = $_POST['add-luong'];
            $kvc = $_POST['add-kvc'];
            // echo $id." ".$username." ".$name." ".$email." ".$phone." ".$dob." ".$add." ".$cv." ".$luong." ".$kvc;

            // return ;
            $check = true;
            Session::set("idAdd",$id);
            Session::set("usernameAdd",$username);
            Session::set("nameAdd",$name);
            Session::set("emailAdd",$email);
            Session::set("phoneAdd",$phone);
            Session::set("dobAdd",$dob);
            Session::set("addAdd",$add);
            Session::set("cvAdd",$cv);
            Session::set("luongAdd",$luong);
            Session::set("kvcAdd",$kvc);

            $checkId = $this->dt->checkMaNv($id);
            $checkUser = $this->dt->checkUser($username);
            $checkName = Format::checkName($name);
            $checkEmail = Format::checkMail($email);
            $mailInvalid = $this->dt->checkEmail($email);
            
            if($checkId){
                Session::set("thongbao3","Mã nhân viên đã tồn tại!");
                $check = false;
                Response::redirect("admin/employee");    
            }

            if($checkUser){
                Session::set("thongbao3","Username đã tồn tại!");
                $check = false;
                Response::redirect("admin/employee");
            }

            if(!$checkName){
                Session::set("thongbao3","Tên không được chứa kí tự đặc biệt hoặc số!");
                $check = false;
                Response::redirect("admin/employee");
            }

            if(!$checkEmail){
                Session::set("thongbao3","Email không hợp lệ!");
                $check = false;
                Response::redirect("admin/employee");
            }

            if($mailInvalid){
                Session::set("thongbao3","Email đã liên kết với tài khoản khác!");
                $check = false;
                Response::redirect("admin/employee");
            }

            if($check){
                $insert = $this->dt->insertNV($id,$username,md5($pass,false),ucwords(trim($name)),$email,$phone,$dob,$add,$cv,Format::setDate(),$luong,$kvc);
                if($insert){
                    Session::set("thongbao3","Thêm nhân viên thành công!");
                }else{
                    Session::set("thongbao3","Thêm nhân viên không thành công!");
                }
                Response::redirect("admin/employee");
            }

            
        }
    }

    function suaNV(){
        if(isset($_POST['save-edit-eployee'])){
            $id = $_POST['edit-employee'];
            $username = $_POST['edit-user'];
            $name = $_POST['edit-name'];
            $email = $_POST['edit-email'];
            $phone = $_POST['edit-phone'];
            $dob = $_POST['edit-dob'];
            $add = $_POST['edit-add'];
            $cv = $_POST['edit-chucvu'];
            $luong = $_POST['edit-luong'];
            $kvc = $_POST['edit-kvc'];

            // echo $id." ".$username." ".$name." ".$email." ".$phone." ".$dob." ".$add." ".$cv." ".$luong." ".$kvc;
            // return;


            Session::set("idEdit",$id);
            Session::set("usernameEdit",$username);
            Session::set("nameEdit",$name);
            Session::set("emailEdit",$email);
            Session::set("phoneEdit",$phone);
            Session::set("dobEdit",$dob);
            Session::set("addEdit",$add);
            Session::set("cvEdit",$cv);
            Session::set("luongEdit",$luong);
            Session::set("kvcEdit",$kvc);


            $checkName = Format::checkName($name);
            if(!$checkName){
                Session::set("thongbao4","Tên không được chứa kí tự đặc biệt hoặc số!");
                Response::redirect("admin/employee");
            }

            $update = $this->dt->updateNV($id,$name,$dob,$phone,$add, $cv,$luong,$kvc);
            if($update){
                Session::set("thongbao4","Cập nhật nhân viên thành công!");
            }else{
                Session::set("thongbao4","Cập nhật nhân viên không thành công!");
            }
            Response::redirect("admin/employee");
        }
    }
}
?>