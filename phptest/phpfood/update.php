<?php

//postman測試用 url:http://www.tcnr07.com/phptest/phpfood/update.php
//{"id":"","pname":"","price":"","pnum":""}
//{"id":"17","pname":"ㄐㄐ","price":"999","pnum":"1"}

$data = file_get_contents("php://input","r");

$jsonData = array();

$jsonData = json_decode($data, true);


if(isset($jsonData["id"])&&isset($jsonData["pname"])&&isset($jsonData["price"])&&isset($jsonData["pnum"])){

    if($jsonData["id"]!=""&&$jsonData["pname"]!=""&&$jsonData["price"]!=""&&$jsonData["pnum"]!=""){

            $p_Id = $jsonData["id"];
            $p_Pname = $jsonData["pname"];
            $p_Price = $jsonData["price"];
            $p_Pnum = $jsonData["pnum"];


            $servername = "localhost";
            $username = "owner";
            $password = "123456";
            $dbname = "testdb";

            $conn = mysqli_connect($servername,$username,$password,$dbname);

            if(!$conn){
                die("連線錯誤:".mysqli_connect_error());
            }


            $sql = "UPDATE food01 SET Pname = '$p_Pname',Price = '$p_Price', Pnum = '$p_Pnum' WHERE ID = $p_Id";


            if(mysqli_query($conn, $sql)){

                echo '{"state":"true","message":"修改成功"}';
            }else{

                echo '{"state":"false","message":"修改失敗"'.$sql.mysqli_error($conn).'}';
            }


        mysqli_close($conn);

    }else{

        echo '{"state":"false","message":"欄位有空值修改失敗"}';
    }

}else{

    echo '{"state":"false","message":"缺少欄位修改失敗"}';
}



?>