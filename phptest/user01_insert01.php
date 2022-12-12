<?php

    if(isset($_POST["username"])&&isset($_POST["password"])&&isset($_POST["nickname"])&&isset($_POST["height"])&&isset($_POST["weight"])){

        if($_POST["username"]!=""&&$_POST["password"]!=""&&$_POST["nickname"]!=""&&$_POST["height"]!=""&&$_POST["weight"]!=""){

        

        $p_Username = $_POST["username"];
        $p_Password = $_POST["password"];
        $p_Nickname = $_POST["nickname"];
        $p_Height = $_POST["height"];
        $p_Weight = $_POST["weight"];

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
            echo ("新增成功");
        }

        mysqli_close($conn);

    }else{

        echo ("欄位空白");
    }

}else{

    echo ("少一個欄位");
}

?>