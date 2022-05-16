<?php
  // Create connection
$con=mysqli_connect("localhost","root","","qr")or die("connection failed");
$fullName=$_POST['fullName'];

// sql to create table
$sql = "CREATE TABLE `$fullName` (
    `name` varchar(50) NOT NULL,
    `id` varchar(50) NOT NULL,
    `ip` varchar(50) NOT NULL Primary key,
    `date` datetime(6) NOT NULL
    
  ) ";

  if ($con->query($sql) === TRUE) {

    header('location:qr_code_page.html');
   
  } else {
    echo "Error creating table: " . $con->error;
  }

  $con->close()
?>