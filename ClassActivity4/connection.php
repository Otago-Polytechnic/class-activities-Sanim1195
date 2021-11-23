<?php
$servername = "localhost";
$username = "root";
$password = ""; //Your password here
$dbname = "opacnz";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
die("Connection failed: " . $conn->connect_error);
else
$sql = "SELECT * FROM student" ;
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
?>
<table >
<thead>
<tr>
<th> ID </th>
<th>First Name</th>
<th>Last Name</th>
<th>Email </th>
</tr>
</thead>
<tbody>
<?php
// output data of each row
while($row = $result->fetch_assoc()) {?>
<tr>
<td><?php echo $row["STID"]; ?></td>
<td><?php echo $row["Name"]; ?></td>
<td><?php echo $row["Lastname"]; ?></td>
<td><?php echo $row["Email"]; ?></td>
</tr>
<?php
}
} else {
echo "0 results";
}




$conn->close();


/*
$sql = "INSERT INTO lecturer (LID, Name, Lastname, Email,Qualification)
VALUES (200,'Farhad', 'Mehdipour', 'farhad.Mehdipour@example.com','phd')";
if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql = "DELETE FROM lecturer WHERE LID = 200";
if ($conn->query($sql) === TRUE) {
echo "Record deleted successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql = "UPDATE lecturer SET Salary = 100 WHERE LID = 100";
if ($conn->query($sql) === TRUE) {
echo "Row Updated successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT * FROM lecturer where LID =100";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "lid: " . $row["LID"]. " - Name: " . $row["Name"]. " " .
$row["Lastname"]."   LecturerEmailId: " . $row["Email"]."Qualification: " . $row["Qualification"]."<br>";
}
} else {
echo "0 results";
}


$sql = "SELECT * FROM lecturer";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "lid: " . $row["LID"]. " - Name: " . $row["Name"]. " " .
$row["Lastname"]."   LecturerEmailId: " . $row["Email"]."Qualification: " . $row["Qualification"]."<br>";
}
} else {
echo "0 results";
}
*/