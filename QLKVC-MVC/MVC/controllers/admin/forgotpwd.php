<?php
    class Forgotpwd extends controller{
        function Getdata(){
            $this->view('AdminLayout',[
                'page'=>'admin/forgotpwdView',
                'title' => 'Login Admin',
                'user' => '',
                'pass' => ''
            ]);
        }
    }

?>