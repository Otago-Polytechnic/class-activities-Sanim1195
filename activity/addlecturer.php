<?php
 
 include 'connect.php';

$lid = $_POST["LID"];
$name = $_POST["name"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$address = $_POST["address"];
$salary = $_POST["salary"];
$qualification = $_POST["qualification"];


$sql = "INSERT INTO lecturer (LID, Name, Lastname, Email, Address,Salary, Qualification )
VALUES (?,?, ?, ?, ?,?,? )";
if ($stmt = $conn->prepare($sql)) 
$stmt->bind_param("issssds", $lid, $name, $lname, $email, $address,$salary,$qualification);
else
{
$error = $conn->errno . ' ' . $conn->error;
echo $error; 
}
$stmt->execute();
header("location: lecturer.php?");
$conn->close();