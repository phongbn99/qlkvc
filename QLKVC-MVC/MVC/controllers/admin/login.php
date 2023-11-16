<?php
    Session::checkLogin(0);
?>

<?php
class Login extends controller{
    protected $lg;
    function __construct()
    {
        $this->lg = $this->model('adminLoginModel');
    }
    
    function Getdata(){
        $this->view('AdminLayout',[
            'page'=>'admin/loginView',
            'title' => 'Login Admin',
            'thongbao' => "Tài khoản hoặc mật khẩu sai!",
            'user' => '',
            'pass' => ''
        ]);
    }

    function post_data(){
        if(isset($_POST['login'])){
            $user = $_POST['username'];
            $pass = $_POST['password'];
            if(mysqli_num_rows($this->lg->CheckLogin($user,$pass)) > 0){
                $value = mysqli_fetch_assoc($this->lg->checkLogin($user,$pass));
                Session::set("loginAdmin",true);
                Session::set('adminId', $value['id']);
                Session::set('adminUser', $value['username']);
                Session::set('adminName', $value['fullname']);
                Session::set('adminPhone', $value['phone']);
                Session::set('adminDob', $value['dob']);
                Session::set('adminMail', $value['email']);
                Session::set('level', $value['level']);
                if($_POST['remember']){
                    setcookie(Format::caesar('admin',10),Format::caesar($user,10),time() + COOKIE_TIME,"/");
                    setcookie(Format::caesar('passAdmin',10),Format::caesar($pass,10),time() + COOKIE_TIME,"/");
                }else{
                    setcookie(Format::caesar('admin',10),"",time() - 3600,"/");
                    setcookie(Format::caesar('passAdmin',10),"",time() - 3600,"/");
                }
                Session::set("thongbao","");
                Response::redirect('admin/dashboard');
            }else{
                Session::set("thongbao","Tài khoản hoặc mật khẩu sai!");
                Session::set('adminUser', $user);
                Session::set('adminPass', $pass );
                Response::redirect('admin/login');   
            }
        }
    }
}
?>