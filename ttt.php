<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
$did= $_POST['did'];
$sno = $_POST['sno'];
$ddate = date("Y-m-d", strtotime($_POST['ddate']));
$edate = date("Y-m-d", strtotime($_POST['edate']));
$bu = $_POST['bu'];
$blood = $_POST['blood'];
$conn = new mysqli('localhost','root','','bbms');
if($conn->connect_error)
{ 
die('Connection Failed : '.$conn->connect_error);
}
else
{
$stmt = $conn->prepare("insert into stocks(donar_id,stock_no,donate_date,exp_date,blood_units,bgroup)
values(?, ?, ?, ?, ?, ?)");
$stmt->bind_param("iissis",$did, $sno, $ddate, $edate, $bu, $blood);
$stmt->execute();
$stmt = $conn->prepare("insert into inventory(stock_no,bgroup,bunits,exp_date)
values(?, ?, ?, ?)");
$stmt->bind_param("isis", $sno, $blood, $bu, $edate);
$stmt->execute();
echo "stock created and added to inventory";
$stmt->close();
$conn->close();
}
}echo "do not refresh go back";
?>
