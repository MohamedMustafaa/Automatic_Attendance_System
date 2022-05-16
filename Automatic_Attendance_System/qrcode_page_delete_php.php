<?php


$conn=mysqli_connect("localhost","root","","qr")or die("connection failed");

$fullName=$_POST['fullName'];

$sql = "DROP TABLE  $fullName ";



if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>