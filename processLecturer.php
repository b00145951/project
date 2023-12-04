<?php 
$id = $_POST ['lecturerid'] ;
$fn = $_POST ['firstname'] ;
$sn = $_POST ['surname'] ;
$email = $_POST ['email'] ;
$phone = $_POST ['phone'] ;
$salary = $_POST ['salary'] ;
$staffid = $_POST ['staffid'] ;
    
include ("dbcon.php");

$sql = "insert into lecturer(lecturerid, firstname, surname, email, phone, salary, staffid) VALUES ('$id', '$fn', '$sn', '$email', '$phone' , '$salary', 'staffid' ) " ; 

// echo $sql; 
mysqli_query($conn, $sql) ;
mysqli_close($conn); 

echo "Lecturer Inserted" ;
?>