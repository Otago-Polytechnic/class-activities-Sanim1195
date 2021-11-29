<?php
include 'header.php';
include 'connect.php';


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
<body><br>
<div class="container mt-3">
<div class="dropdown dropend">
<center><h1>Student Information 
<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
      Add a Student !!
    </button> 
    <ul class="dropdown-menu">
      <form action="addstudent.php" method="post">
        Student ID: <input type="text" name="STID"><br>
        Name: <input type="text" name="name"><br>
        Last name: <input type="text" name="lname"><br>
        E-mail: <input type="text" name="email"><br>
        Address: <input type="text" name="address"><br>
        <center> <input type="submit"> </center>
</ul>
</form>
   </h1></center>
</div>
</div>
<div class = "relative"><br><br>
<div class=" col-sm-6">
<table id="student_table" class="table" >
<thead class="thead-dark">
<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th></th>
</tr>
</thead>
</div>

<script language="JavaScript">

var result = <?php echo json_encode($rows); ?>;
let table = document.getElementById("student_table");
let nrow = table.rows.length;
for(i=0; i < result.length; i++){
table.insertRow(nrow);
let row = table.rows[nrow];
let cell1 = row.insertCell(0);
let cell2 = row.insertCell(1);
let cell3 = row.insertCell(2);
let cell4 = row.insertCell(3);
let cell5 = row.insertCell(4);

cell1.innerHTML = "<div contenteditable='false'>"+ result[i].STID+" </div>";
cell2.innerHTML = "<div contenteditable='true'>"+result[i].Name+" </div>";
cell3.innerHTML = "<div contenteditable='true'>"+result[i].Lastname+" </div>";
cell4.innerHTML = "<div contenteditable='true'>"+result[i].Email+" </div>";

var x = document.createElement("button");
x.setAttribute("id", "deletst-"+i);
x.setAttribute("style", "width:33%");
x.className="btn" ;
x.innerHTML = '<span class="fa fa-trash"></span>';
x.onclick = function() {delete_student(table,this);}
cell5.appendChild(x);

var y = document.createElement("button");
y.setAttribute("id", "editst-"+i);
y.setAttribute("style", "width:33%");
y.className="btn" ;
y.innerHTML = '<span class="fa fa-pencil"></span>';
y.onclick = function() {edit_student(table,this);}
cell5.appendChild(y);

var z = document.createElement("button");
z.setAttribute("id", "applyeditst-"+i);
z.setAttribute("style", "width:33%");
z.className="btn" ;
z.innerHTML = '<span class="fa fa-check"></span>';
z.onclick = function() {apply_edit_student(table,this);}
cell5.appendChild(z);


} 


function delete_student(table, element){
let row = element.parentElement.parentElement;
let STID = row.cells[0].innerText;
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
    table.deleteRow(row.rowIndex); // Record has been successfully deleted
}
};
xmlhttp.open("GET", "deletestudent.php?STID="+STID, true);
xmlhttp.send();
}

function edit_student(table, element){
let row = element.parentElement.parentElement;
row.cells[1].contentEditable = 'true';
row.cells[2].contentEditable = 'true';
row.cells[3].contentEditable = 'true';
}

function apply_edit_student(table, element){
let row = element.parentElement.parentElement;
row.contentEditable = 'false';
let STID = row.cells[0].innerText;
let Name = row.cells[1].innerText;
let Lastname = row.cells[2].innerText;
let Email = row.cells[3].innerText;

var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
     // Record has been successfully deleted
}
};
xmlhttp.open("GET", "editstudent.php?STID=" +STID+ "&Name=" +Name+ "&Lastname=" +Lastname+ "&Email=" +Email,true);
xmlhttp.send();
}



</script>
</HTML>