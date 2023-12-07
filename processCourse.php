<?php

include("dbcon.php");
if (isset($_POST['id']))
//get studentid or lecturerid from the form
 {
    $id = $_POST['id'];

    // Get student data based on studentid
    $sqlStudent = "SELECT student.firstName, student.surName
                   FROM student
                   WHERE student.studentid = '$id'";
    $resultStudent = $conn->query($sqlStudent);

    // Get lecturer data based on lecturerid and course
    $sqlLecturer = "SELECT lecturer.firstname, lecturer.surname
                    FROM lecturer
                    JOIN student ON lecturer.courseid = student.courseid
                    WHERE lecturer.lecturerid = '$id'";
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
        echo "No results found for entered id: $id.";
    }
}

$conn->close();
?>
