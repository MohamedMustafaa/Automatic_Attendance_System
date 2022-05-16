<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "qr system");
mysqli_select_db($conn,'qr system');

    $regg="INSERT INTO `advanced_total_attendance` (SELECT * FROM advanced)";
    $reggg="INSERT INTO `image_total_attendance` (SELECT * FROM image)";
    $regggg="INSERT INTO `pattern_total_attendance` (SELECT * FROM pattern)";
    $reggggg="INSERT INTO `security_total_attendance` (SELECT * FROM security)";
    mysqli_query($conn,$regg);
    mysqli_query($conn,$reggg);
    mysqli_query($conn,$regggg);
    mysqli_query($conn,$reggggg);
    header('location:qr_code_page.html');
    ?>