<?php

    //postman測試
    //http://www.tcnr07.com/member/select_one_member.php
    //{"email":"ggyy@gmail.com","password":"123456"}

    $data = file_get_contents("php://input","r");

    $jsonData = array();

    $jsonData = json_decode($data, true);

    if(isset($jsonData["email"])&&isset($jsonData["password"])){

        if($jsonData["email"]!=""&&$jsonData["password"]!=""){


            $m_Email = $jsonData["email"];
            $m_Password = $jsonData["password"];

            $conn = mysqli_connect("localhost","owner","123456","testdb");

            if(!$conn){
                die("連線錯誤".mysqli_connect_error());
            }


            $sql = "SELECT * FROM member WHERE Email = '$m_Email'";

            $result = mysqli_query($conn,$sql);


            if (mysqli_num_rows($result) > 0) {

                $row = mysqli_fetch_assoc($result);

                if(password_verify($m_Password,$row["Password"])){

                    echo '{"state":true,"message":"登入成功"}';
                    
                }else{

                    echo '{"state":false,"message":"密碼錯誤"}';

                }
                
            } else {
                echo '{"state":false,"message":"查無帳號"}';
            }

            mysqli_close($conn);

        }else{

            echo '{"state":false,"message":"欄位有空值"}';
        }

    }else{

        echo '{"state":false,"message":"缺少欄位"}';
    }
?>