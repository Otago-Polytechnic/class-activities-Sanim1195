<?php
 
 include 'connect.php';

$STID = $_POST["STID"];
$MID = $_POST["MID"];
$LID = $_POST["LID"];
$Block = $_POST["Block"];
$Mark = $_POST["Mark"];

$sql = "INSERT INTO enrollment (STID, MID, LID, Block, Mark)
VALUES (?,?, ?, ?, ? )";
if ($stmt = $conn->prepare($sql)) 
$stmt->bind_param("isiid", $STID, $MID, $LID, $Block, $Mark);
else
{
$error = $conn->errno . ' ' . $conn->error;
echo $error; 
}
$stmt->execute();
header("location: enrollment.php?");
$conn->close();