<?php
class Changepwd extends controller{
    protected $dt;

    function __construct()
    {
        $this->dt = $this->model('adminChangepassModel');
    }
    
    function Getdata(){
        $this->view('AdminLayout',[
            'page'=>'admin/changepassView',
            'title' => 'Đổi mật khẩu'
        ]);
    }

    function changePass(){
        if(isset($_POST['change-pass'])){
            $user = Session::get("adminUser");
            $old_pass = $_POST['currentpass'];
            $new_pass= $_POST['pwd'];
            $confirm_new_pass = $_POST['new_pwd'];

            if(strlen($new_pass) < 4 || strlen($new_pass) > 30){
                Session::set("thongbao","Mật khẩu có độ dài từ 4-30 kí tự!");
            }else if($new_pass != $confirm_new_pass){
                Session::set("thongbao","Mật khẩu mới phải trùng nhau!");
            }else{
                $check = $this->dt->checkAccount($user,md5($old_pass,false));
                if($check){
                    Session::set("thongbao","Đổi mật khẩu thành công!");
                }else{
                    Session::set("thongbao","Mật khẩu sai!");
                }
            }

            Session::set("oldpass",$old_pass);
            Session::set("new_pass",$new_pass);
            Session::set("confirm_new_pass",$confirm_new_pass);
            Response::redirect("admin/changepass");
        }
    }
}
?>