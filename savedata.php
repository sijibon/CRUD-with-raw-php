<?php
 $stu_name = $_POST['sname'];
 $stu_add = $_POST['saddress'];
 $class_name = $_POST['class'];
 $sphone = $_POST['sphone'];


      $conn = mysqli_connect("localhost", "root", "", "crud_php") or die("Connection failed");
      $sql = "INSERT INTO students(sname,saddress, sclass, sphone) values('{$stu_name}','{$stu_add}','{$class_name}','{$sphone}')";
      $result = mysqli_query($conn, $sql) or die("query faild");


      header("location: http://localhost/crud/index.php");
      mysqli_close($conn);
?>