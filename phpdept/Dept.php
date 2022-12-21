<?php

class Dept{

    private $conn;

    //建構子
    public function __construct($conn){


        $this->conn = $conn;

    }

    //解構子
    public function __destruct(){

        if(!empty($this->conn)){
            //結束資料庫連線
            $this->conn->disConnection();
        }
    }

    //取得所有部門
    public function getDept(){
        
        $sql = "SELECT * FROM dept";
        $this->conn->prepare($sql);
        $this->conn->query();

        $list = $this->conn->fetch("object");
        $this->conn->disConnection();
        return $list;

    }

}    

?>