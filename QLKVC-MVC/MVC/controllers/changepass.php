<?php
Session::checkSession(1);
?>
<?php
class Changepass extends controller{
    
    protected $dt;

    function __construct()
    {
        $this->dt = $this->model('changepassModel');
    }   
        
    function Getdata(){
        $this->view('MasterLayout',[
            'page'=>'clients/changepassView',
            'title' => 'Đổi mật khẩu'
        ]);
    } 

    function checkPass(){
        if(isset($_POST['btn_changepass'])){
            $old_pass = $_POST['old-pass'];
            $new_pass = $_POST['new-pass'];
            $user = Session::get("user");
            $check = $this->dt->getUser($user,md5($old_pass,false));
            if($check){
                $update = $this->dt->updatePass($user,md5($new_pass,false),Format::setDate());
                if($update){
                    Session::set("thongbaodmk","Đổi mật khẩu thành công!");
                }
            }else{
                Session::set("thongbaodmk","Mật khẩu không chính xác!");
            }
        }

        Response::redirect('doi-mat-khau');
        
    }
}
?>