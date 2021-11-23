<?php

include  'connect.php'; // Using database connection file here

$id = $_GET['LID']; // get id through query string

$del = mysqli_query($conn,"DELETE from lecturer WHERE LID = '$id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:index.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>





<?php

include "connect.php"; // Using database connection file here

$id = $_GET['LID']; // get id through query string

$qry = mysqli_query($conn,"select * from lecturer where LID='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $name = $_POST['Name'];
    $Lname = $_POST['LastName'];
	
    $edit = mysqli_query($conn,"update lecturer set FullName ='$name', LastName ='$Lname' where LID='$id'");
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:all_records.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="fullname" value="<?php echo $data['fullname'] ?>" placeholder="Enter Full Name" Required>
  <input type="text" name="age" value="<?php echo $data['age'] ?>" placeholder="Enter Age" Required>
  <input type="submit" name="update" value="Update">
</form>