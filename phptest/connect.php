<?php

    $servername = "localhost";
    $username = "owner";
    $password = "123456";

    $conn = mysqli_connect($servername,$username,$password);

    if(!$conn){
        die("連線失敗,錯誤訊息:". mysqli_connect_error());
    }

    echo 連線成功 ;

?>