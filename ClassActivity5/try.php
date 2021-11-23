<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <center>
        <h1>Student Information</h1>
            <label for="fname">First name:</label>
                <input type="text" id="fname" name="fname"><br><br>
            <label for="lastname">Last name:</label>
                <input type="text" id="lname" name="lname" ><br><br>
            <button class="btn" style="color:white; background-color:#1e8564"
                onclick="add_student()">Add Student</button>
        <div class=" col-sm-6">
            <table id="student_table" class="table" >
                <thead class="thead-dark">
    </center>
            <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
            </tr>
            
        </thead>
            </div>
<script>
    function add_student(){
        let name = document.getElementById("fname").value;
        let lastname = document.getElementById("lname").value;
        let table = document.getElementById("student_table");
        let nrow = table.rows.length;
    table.insertRow(nrow);
        let row = table.rows[nrow];
        let cell1 = row.insertCell(0);
        let cell2 = row.insertCell(1);
        cell1.innerHTML = name;
        cell2.innerHTML = lastname;
}
</script>
</body>
</html>