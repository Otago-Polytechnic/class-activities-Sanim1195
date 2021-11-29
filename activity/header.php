<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
  position: relative;
  left: 12%;
  width:80%;
  background-color: #4d4dff;
  overflow: auto;
}

.navbar a {
  display:block;
  text-align:center;
  float: left;
  padding:5px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color:#ccccff;
}

.active {
  background-color: #9933ff;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
</style>
<body>


<div class="navbar">
  <a href="student.php"><i class="fas fa-user-graduate"></i> Students</a>
  <a href="lecturer.php"><i class="fas fa-chalkboard-teacher"></i>Lecturer</a> 
  <a href="module.php"><i class="fad fa-books"></i>Module</a>
  <a href="enrollment.php"><i class="fas fa-dice"></i> Enrollment</a>
</div>

</body>
</html> 

