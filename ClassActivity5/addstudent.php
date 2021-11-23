<?php
$servername = "localhost";
$username = "root";
$password = ""; //Your password here
$dbname = "opacnz";
$id = $_POST["STID"];
$name = $_POST["name"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$address = $_POST["address"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
die("Connection failed: " . $conn->connect_error);
$sql = "INSERT INTO student (STID, Name, Lastname, Email, Address)
VALUES (?,?, ?, ?, ? )";
if ($stmt = $conn->prepare($sql)) 
$stmt->bind_param("issss", $id, $name, $lname, $email, $address);
else
{
$error = $conn->errno . ' ' . $conn->error;
echo $error; 
}
$stmt->execute();
echo "Student has been successfully added!";
header("Location:studentform.php");
$conn->close();

