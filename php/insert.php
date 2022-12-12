<?php

require_once 'db.php';

// $_GET['addmes']
$dept_name = $_GET["dept_name"];

$sql = "INSERT INTO dept (dept_name) VALUES ('$dept_name');";

mysqli_query($conn,$sql);

$conn->close();

?>

