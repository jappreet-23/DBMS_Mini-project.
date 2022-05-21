<!DOCTYPE html>
<html>
<body>
<?php
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'bsm');
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
$S_Id = $_POST['Sid'];
$A_Id = $_POST['aid'];
$A_name= $_POST['name'];
$A_phone= $_POST['phone'];
$B_Id = $_POST['bid'];
$cost = $_POST['cost'];


$s = "SELECT * FROM adoption WHERE  A_Id= '$A_Id'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);
if($num >= 1){
echo "Id  is already taken";
}
else{
	$reg = "INSERT into adoption(S_Id, A_Id, A_name, A_phone, B_Id, Cost) values ('$S_Id', '$A_Id' ,'$A_name', '$A_phone','$B_Id','$cost')";
	mysqli_query($conn,$reg);
}
}
echo "do not refresh";



?>
<li ><button onclick="window.location.href='Home.html';"> go back</button></li>
</body>
</html>
