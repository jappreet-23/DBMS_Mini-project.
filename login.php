<?php
   $db = mysqli_connect('localhost','root','');
   mysqli_select_db($db,'bsm');
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['uname']);
      $mypassword = mysqli_real_escape_string($db,$_POST['psw']); 
      
      $sql = "SELECT u_id FROM user WHERE u_name = '$myusername' and psw = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result);
      
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         header("location: home page.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo $error;
      }
   }
?>