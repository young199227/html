<?php

$servername = "localhost";
$username = "owner";
$password = "123456";
$dbname = "testdb";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("連線錯誤:".mysqli_connect_error());
}
//DESC 為大到小
$sql = "SELECT * FROM food01 ORDER BY Pnum";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

    while($row = mysqli_fetch_assoc($result)){

        $mydata[] = $row;
    }

    // echo json_encode($mydata);

    echo '{"state":true,"message":"讀取成功","data":'. json_encode($mydata) .'}';

}else{

    echo '{"state":false,"message":"沒有資料"}';
}

mysqli_close($conn);

?>
