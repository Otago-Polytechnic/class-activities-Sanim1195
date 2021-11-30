<?php

include 'connect.php';

$lid = $_REQUEST["LID"];
$name = $_REQUEST["Name"];
$lname = $_REQUEST["Lastname"];
$email = $_REQUEST["Email"];
$address = $_REQUEST["Address"];
$salary = $_REQUEST["Salary"];
$qualification = $_REQUEST["Qualification"];


 
$sql = "UPDATE lecturer SET Name=?, Lastname=?, Email=?, Address=?, Salary=?, Qualification=? WHERE LID=?";
if ($stmt = $conn->prepare($sql)) 
$stmt->bind_param("ssssdsi", $name, $lname, $email, $address, $salary, $qualification, $lid);
else
{
$error = $conn->errno . ' ' . $conn->error;
echo $error; 
}
$stmt->execute();
echo "Student has been successfully deleted!";
$conn->close();
//header("Location:PHPJavaScript.php");