<?php

    require_once("db.php");

    $deptId = 1;

    $sql = "SELECT * FROM dept WHERE '$deptId' = ?";

    $st = $conn->prepare($sql);

    $st->bind_param('i',$deptId);


    if($st->execute()){

        $res = $st->get_result();

        $data = $res->fetch_object();

        if(empty($data)){

            echo "查無資料";
        }else{
            echo ($data->dept_name);
        }
    }else{

        echo "查詢失敗";
    }
?>

