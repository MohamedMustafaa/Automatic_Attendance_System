<?php
session_start();

$conn = mysqli_connect("localhost","root","","qr");
$IP = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Africa/Cairo');

mysqli_select_db($conn,'qr');
$name=$_POST['name'];
$id=$_POST['id'];
$fullName=$_POST['fullName'];

$date = date("Y-m-d H:i:s");


$sql = "SELECT * FROM $fullName WHERE ip = '$IP'";
$s = "SELECT * FROM $fullName WHERE id = '$id'";
$result= mysqli_query($conn,$sql);
$res= mysqli_query($conn,$s);
$num= mysqli_num_rows($result);
$num1= mysqli_num_rows($res);

if($num||$num1==1){
    header('location:student_page_fail.html');
    
}


else{
    $reg=" INSERT INTO $fullName (name, id, ip, date) VALUES('$name','$id','$IP','$date') ";

    mysqli_query($conn,$reg);
    
    header('location:student_page_success.html');
}


?>