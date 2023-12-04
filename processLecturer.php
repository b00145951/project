<?php 
$id = $_POST ['lecturerid'] ;
$fn = $_POST ['firstname'] ;
$sn = $_POST ['surname'] ;
$email = $_POST ['email'] ;
$phone = $_POST ['phone'] ;
$salary = $_POST ['salary'] ;
$courseid = $_POST ['courseid'] ;
$coursename = $_POST ['coursename'] ;
    
include ("dbcon.php");

$sql = "insert into lecturer(lecturerid, firstname, surname, email, phone, salary, courseid, coursename) VALUES ('$id', '$fn', '$sn', '$email', '$phone' , '$salary', '$courseid', '$coursename'' ) " ; 

// echo $sql; 
mysqli_query($conn, $sql) ;
mysqli_close($conn); 

echo "Lecturer Inserted" ;
?>