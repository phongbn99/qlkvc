<?php
    Session::checkLogin(1);
?>
<?php
class signup extends controller{
    protected $dk;
    function __construct()
    {
        $this->dk = $this->model('signupModel');
    }

    function Getdata(){
        $this->view('pages/clients/signupView',[
            'page'=>'clients/signupView',
            'title' => 'Đăng ký tài khoản',
        ]);
    } 

    function themTK(){
        if(isset($_POST['btn_signup'])){
            $id = $this->dk->setId();
            $fullname = $_POST['signupFirstname'] ." ". $_POST['signuplastname'];
            $email = $_POST['signupEmail'];
            $user = $_POST['signupUsername'];
            $pass = $_POST['signupPassword'];

            $checkUser = $this->dk->checkUser($user);
            if(!$checkUser){
                $checkMail = $this->dk->checkMail($email);
                if(!$checkMail){
                    $kq = $this->dk->user_ins($id,ucwords(trim($fullname)),$user,md5($pass,false),$email,Format::setDate());
                    if($kq){
                        Session::set("thongbao","Đăng ký thành công!");
                        Response::redirect("signup");
                    }else{
                        Session::set("thongbao","Đăng ký thất bại!");
                    }
                }else{
                    Session::set("thongbao","Email của bạn đã liên kết với tài khoản khác!");
                }
                
            }else{
                Session::set("thongbao","Tài khoản đã tồn tại!");
            }
        }
        Session::set("fname",$_POST['signupFirstname']);
        Session::set("lname",$_POST['signuplastname']);
        Session::set("user",$user);
        Session::set("email",$email);
        Session::set("pass",$pass);  
        Response::redirect("signup");
    }
}
?>