<?php

    //postman測試
    //http://www.tcnr07.com/member/insert_member.php
    //{"username":"owner","password":"123456","email":"ggyy@gmail.com"}

    $data = file_get_contents("php://input","r");

    $jsonData = array();

    $jsonData = json_decode($data, true);

    if(isset($jsonData["username"])&&isset($jsonData["password"])&&isset($jsonData["email"])){

        if($jsonData["username"]!=""&&$jsonData["password"]!=""&&$jsonData["email"]!=""){



            $m_Username = $jsonData["username"];
            $m_Password = $jsonData["password"];
            $m_Email = $jsonData["email"];

            $conn = mysqli_connect("localhost","owner","123456","testdb");

            if(!$conn){
                die("連線錯誤".mysqli_connect_error());
            }

            //密碼加密
            // $pas = substr(md5($m_Password),10,8);

            $hsah_Password = password_hash($m_Email,PASSWORD_DEFAULT);


            $sql = "INSERT INTO member(Username,Password,Email)VALUES('$m_Username','$hsah_Password','$m_Email')";

            $result = mysqli_query($conn,$sql);

            if($result){

                echo '{"state":"true","message":"註冊成功"}';
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