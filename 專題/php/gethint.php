<?php


require_once 'db.php';

$sql = "SELECT * FROM dept ORDER BY deptId;";

$retval_select = mysqli_query($conn,$sql);


while($row = mysqli_fetch_array($retval_select, MYSQLI_ASSOC))
{  
    echo "<div class='col-12'>";
    echo "<h1 id='text1'>{$row["dept_name"]}</h1>";
    echo "</div>";
}


$conn->close();


?>