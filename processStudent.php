<?php 
$id = $_POST ['studentid'] ;
$fn = $_POST ['firstName'] ;
$sn = $_POST ['surName'] ;
$email = $_POST ['email'] ;
$dob = $_POST ['dob'] ;
$phone = $_POST ['phone'] ;
$courseid = $_POST ['courseid'] ;
$coursename = $_POST ['coursename'] ;

include ("dbcon.php");

$sql = "insert into student(studentid, firstName, surName, email, dob, phone, courseid, coursename) VALUES ('$id', '$fn', '$sn', '$email', '$dob' , '$phone', '$courseid', '$coursename') " ; 

// echo $sql; 
mysqli_query($conn, $sql) ;
mysqli_close($conn); 

echo "Student Inserted" ;
?>