<?php

//postman測試用 url:http://www.tcnr07.com/phptest/phpfood/delete.php
//{"id":""}
//{"id":"17"}

$data = file_get_contents("php://input","r");

$jsonData = array();

$jsonData = json_decode($data, true);


if(isset($jsonData["id"])){

    if($jsonData["id"]!=""){

            $p_Id = $jsonData["id"];

            $servername = "localhost";
            $username = "owner";
            $password = "123456";
            $dbname = "testdb";
        
            $conn = mysqli_connect($servername,$username,$password,$dbname);
        
            if(!$conn){
                die("連線錯誤:".mysqli_connect_error());
            }
        
            $sql = "DELETE FROM food01 WHERE ID=$p_Id";
        

            if(mysqli_query($conn, $sql)){

                echo '{"state":"true","message":"刪除成功"}';
            }else{

                echo '{"state":"false","message":"刪除失敗"'.$sql.mysqli_error($conn).'}';
            }

        mysqli_close($conn);

    }else{

        echo '{"state":"false","message":"欄位有空值刪除失敗"}';
    }

}else{

    echo '{"state":"false","message":"缺少欄位刪除失敗"}';
}

?>