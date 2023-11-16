<?php
    class Request{

        private $__rules = [] , $__messages = [], $__errors = [];
        public function getMethod(){
            return strtolower($_SERVER['REQUEST_METHOD']);
        }

        public function isPost(){
            if($this->getMethod() == 'post')
                return true;
            return false;
        }

        public function isGet(){
            if($this->getMethod() == 'get')
                return true;
            return false;
        }

        public function getFields(){
            $dataFields = [];
            if($this->isGet()){
                if(!empty($_GET)){
                    foreach($_GET as $key=>$value){
                       if(is_array($value)){
                        $dataFields[$key] = filter_input(INPUT_GET,$key,FILTER_SANITIZE_FULL_SPECIAL_CHARS,FILTER_REQUIRE_ARRAY);
                       }else{
                        $dataFields[$key] = filter_input(INPUT_GET,$key,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                       }
                    }
                }
            }

            if($this->isPost()){
                if(!empty($_POST)){
                    foreach($_GET as $key=>$value){
                        if(is_array($value)){
                            $dataFields[$key] = filter_input(INPUT_POST,$key,FILTER_SANITIZE_FULL_SPECIAL_CHARS,FILTER_REQUIRE_ARRAY);
                        }else{
                            $dataFields[$key] = filter_input(INPUT_POST,$key,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                        }
                    }
                }
            }
            return $dataFields;
        }

        public function rules($rules=[]){
            $this->__rules = $rules;
            
        }

        public function message($message=[]){
            $this->__messages = $message;
        }

        public function validate(){
            $this->__rules = array_filter($this->__rules);

            $checkValidate = true;

            if(!empty($this->__rules)){

                $dataFields = $this->getFields();
                foreach($this->__rules as $fieldName=>$ruleItem){
                    $ruleItemArr = explode('|',$ruleItem);

                    foreach($ruleItemArr as $rules){
                        $ruleName = null;
                        $ruleValue = null;
                        $rulesArr = explode(':', $rules);
                        
                        $ruleName = reset($rulesArr);

                        if(count($rulesArr) > 1){
                            $ruleValue = end($rulesArr);    
                        }

                        if($ruleName == 'min'){
                            if(strlen(trim($dataFields[$fieldName])) < $ruleValue){
                               $this->setErrors($fieldName,$ruleName);
                               $checkValidate = false;
                            }
                        }

                        if($ruleName == 'max'){
                            if(strlen(trim($dataFields[$fieldName])) > $ruleValue){
                               $this->setErrors($fieldName,$ruleName);
                               $checkValidate = false;
                            }
                        }
                    }
                }
            }

            return $checkValidate;
        }

        public function errors($fieldName=''){
            if(!empty($this->__errors)){
                if(empty($fieldName)){
                    $errors[] = [];
                    foreach($this->__errors as $key=>$error){
                        $errorsArr[$key] = reset($error);
                    }
                    return $this->$errorsArr;
                }
                return reset($this->__errors[$fieldName]);
            }

            return false;
        }

        public function setErrors($fieldName,$ruleName){
            $this->__errors[$fieldName][$ruleName] = $this->__messages[$fieldName.'.'.$ruleName];
        
        }
    }

?>