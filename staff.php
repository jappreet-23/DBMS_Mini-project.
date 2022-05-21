<!DOCTYPE html>
<html>
<body>
<?php
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'bsm');
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
$St_Id = $_POST['stid'];
$name = $_POST['name'];
$age= $_POST['age'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$S_id = $_POST['Sid'];
$Salary = $_POST['Salary'];

$s = "SELECT * FROM staff_details WHERE  St_Id= '$St_Id'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);
if($num >= 1){
echo "Id  is already taken";
}
else{
	$reg = "INSERT into staff_details(S_Id, St_Id, St_Name, age, phone,Gender,Salary) values ('$S_id', '$St_Id' ,'$name', '$age','$phone','$gender',$Salary)";
	mysqli_query($conn,$reg);
}
}
echo "do not refresh";



?>
<li ><button onclick="window.location.href='Home.html';"> go back</button></li>
</body>
</html>
