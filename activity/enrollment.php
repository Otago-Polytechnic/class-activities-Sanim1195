<?php
include 'header.php';
include 'connect.php';


$sql = "SELECT * FROM enrollment"; 
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

<HTML>
<head>
<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
div.relative {
  position: relative;
  left: 25%;
}
</style>
<body>
<br>
<div class="container mt-3">
<div class="dropdown dropend">
<center><h1>Enrollment Information
    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
      Enroll Student !!
    </button> 
    <ul class="dropdown-menu">
    <form action="addenrollment.php" method="post">
        Student ID: <input type="text" name="STID"><br>
        Module ID: <input type="text" name="MID"><br>
        Lecturer ID: <input type="text" name="LID"><br>
        Block: <input type="text" name="Block"><br>
        Mark: <input type="text" name="Mark"><br>
<center> <input type="submit"> </center>
</form> 
</li>
</ul>
</h1> 
</div>
</div> </center> 
<div class = "relative"><br><br>

<div class=" col-sm-6">
<table id="enrollment_table" class="table" >
<thead class="thead-dark">
<tr>
<th>STID</th>
<th>MID </th>
<th>LID </th>
<th>Block</th>
<th>Mark</th>
<th></th>
</tr>
</thead>
</div>
</div>

<script language="JavaScript">

var result = <?php echo json_encode($rows); ?>;
let table = document.getElementById("enrollment_table");
let nrow = table.rows.length;
for(i=0; i < result.length; i++){
table.insertRow(nrow);
let row = table.rows[nrow];
let cell1 = row.insertCell(0);
let cell2 = row.insertCell(1);
let cell3 = row.insertCell(2);
let cell4 = row.insertCell(3);
let cell5 = row.insertCell(4);
let cell6 = row.insertCell(5);

cell1.innerHTML = "<div contenteditable='false'>"+ result[i].STID+" </div>";
cell2.innerHTML = "<div contenteditable='false'>"+result[i].MID+" </div>";
cell3.innerHTML = "<div contenteditable='true'>"+result[i].LID+" </div>";
cell4.innerHTML = "<div contenteditable='false'>"+result[i].Block+" </div>";
cell5.innerHTML = "<div contenteditable='true'>"+result[i].Mark+" </div>";


var x = document.createElement("button");
x.setAttribute("id", "deletst-"+i);
x.setAttribute("style", "width:33%");
x.className="btn" ;
x.innerHTML = '<span class="fa fa-trash"></span>';
x.onclick = function() {delete_enrollment(table,this);}
cell6.appendChild(x);

var y = document.createElement("button");
y.setAttribute("id", "editst-"+i);
y.setAttribute("style", "width:33%");
y.className="btn" ;
y.innerHTML = '<span class="fa fa-pencil"></span>';
y.onclick = function() {edit_enrollment(table,this);}
cell6.appendChild(y);

var z = document.createElement("button");
z.setAttribute("id", "applyeditst-"+i);
z.setAttribute("style", "width:33%");
z.className="btn" ;
z.innerHTML = '<span class="fa fa-check"></span>';
z.onclick = function() {apply_edit_enrollment(table,this);}
cell6.appendChild(z);


} 


function delete_enrollment(table, element){
let row = element.parentElement.parentElement;
let STID = row.cells[0].innerText;
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
    table.deleteRow(row.rowIndex); // Record has been successfully deleted
}
};
xmlhttp.open("GET", "deleteenrollment.php?STID="+STID, true);
xmlhttp.send();
}

function edit_enrollment(table, element){
let row = element.parentElement.parentElement;
row.cells[2].contentEditable = 'true';
row.cells[4].contentEditable = 'true';
}

function apply_edit_enrollment(table, element){
let row = element.parentElement.parentElement;
let STID = row.cells[0].innerText;
let MID = row.cells[1].innerText;
let LID = row.cells[2].innerText;
let Block = row.cells[3].innerText;
let Mark = row.cells[4].innerText;

var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
     // Record has been successfully deleted
}
};
xmlhttp.open("GET", "editenrollment.php?STID=" +STID+ "&MID=" +MID+ "&LID=" +LID+ "&Block=" +Block+ "&Mark=" +Mark ,true);
xmlhttp.send();
}



</script>
</HTML>