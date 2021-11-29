<?php

include 'connect.php';

$STID = $_POST["STID"];
$MID = $_POST["MID"];
$LID = $_POST["LID"];
$Block = $_POST["Block"];
$Mark = $_POST["Mark"];

 
$sql = "UPDATE student SET LID=?, Mark=? WHERE STID=?, MID=?, Block=?";
if ($stmt = $conn->prepare($sql)) 
$stmt->bind_param("idisi", $LID, $Mark, $STID, $MID, $Block);
else
{
$error = $conn->errno . ' ' . $conn->error;
echo $error; 
}
$stmt->execute();
echo "Student has been successfully deleted!";
$conn->close();
//header("Location:PHPJavaScript.php");