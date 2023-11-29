<?php 
$id = $_POST ['studentid'] ;
$fn = $_POST ['firstName'] ;
$sn = $_POST ['surName'] ;
$email = $_POST ['email'] ;
$dob = $_POST ['dob'] ;
$phone = $_POST ['phone'] ;
    
include ("dbcon.php");

$sql = "insert into student(studentid, firstName, surName, email, dob, phone) VALUES ('$id', '$fn', '$sn', '$email', '$dob' , '$phone' ) " ; 

// echo $sql; 
mysqli_query($conn, $sql) ;
mysqli_close($conn); 

echo "Student Inserted" ;
?>