<?php
    include_once 'config.php';

    class DB{
        private $connect = null;

        public function __construct(){
            $this->connect();
        }

        private function connect(){
            $connect = new mysqli(HOST, USER, PASS, DATABASE);

            if(mysqli_connect_errno()){
                die("ошибка подключения");
            }

            $this->connect = $connect;
        }

        public function select($tableName){
            $sql = 'SELECT * FROM `'.$tableName.'`';
            $objQuery = $this->connect->query($sql);
            return $this->convertData($objQuery);
        }

        private function convertData($objQuery){
            $data = [];

            if($objQuery != null){
                while($row = $objQuery->fetch_array(MYSQLI_ASSOC)){
                    $data[] = $row;
                }
            }

            return $data;
        }
    }

?>