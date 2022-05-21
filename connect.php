<?php
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'bsm');
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST['name'];
$email = $_POST['email'];
$psw= $_POST['psw'];
$phone = $_POST['phone'];


$s = "SELECT * FROM user WHERE u_name = '$name'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);
echo $num;
if($num >= 1){
echo "User name is already taken";
header("location: as1.php");
}
else{
	$reg = "INSERT into user(u_name, u_email, psw,  phone) values ('$name', '$email' ,'$psw', '$phone')";
	mysqli_query($conn,$reg);
	 header("location: ass.php");
}
}
echo "do not refresh";



?>
