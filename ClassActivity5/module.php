<?php
include('connect.php');
include('header.html');

$sql = "SELECT * FROM module" ;
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
?>
<style>table, th, td {border: 1px solid black;} </style>
    <table >
        <thead>        
            <tr>
                <th> Module ID </th>
                <th> Name</th>
                <th>Credit</th>      
                <th>Level </th>      

            </tr>
        </thead>
    <tbody>
<?php
// output data of each row
    while($row = $result->fetch_assoc()) {?>
        <tr>
            <td><?php echo $row["MID"]; ?></td>
            <td><?php echo $row["Name"]; ?></td>
            <td><?php echo $row["Credit"]; ?></td>
            <td><?php echo $row["Level"]; ?></td>            
        </tr>
<?php
}
}else {
echo "0 results";
}
$conn->close();
