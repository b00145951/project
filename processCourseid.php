<?php
include("dbcon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    // student data
    $sqlStudent = "SELECT student.studentid, student.firstName, student.surName
                   FROM student 
                   WHERE student.courseid IN (SELECT courseid FROM lecturer WHERE lecturerid = '$id')";
    $resultStudent = $conn->query($sqlStudent);

    //lecturer data
    $sqlLecturer = "SELECT lecturer.lecturerid, lecturer.firstname, lecturer.surname
                    FROM lecturer 
                    WHERE lecturer.courseid IN (SELECT courseid FROM student WHERE studentid = '$id')";
    $resultLecturer = $conn->query($sqlLecturer);

    echo "<h3>ID results: $id</h3>";
    
    //checks result for student 
    if ($resultStudent !== false && $resultStudent->num_rows > 0) {
        echo "<h2>Students:</h2>";
        while ($rowStudent = $resultStudent->fetch_assoc()) {
            echo "<p>Student ID: " . $rowStudent["studentid"] . "<br>";
            echo "Student First Name: " . $rowStudent["firstName"] . "<br>";
            echo "Student Surname: " . $rowStudent["surName"] . "</p>";
            echo "<hr>";
        }
    }

    //check results for lecturer 
    if ($resultLecturer !== false && $resultLecturer->num_rows > 0) {
        echo "<h2>Lecturers:</h2>";
        while ($rowLecturer = $resultLecturer->fetch_assoc()) {
            echo "<p>Lecturer ID: " . $rowLecturer["lecturerid"] . "<br>";
            echo "Lecturer First Name: " . $rowLecturer["firstname"] . "<br>";
            echo "Lecturer Surname: " . $rowLecturer["surname"] . "</p>";
            echo "<hr>";
        }
    }
    //if no results
    if ($resultStudent->num_rows == 0 && $resultLecturer->num_rows == 0) {
        echo "No results found for ID: $id.";
    }
}

$conn->close();
?>
