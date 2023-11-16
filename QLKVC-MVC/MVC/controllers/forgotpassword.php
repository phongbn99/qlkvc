<?php
class Forgotpassword extends controller{
    protected $dk;
    function __construct()
    {
        $this->dk = $this->model('forgotpasswordModel');
    }

    function Getdata(){
        $this->view('pages/clients/ForgotpasswordView',[
            'page'=>'clients/ForgotpasswordView',
            'title' => 'Quên mật khẩu'
        ]);
    } 

    function checkMail(){
        if(isset($_POST['recover-submit'])){
            $email = $_POST['email'];
            $checkMail = $this->dk->checkMail($email);
            Session::set("email",$email);
            if($checkMail){
                Session::set("thongbao1","Hệ thống đã gửi mã xác nhận về email của bạn!
                Vui lòng kiểm tra hộp thư");
                // SendMail::mail($email,'mã xác nhận','đây là mã xác nhận');
                // Response::redirect("forgotpassword");
            }else{
                Session::set("thongbao1","Email chưa đăng ký!");
                Response::redirect("forgotpassword");
            }
        }
    }
}
?>