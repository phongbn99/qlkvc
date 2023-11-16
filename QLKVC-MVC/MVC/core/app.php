<?php 
class App{
    private $controller="Home";
    private $action="Getdata";
    private $param=[];
    private $__routes;
    function __construct(){

        global $routes;

        $this->__routes = new Route();
        $url = $this->handlerUrl();
    }

    // function getUrl(){
    //     if(!empty($_SERVER['PATH_INFO'])){
    //         $url = $_SERVER['PATH_INFO'];
    //     }else{
    //         $url = '/';
    //     }

    //     return $url;
    // }
  
    function getUrl(){
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
            $url = "https://";   
        else  
            $url = "http://";   
 
        $url.= $_SERVER['HTTP_HOST'];   
    
  
        $url.= $_SERVER['REQUEST_URI'];    
      
        $arrUrl = explode("/",$url);

        if(count($arrUrl) < 4){
            $url = '/';
        }else{
            $url = '';
            for($i = 4 ; $i < count($arrUrl); $i++){               
                $url .= "/".$arrUrl[$i];
            }
        }
        return $url;
    }

    public function handlerUrl(){

        $url = $this->getUrl();
        
        $url = $this->__routes->handleRoute($url);

        $urlArr = array_filter(explode('/',$url));
        $urlArr = array_values($urlArr);


        $urlCheck = '';
        if(!empty($urlArr)){
            foreach($urlArr as $key=>$item){
                $urlCheck.=$item.'/';
                $fileCheck = rtrim($urlCheck, '/');
                $fileArr = explode('/',$fileCheck);
                $fileCheck = implode('/',$fileArr);
                
                unset($urlArr[$key-1]);
                if(file_exists('MVC/controllers/'.($fileCheck) .'.php')){
                    $urlCheck = $fileCheck;
                    break;
               }
            }
            $urlArr = array_values($urlArr);
            $this->controller = $urlCheck;


        }
        // xử lý controller
        
        if(!empty($urlArr[0])){
            $this->controller = $urlArr[0];
        }else{
            $this->controller = $this->controller;
        }

       ;
        if(file_exists('MVC/controllers/'.$urlCheck .'.php')){
            require_once 'MVC/controllers/'.$urlCheck .'.php';
            $this->controller = new $this->controller();
        }else {
            if(file_exists('MVC/controllers/'.$this->controller .'.php')){
                require_once 'MVC/controllers/'.$this->controller.'.php';
                $this->controller = new $this->controller();
            }else{
                $this->loadError();
            }
        }


        // xử lý action 
        if(!empty($urlArr[1])){
            $this->action = $urlArr[1];
        }

        
        // Xử lý params
        $this->param = array_values($urlArr);
        
        call_user_func_array([$this->controller, $this->action], $this->param);
    }



    public function loadError(){
        require_once 'MVC/views/pages/404error.php';
    }

}
?>