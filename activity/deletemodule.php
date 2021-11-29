<?php

include 'connect.php';

$mid = $_REQUEST["MID"];


$sql = "DELETE FROM module WHERE MID=?";
if ($stmt = $conn->prepare($sql)) 
$stmt->bind_param("s", $mid);
else
{
$error = $conn->errno . ' ' . $conn->error;
echo $error; 
}
$stmt->execute();
echo "Module has been successfully deleted!";
$conn->close();
//header("Location:PHPJavaScript.php");