<?php

include 'connect.php';

$id = $_REQUEST["STID"];


$sql = "DELETE FROM enrollment WHERE STID=?";
if ($stmt = $conn->prepare($sql)) 
$stmt->bind_param("i", $id);
else
{
$error = $conn->errno . ' ' . $conn->error;
echo $error; 
}
$stmt->execute();
echo "Student has been successfully deleted!";
$conn->close();
//header("Location:PHPJavaScript.php");
