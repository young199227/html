<?php

//傳入的值示範
//{"username":"123","password":"XXX","nickname":"xxx","height":"123","weight":"100"}

$data = file_get_contents("php://input","r");

$jsonData = array();

$jsonData = json_decode($data, true);


    if(isset($jsonData["username"])&&isset($jsonData["password"])&&isset($jsonData["nickname"])&&isset($jsonData["height"])&&isset($jsonData["weight"])){

        if($jsonData["username"]!=""&&$jsonData["password"]!=""&&$jsonData["nickname"]!=""&&$jsonData["height"]!=""&&$jsonData["weight"]!=""){

        
        $p_Username = $jsonData["username"];
        $p_Password = $jsonData["password"];
        $p_Nickname = $jsonData["nickname"];
        $p_Height = $jsonData["height"];
        $p_Weight = $jsonData["weight"];

        $servername = "localhost";
        $username = "owner";
        $password = "123456";
        $dbname = "testdb";

        $conn = mysqli_connect($servername,$username,$password,$dbname);

        if(!$conn){
            die("連線錯誤:".mysqli_connect_error());
        }

        $sql = "INSERT INTO user01(Username,Password,Nickname,Height,Weight) VALUES ('$p_Username','$p_Password','$p_Nickname','$p_Height','$p_Weight')";
        
        
        if(mysqli_query($conn,$sql)){
            echo '{"state":"true","message":"新增成功"}';
        }else{

            echo '{"state":"false","message":"新增資料失敗"'.$sql.mysqli_error($conn).'}';
        }

        mysqli_close($conn);

    }else{

        echo '{"state":"false","message":"新增失敗,欄位空白"}';
    }

}else{

    echo '{"state":"false","message":"新增失敗,缺少欄位"}';
}

?>