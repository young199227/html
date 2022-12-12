<?php

    $conn = mysqli_connect("localhost","root","","ggyy");

    $dept_name = $_POST['dept_name'];

    $sql = "INSERT INTO dept (dept_name) VALUES ('$dept_name')";

    mysqli_query($conn, 'SET NAMES utf8');

    mysqli_query($conn,$sql);

    mysqli_close($conn);

    echo ("新增成功");
?>

<script>location.href="test.html";</script>