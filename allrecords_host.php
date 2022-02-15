<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2> Details</h2>

<table border="2">
  <tr>
    <td>IP</td>
    <td>Status</td>
    <td>Mac</td>
    <td>os</td>
    <td>domain</td>


  </tr>

<?php

include "dbConn.php"; // Using database connection file here

$value = trim($_POST['host']);
//$value = mysqli_real_escape_string($db, $value);
$records = mysqli_query($db,"select * from demodb1 where `host` = '$value'"); // fetch data from database
while($data = mysqli_fetch_array($records))
{

?>
  <tr>
    <td><?php echo $data['host']; ?></td>
    <td><?php echo $data['status']; ?></td>
    <td><?php echo $data['Mac']; ?></td>
    <td><?php echo $data['os']; ?></td>
    <td><?php echo $data['domain']; ?></td>

  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>
