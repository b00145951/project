<?php

$usr = $_POST['username'];
$pwd = $_POST['passwd'];

require('dbcon.php');

$conn = mysqli_connect ($servername, $username, $password, $dbname); 

$sql = "SELECT pwd FROM registeredUser WHERE userName= '$usr'";

$results = mysqli_query($conn,$sql);

$dBpwd = '';

while($row = $results->fetch_assoc())
{
    $dBpwd = $row['pwd'];
}

if ($dBpwd == $pwd) {
    //echo "password is correct";
    session_start();
    $_SESSION['username'] = $usr;
    header('Location: loggedIn.html');
} else {
    //echo "password is incorrect";
    header ('Location: loginTryAgain.html');
}
?>