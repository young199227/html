<?php

    $server_name = 'localhost';
    $username = 'admin';
    $password = '123456';
    $db_name = 'ggyy';

    //r]+xG?0=9Wh8_Q|S

    $conn = new mysqli($server_name, $username, $password, $db_name);

    //utf8防中文亂碼
    mysqli_query($conn , "set names utf8");

    if (!empty($conn->connect_error)) {
    die('資料庫連線錯誤:' . $conn->connect_error);    // die()：終止程序
    }

?>