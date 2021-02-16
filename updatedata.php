<?php
 $stu_id = $_POST['sid']; 
 $stu_name = $_POST['sname'];
 $stu_add = $_POST['saddress'];
 $class_name = $_POST['sclass'];
 $sphone = $_POST['sphone'];


      $conn = mysqli_connect("localhost", "root", "", "crud_php") or die("Connection failed");
      $sql = "UPDATE students SET sname = '{$stu_name}', saddress = '{$stu_add}', sclass  = '{$class_name}', sphone = '{$sphone}' WHERE id = '{$stu_id}'";
      $result = mysqli_query($conn, $sql) or die("query faild");

      header("location: http://localhost/crud/index.php");
      mysqli_close($conn);

?>