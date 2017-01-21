<?php

//$servername = "localhost";
$servername = "db23.papaki.gr:3306";
$username = "tsafou";
//$username = "root";
$password = "21112001AbC";
$db = "wedding";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $db);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Change character set to utf8
mysqli_set_charset($mysqli,"utf8");

if (isset($_POST['submit'])) {
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $guests = $_POST['guests'];

    // sql to insert into table
    $sql = "INSERT INTO rsvp (fullname, email, guests) VALUES ('$name', '$email', '$guests')";

    if ($mysqli->query($sql) === TRUE) {
        echo "Thank you for your reply.";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
//    header("Location:index.php");
//    header("Location:../index.html");


}

$mysqli->close();
?>

<p><input type="button" onclick="location.href='../index.html';" value="Return to main" /></p>