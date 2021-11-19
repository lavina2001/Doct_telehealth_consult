<?php
include 'connection.php';


$name=trim($_POST['name']);
$mobile_number=trim($_POST['mobile_number']);
$password=trim(md5($_POST['password']));
$sql="insert into user(name,mobile_no,password)values($name,$mobile_number,$password)";
 mysqli_query($sql,$conn);
  print_r ($conn);
 echo "Entered data successfully\n";
   
   mysql_close($conn);


?>