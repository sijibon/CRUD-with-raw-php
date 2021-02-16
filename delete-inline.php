<?php

$stu_id = $_GET['id'];

        $conn = mysqli_connect("localhost", "root", "", "crud_php") or die("Connection failed");
        $stu_id = $_GET['id'];
        $sql = "DELETE FROM students WHERE id = $stu_id"; 
        $result = mysqli_query($conn, $sql) or die("query faild");

        header("location: http://localhost/crud/index.php");
        mysqli_close($conn);

?>