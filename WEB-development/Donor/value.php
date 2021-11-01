<?php

$servername='localhost';
$username='root';
$password='';
$dbname = "dbdata";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:');
}


$type = $_GET['type'];
$Storage =$_GET['storage'];
$item =$_GET['item'];
$Period =$_GET['period'];
$Details=$_GET['details'];
$Quantity=$_GET['quantity'];

	 $sql = "INSERT INTO `data` (`type`, `storage`, `item`, `period`, `details`, `quantity`) VALUES ('$type', '$Storage', '$item', '$Period', '$Details', '$Quantity')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);

?>



