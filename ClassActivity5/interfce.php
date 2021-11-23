<?php
include('connect.php');

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
            <input type=button value="increment" onclick="button1()" />
<input type=button value="decrement" onclick="button2()" />
<div id="value"></div>
<script type="text/javascript">
var x=0
var element = document.getElementById("value");
element.innerHTML = x;
function button1(){
element.innerHTML = ++x;
}
function button2(){
element.innerHTML = --x;
}
</script>
        </tr>
<?php
}
}else {
echo "0 results";
}
$conn->close();
