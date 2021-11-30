<?php

include 'connect.php';

$lid = $_REQUEST["LID"];


$sql = "DELETE FROM lecturer WHERE LID=?";
if ($stmt = $conn->prepare($sql)) 
$stmt->bind_param("i", $lid);
else
{
$error = $conn->errno . ' ' . $conn->error;
echo $error; 
}
$stmt->execute();
echo "Student has been successfully deleted!";
$conn->close();
//header("Location:PHPJavaScript.php");