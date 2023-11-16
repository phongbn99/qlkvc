<?php
class Profile extends controller{
    protected $dt;

    function __construct()
    {
        $this->dt = $this->model('profileModel');
    }
    
    function Getdata(){
        $this->view('AdminLayout',[
            'page'=>'admin/profileView',
            'title' => 'Profile',
            'result' => $this->dt->getInfo()
        ]);
    }

    function changeInfo(){
        if(isset($_POST['btn_changeInfo'])){
            $user = Session::get("adminUser");
            $name = $_POST['fName']." ".$_POST['lName'];
            $old_email = Session::get("adminMail");
            $email = $_POST['email'];
            $sdt = $_POST['sdt'];
            $dob = $_POST['dob'];

            if(Format::checkName($name)){
                if(Format::checkMail($email)){
                    $check = $this->dt->checkEmail($email);
                    if(!$check || $old_email == $email){
                        $update = $this->dt->updateInfo($user,ucwords(trim($name)),$email,$sdt,$dob);
                        if($update){
                            Session::set("thongbao","Cập nhật thành công!");
                            Session::set("fname",$_POST['fName']);
                            Session::set("lname",$_POST['lName']);
                            Session::Set("adminName",$name);
                            Session::set("email",$email);
                            Session::set("sdt",$sdt);
                            Session::set("dob",$dob);
                        }else{
                            Session::set("thongbao","Cập nhật thất bại!");
                        }
                    }else{
                        Session::set("thongbao","Email đã liên kết với tài khoản khác!");
                    }
                }else{
                    Session::set("thongbao","Email không đúng định dạng!");
                }
                
            }else{      
                Session::set("thongbao","Tên không được chứa kí tự đặc biệt!");
            }
        }
        
        Response::redirect("admin/profile");
    }

    
}
?>