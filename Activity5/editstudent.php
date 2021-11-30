<?php

include 'connect.php';

$id = $_REQUEST["STID"];
$name = $_REQUEST["Name"];
$lname = $_REQUEST["Lastname"];
$email = $_REQUEST["Email"];


 
$sql = "UPDATE student SET Name=?, Lastname=?, Email=? WHERE STID=?";
if ($stmt = $conn->prepare($sql)) 
$stmt->bind_param("sssi", $name, $lname, $email, $id);
else
{
$error = $conn->errno . ' ' . $conn->error;
echo $error; 
}
$stmt->execute();
echo "Student has been successfully deleted!";
$conn->close();
//header("Location:PHPJavaScript.php");