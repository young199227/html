
<?php

require_once 'db.php';

// $dept_id = $_POST['dept_id'];

$sql = "DELETE FROM dept";

$retval = mysqli_query( $conn, $sql );

$conn->close();

?>

