<!DOCTYPE html>
<html>
<body>
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

<h1>Student Information</h1>
<form onsubmit="print_info()" >
<label for="fname">First name:</label>
<input type="text" id="fname" name="fname"><br><br>
<label for="lastname">Last name:</label>
<input type="text" id="lname" name="lname" ><br><br>
<input type="submit">
</form>
<script>
function print_info(){
let name = document.getElementById("fname").value;
let lastname = document.getElementById("lname").value;
alert(name+" "+lastname);
}
</script>
</body>
</html>
</html>