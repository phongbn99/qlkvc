<?php
class Category extends controller{
    protected $dt;

    // function __construct()
    // {
    //     $this->dt = $this->model('adminChangepassModel');
    // }
    
    function Getdata(){
        $this->view('AdminLayout',[
            'page'=>'admin/categoryView',
            'title' => 'Quản lý danh mục'
        ]);
    }

}