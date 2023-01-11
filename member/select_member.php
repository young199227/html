<?php

    //postman測試
    //http://www.tcnr07.com/member/select_member.php
    //{"email":"ggyy@gmail.com"}

    $data = file_get_contents("php://input","r");

    $jsonData = array();

    $jsonData = json_decode($data, true);

    if(isset($jsonData["email"])){

        if($jsonData["email"]!=""){


            $m_Email = $jsonData["email"];

            $conn = mysqli_connect("localhost","owner","123456","testdb");

            if(!$conn){
                die("連線錯誤".mysqli_connect_error());
            }


            $sql = "SELECT Email FROM member WHERE Email = '$m_Email'";

            $result = mysqli_query($conn,$sql);

            if (mysqli_num_rows($result) > 0) {
                
                while($row = mysqli_fetch_assoc($result)) {


                    if($row["Email"]==$m_Email){

                        echo '{"state":false,"message":"帳號已存在,不可使用"}';
                        return;
                    }

                }

            } else {
                echo '{"state":true,"message":"帳號可以使用"}';
            }

            mysqli_close($conn);

        }else{

            echo '{"state":false,"message":"欄位有空值"}';
        }

    }else{

        echo '{"state":false,"message":"缺少欄位"}';
    }
?>