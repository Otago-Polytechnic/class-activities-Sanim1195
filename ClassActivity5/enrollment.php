<?php
include('connect.php');
include('header.html');

$sql = "SELECT * FROM enrollment" ;
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
?>
<style>table, th, td {border: 1px solid black;} </style>
    <table >
        <thead>        
            <tr>
                <th> Student ID </th>
                <th>Module ID</th>
                <th>Lecturer ID</th>      
                <th>Block </th>
                <th>Mark </th>        

            </tr>
        </thead>
    <tbody>
<?php
// output data of each row
    while($row = $result->fetch_assoc()) {?>
        <tr>
            <td><?php echo $row["STID"]; ?></td>
            <td><?php echo $row["MID"]; ?></td>
            <td><?php echo $row["LID"]; ?></td>
            <td><?php echo $row["Block"]; ?></td>
            <td><?php echo $row["Mark"]; ?></td>
        </tr>
<?php
}
}else {
echo "0 results";
}
$conn->close();
