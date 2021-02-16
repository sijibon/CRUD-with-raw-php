<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
      $conn = mysqli_connect("localhost", "root", "", "crud_php") or die("Connection failed");
      $sql = "SELECT * FROM students JOIN class_name WHERE students.sclass = class_name.cid ORDER BY id DESC"; 
      $result = mysqli_query($conn, $sql) or die("query faild");

      if(mysqli_num_rows($result) > 0){

    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>

        <?php 
         while($row = mysqli_fetch_assoc($result)){

        ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['sname']; ?></td>
                <td><?php echo $row['saddress']; ?></td>
                <td><?php echo $row['cname']; ?></td>
                <td><?php echo $row['sphone']; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['id']; ?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['id']; ?>'>Delete</a>
                </td>
            </tr>

            <?php }  ?>
        </tbody>
    </table>

    <?php } else{
          echo "<h3>No data fund</h3>";
        } ?>
</div>
</div>
</body>
</html>
