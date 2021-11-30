<?php

include 'connect.php';

$STID = $_REQUEST["STID"];
$MID = $_REQUEST["MID"];
$LID = $_REQUEST["LID"];
$Block = $_REQUEST["Block"];
$Mark = $_REQUEST["Mark"];

 
$sql = "UPDATE enrollment SET LID=?, Mark=? WHERE STID=? and MID=? and  Block=?";
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
