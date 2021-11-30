<?php

include 'connect.php';

$mid = $_REQUEST["MID"];
$name = $_REQUEST["Name"];
$credit = $_REQUEST["Credit"];
$level = $_REQUEST["Level"];


 
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