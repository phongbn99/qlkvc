<?php
    Session::checkSession(1);
?>
<?php
    class Info extends controller{
        protected $dt;

        function __construct()
        {
            $this->dt = $this->model('infoModel');
        }

        function Getdata(){
            $this->view('MasterLayout',[
                'page'=>'clients/infoView',
                'title' => 'Thông tin cá nhân',
                'result' => $this->dt->getInfo(Session::get("id"))
            ]);
        } 

        function updateInfo(){
            if(isset($_POST['btn_infoCus'])){
                $id = $_POST['id'];
                $name = $_POST['name'];
                $dob = $_POST['dob'];
                $old_email = Session::get("email");
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $addr = $_POST['addr'];
                
                if(Format::checkName($name)){
                    if(Format::checkMail($email)){
                        $checkMail = $this->dt->checkMail($email);
                        if(!$checkMail || $old_email == $email){
                            $update = $this->dt->updateInfo($id,ucwords(trim($name)),$dob,$email,$sdt,$addr);
                            if($update){
                                Session::set("thongbao","Cập nhật thành công!");
                                Session::set("name",$name);
                                Session::set("dob",$dob);
                                Session::set("email",$email);
                                Session::set("sdt",$sdt);
                                Session::set("addr",$addr);

                            }else{
                                Session::set("thongbao","Cập nhật thất bại!");
                            }
                        }else{
                            Session::set("thongbao","Email đã liên kết với tài khoản khác!");
                        }
                        
                    }else{
                        Session::set("thongbao","Email không hợp lệ!");
                    }
                }else{
                    Session::set("thongbao","Tên không hợp lệ!");
                }

                
            }
            Response::redirect("thong-tin-khach-hang");
        }
        
    }
?>