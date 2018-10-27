<?php
include("../control/config.php");

$fname =$_POST['fname'];
$lname =$_POST['lname'];
$fathername =$_POST['father_name'];
$mothername =$_POST['mother_name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$nid=$_POST['nid'];
$address=$_POST['address'];
$ssc=$_POST['ssc'];
$hsc=$_POST['hsc'];
$nationality=$_POST['nationality'];
$religion=$_POST['religion'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$bg=$_POST['bg'];

$sql ="INSERT INTO cv(fname,lname,fathername,mothername,phone,email,address,ssc,hsc,nationality,religion,gender,dob,bg)
VALUES ('$fname','$lname','$fathername','$mothername', '$phone', '$email', '$nid', '$address', '$ssc', '$hsc', '$nationality', '$religion', '$gender', '$dob', '$bg')";
$result=mysqli_query($myconn,$sql);
if($result===TRUE)
{
	echo "Data inserted";
}
else "Data not inserted";




?>