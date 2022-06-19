<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "record";

// Create connection

$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection

$specialization= $_POST['specialization'];
if (empty($specialization)) {
		
	$message = "الحقل فارغ الرجاء ادخال اسم الطبيب ";
echo "<script type='text/javascript'>alert('$message');</script>";
	  }
else{
$sql = "DELETE FROM doctor WHERE (user_id='$specialization' )";
if ($conn->query($sql) === TRUE) {
  
	$message = "تم الحذف بنجاح ";
echo "<script type='text/javascript'>alert('$message');</script>";
} else {
echo "Error deleting record:";
}
$sqll="DELETE FROM  user WHERE (id= '$specialization')";
if ($conn->query($sqll) === TRUE) {
	$message = "تم الحذف بنجاح ";
echo "<script type='text/javascript'>alert('$message');</script>";
} else {
echo "Error deleting record: ";
} 
}
 $conn->error;
?>
</html>