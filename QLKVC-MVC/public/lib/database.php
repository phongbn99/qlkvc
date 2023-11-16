<?php
    class Database extends connectDB{

        public function select($query){
            $result = $this->con->query($query) or
            die($this->con->connect_error.__LINE__);
            if($result->num_rows > 0){
                return $result;
            }else{
                return false;
            }
        }

        public function insert($query){
            $insert_row = $this->con->query($query) or
            die($this->con->connect_error.__LINE__);
            if($insert_row){
                return $insert_row;
            }else{
                return false;
            }
            
        }

        public function update($query){
            $update_row = $this->con->query($query) or
            die($this->con->connect_error.__LINE__);
            if($update_row){
                return $update_row;
            }else{
                return false;
            }
        }

        public function delete($query){
            $delete_row = $this->con->query($query) or
            die($this->con->connect_error.__LINE__);
            if($delete_row){
                return $delete_row;
            }else{
                return false;
            }
        }
    }
?>