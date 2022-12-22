<?php

require_once("db.php");

//{"pname":"超好吃飯","price":"100","pnum":"1"}

$data = file_get_contents("php://input","r");

$jsonData = array();

$jsonData = json_decode($data, true);

if(isset($jsonData["pname"])&&isset($jsonData["price"])&&isset($jsonData["pnum"])){

    if($jsonData["pname"]!=""&&$jsonData["price"]!=""&&$jsonData["pnum"]!=""){

        $p_Pname = $jsonData["pname"];
        $p_Price = $jsonData["price"];
        $p_Pnum = $jsonData["pnum"];
        

        // $servername = "localhost";
        // $username = "owner";
        // $password = "123456";
        // $dbname = "testdb";
        
        // $conn = mysqli_connect($servername,$username,$password,$dbname);
        
        // if(!$conn){ 
        //     die("連線錯誤:".mysqli_connect_error());
        // }

        $conn = cerate_connect();
        
        $sql = "INSERT INTO food01(Pname,Price,Pnum)VALUES('$p_Pname','$p_Price','$p_Pnum')";

        $result = execute_sql($conn,"testdb",$sql);
        

        if($result){

            echo '{"state":"true","message":"新增成功"}';
        }else{

            echo '{"state":"false","message":"新增資料失敗"'.$sql.mysqli_error($conn).'}';
        }

        mysqli_close($conn);

    }else{

        echo '{"state":"false","message":"欄位有空值新增失敗"}';
    }

}else{

    echo '{"state":"false","message":"缺少欄位新增失敗"}';
}





?>
