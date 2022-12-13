<?php

    //{"username":"XXX","password":"XXX","nickname":"xxx","height":"123","weight":"100"}


    $data = file_get_contents("php://input","r");

    echo $data;


    $jsonData = array();

    $jsonData = json_decode($data, true);

    echo 123456 ;
    
    echo $jsonData["username"].$jsonData["password"];

?>