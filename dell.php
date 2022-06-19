<!DOCTYPE html>
<html>
<head>
	<title></title>


	<?php

$conection=new mysqli('localhost','root','','record');


 if (isset($_POST['aa']) ){


	$mm=$_POST['aa'];
	$qurey="DELETE FROM patient_tests WHERE pa_id='$mm'";
	$res=mysqli_query($conection,$qurey);
	if($res) {

		echo "record is deleted";
	}
	
		
	}
?>
</head>
<body>

	<form  action=""  method="post">
	<input type="input" name="aa">	
   <input type="submit" name="gg"  value="delete">

	</form>

</body>
</html>