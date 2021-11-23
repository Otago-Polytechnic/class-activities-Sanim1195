<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "opacnz";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
die("Connection failed: " . $conn->connect_error);

$sql = "SELECT * FROM student" ; 
$stmt = $conn->prepare($sql); 
$stmt->execute();
$result = $stmt->get_result();
$i = 0;
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
$rows[$i] = $row;
$i++;
}
} else {
echo "0 results";
}
?>
