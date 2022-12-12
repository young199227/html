<?php

    $conn = mysqli_connect("localhost","root","","ggyy");

    $sql = "SELECT * FROM dept ORDER BY deptId;";

    mysqli_query($conn, 'SET NAMES utf8');

    $result = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_assoc($result)){

        $mydata[] = $row;
    }

    echo json_encode($mydata);

    mysqli_close($conn);


?>