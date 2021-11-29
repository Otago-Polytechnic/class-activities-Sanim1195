<?php

include 'connect.php';

$mid = $_POST["MID"];
$name = $_POST["Name"];
$credit = $_POST["Credit"];
$level = $_POST["Level"];


 
$sql = "UPDATE module SET Name=?, Credit=?, Level=? WHERE MID=?";
if ($stmt = $conn->prepare($sql)) 
$stmt->bind_param("siis", $name, $credit, $level, $mid);
else
{
$error = $conn->errno . ' ' . $conn->error;
echo $error; 
}
$stmt->execute();
echo "Module has been successfully deleted!";
$conn->close();
//header("Location:PHPJavaScript.php");