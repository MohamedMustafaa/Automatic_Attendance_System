<?php

session_start();

$con=mysqli_connect("localhost","root","","qr")or die("connection failed");

mysqli_select_db($con,'qr');

$name=$_POST['name'];
$id=$_POST['id'];

$sql = " SELECT * FROM teacher WHERE name = '$name' &&  id = '$id' ";
 
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);

if($num==1)

{
    
    header('location:table_creation.html');

}

else {
  
   header('location:teacher_login_fail.html');
   
}
?>