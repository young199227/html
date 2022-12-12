<?php

    $servername = "localhost";
    $username = "owner";
    $password = "123456";
    $dbname = "testdb";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn){
        die("連線錯誤:".mysqli_connect_error());
    }

    $sql = "SELECT * FROM user01 ORDER BY ID";

    $result = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_assoc($result)){

        $mydata[] = $row;
    }

    echo json_encode($mydata);

    mysqli_close($conn);

?>