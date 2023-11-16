<?php
    class Format{
        
        public function formatDate($date){
            return date('F j, Y,g:i a' , strtotime($date));
        }

        public function textShorten($text, $limit = 400)
        {
            $text = $text." ";
            $text = substr($text, 0 , $limit);
            $text = substr($text, 0 ,strrpos($text, ' '));
            $text = $text.".....";
            return $text;
        }

        // kiem tra form trong
        public function validation($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        public static function end_word($str) {
            $rs = NULL; 
            $str2 = trim($str);
            $word = mb_split(' ', $str2);
            $n = count($word)-1;
            if ($n > 0) {
                $rs = $word[$n];
            }
            return $rs;
        }

        public static function catTen($name){
            $s = "";
            $str = trim($name);
            $str1 = mb_split(' ',$str);
            if(count($str1) > 0){
                for($i = 0; $i < count($str1)-1; $i++){ 
                    $s .= $str1[$i + 1]." ";
                }
            }
            return trim($s);
        }

        public static function catHo($name){
            $s = "";
            $str = trim($name);
            $str1 = mb_split(' ',$str);
            if(count($str1) > 0){
                $s = $str1[0];
            }

            return $s;
        }
        public static function rank($level){
            $rank = "Admin";
            if($level === 1){
                $rank = "Nhân viên";
            }

            return $rank;
        }
        public function title(){
            $path = $_SERVER['SCRIP_FILENAME'];
            $title = basename($path,'.php');
            if($title == 'index'){
                $title = 'home';
            }elseif($title == 'contact'){
                $title = 'contact';
            }
            return $title = ucfirst($title);
        }

        public static function tachngay($date,$i){
            $str = mb_split('-',$date);
            if($i > 2)
                return;
            return $str[$i];
        }

        public static function xoakhoangtrang($data){
            return str_replace(" ","",$data);
        }

        public static function xoaphantutrung(array $arr){
            for($i = 0 ; $i <count($arr) - 1; $i++){
                for($j = count($arr); $j > 0; $j--){
                    if($arr[$j] == $arr[$i]){
                        unset($arr[$j]);
                    }
                }
            }

            return $arr;
        }

        public static function checkMail($mail){
            $partten = "/^[A-Za-z0-9_.]{6,32}@gmail.com$/";

            if(preg_match($partten ,$mail)){
                return true;
            }
            return false;
        }

        public static function checkName($fullname){
            return preg_match("/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ ]{2,}$/",$fullname);
        }

        public static function getRandomString($n)
        {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
        }

        public static function caesar($str,$x){
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.@#$%';
            $int = [];
            for($i = 0; $i <strlen(trim($str)) ;$i++){
                array_push($int,strpos($characters,$str[$i]));
            }
        
            $res = '';
            for($i=0 ;$i < count($int); $i++){
                $pos = $int[$i] + $x;
                if($pos  > strlen($characters) - 1){
                    $pos = ($pos - strlen($characters));
                }
                $res .= $characters[$pos];
            }

            return str_replace($characters[0],' ',$res);
        }

        public static function unCaesar($str,$x){
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.@#$%';
            $int = [];
            for($i = 0; $i <strlen(trim($str)) ;$i++){
                array_push($int,strpos($characters,$str[$i]));
            }
        
            $res = '';
            for($i=0 ;$i < count($int); $i++){
                $pos = $int[$i] - $x;
                if($pos  < 0 ){
                    $pos = (strlen($characters) - $pos);
                }
                $res .= $characters[$pos];
            }

            return str_replace($characters[0],' ',$res);
        }

        public static function setDate(){
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            return date("Y-m-d H:i:s ", time());
        }
     }

?>