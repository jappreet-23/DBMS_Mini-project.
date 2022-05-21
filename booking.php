<!DOCTYPE html>
<html>
<body>
<?php
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'bsm');
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
$No_of_Adults = $_POST['noa'];
$No_of_Children = $_POST['noc'];
$No_of_Cameras= $_POST['noca'];
$No_of_Ecars = $_POST['noe'];



	$reg = "INSERT into booking(No_of_Adults, No_of_Children, No_of_Cameras, No_of_Ecars) values ('$No_of_Adults', '$No_of_Children' ,'$No_of_Cameras', '$No_of_Ecars')";

	mysqli_query($conn,$reg);

$reg1 = "INSERT into billing(Cost_for_Adults, Cost_for_Children, Cost_for_Cameras, Cost_for_Ecars) values ('$No_of_Adults', '$No_of_Children' ,'$No_of_Cameras', '$No_of_Ecars')";

	mysqli_query($conn,$reg1);



 		 $ss = "SELECT * from billing ORDER BY R_Id DESC LIMIT 1 ";
            $res =  mysqli_query($conn,$ss);
            $row1 = mysqli_fetch_array($res);
           
            
            $s2 = $row1['R_Id'];
            $ak = "CALL upa('$s2')";
            mysqli_query($conn,$ak);
             
            $ak1 = "CALL upc('$s2')";
            mysqli_query($conn,$ak1);


           $ak2 = "CALL upca('$s2')";
           mysqli_query($conn,$ak2);


            $ak3 = "CALL upec('$s2')";
            mysqli_query($conn,$ak3);

 
           $ak4 = "CALL bill('$s2')";

           if(mysqli_query($conn,$ak4))
            {
                 echo "<font size = 8px >YOUR BILL </font>";
            }



}

?>





<?php
echo "<table style='border: solid 1px black;'>";
 echo "<tr><th>Cost_for_Adults</th><th>Cost_for_Children</th><th>Cost_for_Cameras</th><th>Cost_for_Ecars</th><th>R_Id</th><th>Amount</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bsm";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("SELECT * FROM billing where R_Id = $s2");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>

<li ><button onclick="window.location.href='home page.php';"> go back</button></li>

</body>
</html>