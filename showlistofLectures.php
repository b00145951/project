<?php 

    
include ("dbcon.php");

$sql = "select * from lecturer" ; 
$result = mysqli_query($conn, $sql) ;
echo "<table border='1'>" ;
echo "<tr><th>LecturerID</th><th>First Name</th><th>Surname</th><th>Email</th><th>Phone</th><th>Salary</th><th>CourseID</th><th>CourseName</th></tr>";
while ($row=mysqli_fetch_assoc($result)) {
    $id = $row ['lecturerid'] ;
    $fn = $row['firstname'] ;
    $sn = $row['surname'] ;
    $email = $row['email'] ;
    $phone = $row['phone'] ;
    $salary = $row['salary'] ;
    $courseid = $row['courseid'] ;
    $coursename = $row['coursename'] ;
    
    echo "<TR><TD> $id </TD> <TD>$fn </TD> <TD> $sn </TD> <TD> $email </TD> <TD>$phone</TD> <TD>$salary</TD> <TD>$courseid</TD> <TD>$coursename</TD></TR> " ;
}
echo "</TABLE>" ;
mysqli_close ($conn) ;

?>