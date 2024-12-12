<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "profile";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$fullname = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$profession = $_POST['profession'];
$contact = $_POST['contact'];

$sql = "INSERT INTO user_info (fullname, username, psw, profession, contact) VALUES ('$fullname', '$username', '$password', '$profession', '$contact')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
