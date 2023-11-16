<?php
    class Datve extends controller{

        protected $dt; 
    
        function __construct()
        {
            $this->dt = $this->model('datveModel');
        }
        
        function Getdata(){
            $this->view('MasterLayout',[
                'page'=>'clients/datveView',
                'title' => 'Đặt vé',
                'dv' => $this->dt->dichVu(),
                'trochoi' => $this->dt->troChoi(),
                'khu' => $this->dt->khu()
            ]);
        }
        
        function insert(){
            if(isset($_POST['btnDatve'])){
                $id = Session::get("id");
                $name = $_POST['name'];
                $sdt = $_POST['sdt'];
                $email = $_POST['email'];
                $time = $_POST['time'];
                $nl = $_POST['tren1m3'];
                $te = $_POST['duoi1m3'];
                $thanhtien = $_POST['giave'];
                $khu = mb_split("-",$_POST['khu'])[0];
                $dv = mb_split("-",$_POST['dv'])[0];
                $trochoi = mb_split("-",$_POST['trochoi'])[0];

                if($nl == "") $nl = 0;
                if($te == "") $te = 0;
                if($id == "") $id = $this->dt->setId();
                
                Session::set("name",$name);
                Session::set("sdt",$sdt);
                Session::set("email",$email);
                Session::set("time",$time);
                Session::set("nl",$nl);
                Session::set("te",$te);
                Session::set("thanhtien",$thanhtien);
                Session::set("khu",$khu);
                Session::set("dichvu",$dv);
                Session::set("trochoi",$trochoi);
                $mave = $this->dt->setMave();
                
                if(!empty(Session::get("login"))){
                    $update = $this->dt->updateInfo($id,$sdt);
                    $insert = $this->dt->insertLs($mave,Format::setDate(),$time,$te,$nl,$thanhtien,$khu,$id,$dv,$trochoi,"Chờ xác nhận");
                }else{
                    $insert1 = $this->dt->insertCustomer($id,$name,$email,$sdt);
                    if($insert1){
                        $insert = $this->dt->insertLs($mave,Format::setDate(),$time,$te,$nl,$thanhtien,$khu,$id,$dv,$trochoi,"Chờ xác nhận");
                    }else{
                        Response::redirect("datve");
                    }
                }

                if($insert){
                    Session::set("tbdatve","Đặt vé thành công,chờ phê duyệt!");
                }else{
                    Session::set("tbdatve","Đặt vé thất bại!");
                }

                Response::redirect("datve");
                // echo $id." ".$name." ".$sdt." ".$email." ".$time." ".$nl." ".$te." ".$khu." ".$dv." ".$trochoi;
                // return ;
            }
        }
    }
?>