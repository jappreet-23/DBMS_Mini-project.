<!DOCTYPE html>
<html>
<body>
<?php
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'bsm');
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
$S_Id = $_POST['Sid'];
$B_Id = $_POST['bid'];
$B_Type= $_POST['btype'];
$B_Origin = $_POST['borigin'];
$Scientific_name = $_POST['sname'];


$s = "SELECT * FROM bird_details WHERE  B_Id= '$B_Id'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);
if($num >= 1){
echo "Id  is already taken";
}
else{
	$reg = "INSERT into bird_details(S_Id, B_Id, B_Type, B_Origin, Scientific_Name) values ('$S_Id', '$B_Id' ,'$B_Type', '$B_Origin','$Scientific_name')";
	mysqli_query($conn,$reg);
}
}
echo "do not refresh";



?>
<li ><button onclick="window.location.href='Home.html';"> go back</button></li>
</body>
</html>
