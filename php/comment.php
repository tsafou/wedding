<?php

$servername = "localhost";
$username = "root";
$password = "21112001AbC";
$db = "wedding";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $db);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    // sql to insert into table
    $sql = "INSERT INTO comment (name, email, comment) VALUES ('$name', '$email', '$comment')";

    if ($mysqli->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

//    header("Location:index.php");
    header("Location:../style-02/guest-book.php");
}

$mysqli->close();
?>