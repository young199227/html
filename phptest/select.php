<?php
    
    $servername = "localhost";
    $username = "owner";
    $password = "123456";
    $dbname = "testdb";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn){
        die("連線失敗,錯誤訊息:". mysqli_connect_error());
    }

    $sql = "SELECT * FROM product ORDER BY ID";

    $result = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_assoc($result)){

        $mydata[] = $row;

        // echo (
        //     "訂單編號:".$row["ID"]."<br>".
        //     "品名:".$row["Pname"]."<br>".
        //     "數量:".$row["Price"]."<br>".
        //     "價錢:".$row["Pnum"]."<br>".
        //     "販售時間:".$row["Created_at"]."<br><br>"
        // );
    }

    echo json_encode($mydata);

    mysqli_close($conn);
?>