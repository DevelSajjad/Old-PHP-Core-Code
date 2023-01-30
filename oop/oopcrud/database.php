<?php

    class Database{
        private $db_host = "localhost";
        private $db_user = "root";
        private $db_pass = "";
        private $db_name = "student1";
        private $mysqli = "";
        private $error = array();
        private $con = false; 
        function __construct()
        {
            if(!$this->con){
                $this->mysqli = new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
                $this->con = true;
                if($this->mysqli->connect_error){
                    array_push($this->error,$this->mysqli->connect_error);
                }
            }else {
                return true;
            }
        }
        public function insert($table,$para = array()){
            if($this->tableExist($table)){
                $tableKey = implode(',',array_keys($para));
                $tableValue = implode("','",$para);
                $sql = "insert into $table($tableKey) values('$tableValue')";
                if($this->mysqli->query($sql)){
                    array_push($this->error,$this->mysqli->insert_id);
                    return true;
                }else{
                    array_push($this->error,$this->mysqli->error);
                }
            }else{
                return false;
            }
        }
        public function msg(){
            $val = $this->error;
            $this->error = array();
            return $val;
        }
        private function tableExist($tableName){
            $sql = "show tables from $this->db_name like '$tableName'";
            $tableHere = $this->mysqli->query($sql);
            if($tableHere){
                if($tableHere->num_rows == 1){
                    return true;
                }else{
                    array_push($this->error,$tableName."Does Not Exist");
                    return false;
                }
            }else{
                return false;
            }
        }
       
        public function update($table,$para=array(),$where = null){
           if($this->tableExist($table)){
            $arg = array();
            foreach($para as $key => $value){
                $arg[] = "$key = '$value' ";
            }
            $sql = "update $table set " .implode($arg);
            if($where != null){
                $sql .= "where $where ";
            }
            
            if($this->mysqli->query($sql)){
                array_push($this->error,$this->mysqli->affected_rows);
                return true;
            }else{
                array_push($this->error,$this->mysqli->error);
                return false;
            }
           }
        }
        public function delete($table,$where = null){
            if($this->tableExist($table)){
                $sql = "delete from $table ";
                if($where != null){
                    $sql .= "where $where";
                }
                if($this->mysqli->query($sql)){
                    array_push($this->error,$this->mysqli->affected_rows);
                    return true;
                }else{
                    array_push($this->error,$this->mysqli->error);
                    return false;
                }
            }
        }

        public function select($table,$row="*",$join=null,$where=null,$order=null,$limit = null){
            if($this->tableExist($table)){
                $sql = "select $row from $table";
               if($join != null){
                $sql .= " $join";
               }
               if($where != null){
                $sql .= " where $where";
               }
               if($order != null){
                $sql .= " order by $order";
               }
               if($limit != null){
                if(isset($_GET['page'])){
                    $page = $_GET['page'];
                }else{
                    $page = 1;
                }
                $start = ($page - 1)*$limit;

                $sql .= " limit $start, $limit";
               }
               echo $sql."</br>";
               $query = $this->mysqli->query($sql);
               if($query){
                $this->error = $query->fetch_all(MYSQLI_ASSOC);
                // echo "<pre>". $this->error."</pre>";
                return true;
               }
            }else{
                array_push($this->error,$this->mysqli->error);
                return false;
            }
        }
       public function pagi($table,$join=null,$where=null,$limit = null){
        if($this->tableExist($table)){
            if($limit != null){
                $sql = "select count(*) from $table";
                if($join != null){
                    $sql .= " join $join";
                }
                if($where != null){
                    $sql .= " where $where";
                }
                $query = $this->mysqli->query($sql);
                $totalrecord = $query->fetch_array();
                $totalrecord = $totalrecord[0];
                
                $totalPage = ceil($totalrecord / $limit);
                $url = basename($_SERVER['PHP_SELF']);
                if(isset($_GET['page'])){
                    $page = $_GET['page'];
                }else{
                    $page = 1;
                }
                $output= "<ul>";
                    if($totalrecord > $limit){
                        for($i = 1; $i <= $totalPage; $i++){
                            if($i == $page){
                                $cls = "class = 'active'";
                            }else{
                                $cls = "";
                            }
                            $output .= "<li> <a $cls href='$url?page=$i'>$i </a> </li>";
                        }
                    }
                $output .= "</ul>";
                echo $output;
            }else{
                return false;
            }
        }else{
            return false;
        }
       }

        public function sql($sql){
            $query = $this->mysqli->query($sql);
            if($query){
                $this->error = $query->fetch_all(MYSQLI_ASSOC);
                return true;
            }else{
                array_push($this->error,$this->mysqli->error);
                return false;
            }
        }

        public function __destruct()
        {
            if($this->con){
                if($this->mysqli->close()){
                    $this->con = false;
                    return true;
                }
            }else{
                return false;
            }
        }
    }
?>