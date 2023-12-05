<?php

include("dbcon.php");
if (isset($_POST['id']))
//get studentid or lecturerid from the form
 {
    $id = $_POST['id'];

    // Get student data based on studentid
    $sqlStudent = "SELECT s.firstName, s.surName
                   FROM student s
                   WHERE s.studentid = '$id'";
    $resultStudent = $conn->query($sqlStudent);

    // Get lecturer data based on lecturerid and course
    $sqlLecturer = "SELECT l.firstname, l.surname
                    FROM lecturer l
                    JOIN student s ON l.courseid = s.courseid
                    WHERE l.lecturerid = '$id'";
    $resultLecturer = $conn->query($sqlLecturer);
    // output results
    echo "<h2>Results for ID: $id</h2>";

     // checks for results in student table from entered id
    if ($resultStudent !== false && $resultStudent->num_rows > 0) {
        $rowStudent = $resultStudent->fetch_assoc();
        echo "<p>Student First Name: " . $rowStudent["firstName"] . "<br>";
        echo "Student Surname: " . $rowStudent["surName"] . "</p>";
        echo "<hr>";
    } 
     
     // checks for results in lecturer table from entered id
     elseif ($resultLecturer !== false && $resultLecturer->num_rows > 0) {
        $rowLecturer = $resultLecturer->fetch_assoc();
        echo "<p>Lecturer First Name: " . $rowLecturer["firstname"] . "<br>";
        echo "Lecturer Surname: " . $rowLecturer["surname"] . "</p>";
        echo "<hr>";
    } 
     //failed result
     else {
        echo "No results found for ID: $id.";
    }
}

$conn->close();
?>
