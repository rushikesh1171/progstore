<?php

$con = mysqli_connect('localhost', 'root', '','db_contact');

$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$gst = $_POST['gst'];

$sql = "INSERT INTO `tbl_contact` (`Name`, `Address`, `Phone`, `Email`, `GST`) VALUES ('$name', '$address', '$phone', '$email', '$gst');";

$x=mysqli_query($con, $sql);


echo "hii";

header("Location:http://localhost/Mini-Project/index.html");


?>