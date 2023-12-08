<?php 

    
include ("dbcon.php");

$sql = "select * from student" ; 
$result = mysqli_query($conn, $sql) ;
echo "<table border='1'>" ;
echo "<tr><th>StudentID</th><th>First Name</th><th>Surname</th><th>Email</th><th>DOB</th><th>Phone</th><th>CourseID</th><th>CourseName</th></tr>";
while ($row=mysqli_fetch_assoc($result)) {
    $id = $row ['studentid'] ;
    $fn = $row['firstName'] ;
    $sn = $row['surName'] ;
    $email = $row['email'] ;
    $dob = $row['dob'] ;
    $phone = $row['phone'] ;
    $courseid = $row['courseid'] ;
    $coursename = $row['coursename'] ;
    
    echo "<TR><TD> $id </TD> <TD>$fn </TD> <TD> $sn </TD> <TD> $email </TD> <TD>$dob</TD> <TD>$phone</TD> <TD>$courseid</TD> <TD>$coursename</TD></TR> " ;
}
echo "</TABLE>" ;
mysqli_close ($conn) ;

?>