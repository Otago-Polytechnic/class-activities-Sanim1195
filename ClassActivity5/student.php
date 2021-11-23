<?php
include('connect.php');
include('header.html');

$sql = "SELECT * FROM student" ;
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
?>
<style>table, th, td {border: 1px solid black;} </style>
    <table >
        <thead>        
            <tr>
                <th> ID </th>
                <th>First Name</th>
                <th>Last Name</th>      
                <th>Email </th>
                <th>Address </th>        

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
            <td><?php echo $row["Address"]; ?></td>
        </tr>
<?php
}
}else {
echo "0 results";
}
$conn->close();
