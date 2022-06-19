<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "record";

// Create connection

$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
  echo".....";
}
 session_start();
 $mm4= $_SESSION["user3"];
$sql = "DELETE patient_tests 
FROM patient_tests
INNER JOIN patient ON (patient_tests.pa_id=patient.id_pa)
WHERE (patient.user_id = '$mm4' )";
if ($conn->query($sql) === TRUE) {
  
	$message = "Record deleted successfully";
echo "<script type='text/javascript'>alert('$message');</script>";
}
 $sqll="DELETE patient_surgeries 
FROM patient_surgeries
INNER JOIN patient ON (patient_surgeries.pa_id=patient.id_pa)
WHERE (patient.user_id = '$mm4')";
if ($conn->query($sqll) === TRUE) {
  echo "";
} else {
echo "Error deleting record: ";
} 
$sqlll="DELETE patient_diseases
FROM patient_diseases
INNER JOIN patient ON (patient_diseases.pa_id=patient.id_pa)
WHERE (patient.user_id = '$mm4' )";
if ($conn->query($sqlll) === TRUE) {
  echo "";
} else {
echo "Error deleting record: " ;
} 

$sqllll="DELETE FROM patient
WHERE (user_id = '$mm4')";
if ($conn->query($sqllll) === TRUE) {
  echo "Record deleted successfully";
} else {
echo "Error deleting record:";
}
$sqllll3="DELETE FROM user WHERE (id= '$mm4')";
if ($conn->query($sqllll3) === TRUE) {
 header("location:login.php");
 
 $conn->error;
}
 ?>

