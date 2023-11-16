<?php
    Session::checkLogin(1);
?>
<?php
    class Login extends controller{
        protected $dt;

        function __construct()
        {
            $this->dt = $this->model('loginModel');
        }

        function Getdata(){
            $this->view('pages/clients/loginView',[
                'page'=>'clients/loginView',
                'title' => 'Đăng nhập tài khoản'
            ]);
        } 

        function checkLogin(){
            if(isset($_POST['btn_login'])){
                $user = $_POST['loginUsername'];
                $pass = $_POST['loginPassword'];
                $checkUser = $this->dt->checkUser($user);
                if(!$checkUser){
                    Session::set("thongbao","Tài khoản không tồn tại!!!");
                }else{
                    $kq = $this->dt->checkAccount($user,md5($pass,false));
                    if($kq){
                        $active = $this->dt->checkActive($user);
                        if($active){
                            while($value = mysqli_fetch_array($kq)){
                                Session::set("login",true);
                                Session::set("id",$value['id']);
                                Session::set("name",$value['fullname']);
                                Session::set("user",$user);
                                Session::set("dob",$value['dob']);
                                Session::set("email",$value['email']);
                                Session::set("sdt",$value['phonenumber']);
                                Session::set("addr",$value['address']);
                            }
                            
                            if($_POST['remember']){
                                setcookie(Format::caesar('user',10),Format::caesar($user,10),time() + COOKIE_TIME,"/");
                                setcookie(Format::caesar('pass',10),Format::caesar($pass,10),time() + COOKIE_TIME,"/");
                            }else{
                                setcookie(Format::caesar('user',10),"",time() -3600,"/");
                                setcookie(Format::caesar('pass',10),"",time() -3600,"/");
                            }
                            Session::set("thongbao",'');
                            Response::redirect();
                        }else{
                            Session::set("thongbao","Tài khoản chưa kích hoạt!");
                        }
                    }else{
                        Session::set("thongbao","Tài khoản hoặc mật khẩu sai!");
                    }
                }
            }
            Session::set("user",$user);
            Session::set("pass",$pass);
            Response::redirect("login");
        }
    }
?>