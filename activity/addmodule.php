<?php
 
 include 'connect.php';

$mid = $_POST["MID"];
$name = $_POST["name"];
$credit = $_POST["credit"];
$level = $_POST["level"];



$sql = "INSERT INTO module (MID, Name, Credit, Level)
VALUES (?,?, ?, ? )";
if ($stmt = $conn->prepare($sql)) 
$stmt->bind_param("ssii", $mid, $name, $credit, $level);
else
{
$error = $conn->errno . ' ' . $conn->error;
echo $error; 
}
$stmt->execute();
header("location: module.php?");
$conn->close();