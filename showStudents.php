<?php 

    
include ("dbcon.php");
$lectid = $_GET['lecturerid'] ;
$sql = "select * from student where lecturerid = $lectid" ; 
$result = mysqli_query($conn, $sql) ;
echo "<table border='1'>" ;
while ($row=mysqli_fetch_assoc($result)) {
    $id = $row ['studentid'] ;
    $fn = $row['firstName'] ;
    $sn = $row['surName'] ;
    $email = $row['email'] ;
    $dob = $row['dob'] ;
    $phone = $row['phone'] ;
    
    echo "<TR><TD> $id </TD> <TD>$fn </TD> <TD> $sn </TD> <TD> $email </TD> <TD>$dob</TD> <TD>$phone</TD> </TR> " ;
}
echo "</TABLE>" ;
mysqli_close ($conn) ;
?>