<?php

//{"ID":"?"}

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
        
        $sql = "SELECT * FROM food01 WHERE ID='$p_Id'";

        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)>0){

            while($row = mysqli_fetch_assoc($result)){

                $mydata[] = $row;
            }

            // echo json_encode($mydata);

            echo '{"state":true,"message":"讀取成功","data":'. json_encode($mydata) .'}';

        }else{

            echo '{"state":false,"message":"沒有資料"}';
        }

        mysqli_close($conn);

    }else{

        echo '{"state":"false","message":"欄位有空值讀取失敗"}';
    }

}else{

    echo '{"state":"false","message":"缺少欄位讀取失敗"}';
}

?>