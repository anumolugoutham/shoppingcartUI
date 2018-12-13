<?php
$servername = "localhost";
$username = "root";
$dbname = "website";
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dd = $_POST['dd'];
$mm = $_POST['mm'];
$yyyy = $_POST['yyyy'];
$uname = $_POST['uname'];
$pass = $_POST['password'];

$conn = new mysqli($servername, $username,$password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO registration VALUES($fname,$lname,$email,$phone,$dd,$mm,
$yyyy,$uname,$pass)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>