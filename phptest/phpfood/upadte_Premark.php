<?php

//postman測試用 url:http://www.tcnr07.com/phptest/phpfood/update.php
//{"id":"","premark":""}
//{"id":"17","premark":"ㄐㄐ"}

$data = file_get_contents("php://input","r");

$jsonData = array();

$jsonData = json_decode($data, true);


if(isset($jsonData["id"])&&isset($jsonData["premark"])){

    if($jsonData["id"]!=""&&$jsonData["premark"]!=""){

            $p_Id = $jsonData["id"];
            $p_Premark = $jsonData["premark"];

            $servername = "localhost";
            $username = "owner";
            $password = "123456";
            $dbname = "testdb";

            $conn = mysqli_connect($servername,$username,$password,$dbname);

            if(!$conn){
                die("連線錯誤:".mysqli_connect_error());
            }


            $sql = "UPDATE food01 SET Premark = '$p_Premark' WHERE ID = $p_Id";


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