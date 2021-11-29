<?php

include 'connect.php';

$lid = $_POST["LID"];
$name = $_POST["Name"];
$lname = $_POST["Lastname"];
$email = $_POST["Email"];
$address = $_POST["Address"];
$salary = $_POST["Salary"];
$qualification = $_POST["Qualification"];


 
$sql = "UPDATE lecturer SET Name=?, Lastname=?, Email=?, Address=?, Salary=?, Qualification=? WHERE LID=?";
if ($stmt = $conn->prepare($sql)) 
$stmt->bind_param("ssssdsi", $name, $lname, $email,, $address, $salary, $qualification, $lid);
else
{
$error = $conn->errno . ' ' . $conn->error;
echo $error; 
}
$stmt->execute();
echo "Student has been successfully deleted!";
$conn->close();
//header("Location:PHPJavaScript.php");