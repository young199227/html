<?php

class Connection{

    private static $conn;
    private $query;
    private $result;
    private $row;


    public static function connect(){

        $host = "localhost";
        $user = "admin";
        $pwd = "123456";
        $database = "shop";
        $port = "";
        $scoket = "";

        self::$conn = new mysqli(
            $host,$user,$pwd,$database,$port,$scoket
        );

        self::$conn->set_charset("utf-8");

        return true;
    }

    public static function getConnection(){

        return self::$conn;
    }

    public function disConnection(){

        if(mysqli_connect_error()!==0){

            self::$conn->close();
        }
    }

    public function query(){

        if(isset($this->query)){

            $this->result = self::$conn->query($this->query);

            return true;
        }

        return false;
    }

    public function fetch($type = 'object'){

        if(isset($this->result)){

            $row = null;
            switch($type){

                case "array":
                    $row = $this->result->fetch_array();
                    break;
                case "object":
                    while ($row = $this->result->fetch_obiect()){

                        $rows[] = $row;
                    }
                    break;
                default:
                    $row = $this->result->fetch_object();

            }


            if($type == "object"){

                return $rows;

            }else{
                return $row;
            }
        }

        return false;
    }
}

?>