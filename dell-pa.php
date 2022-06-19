<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php 

	$conection=new mysqli('localhost','root','','record');
   if (isset($_POST['aa']) ){
   $mm=$_POST['aa'];

	$qurey1="DELETE FROM patient_tests WHERE pa_id='$mm'";
	$res1=mysqli_query($conection,$qurey1);

	$qurey2="DELETE FROM patient_diseases WHERE pa_id='$mm'";
	$res2=mysqli_query($conection,$qurey2);
	
	$qurey3="DELETE FROM patient_surgeries WHERE pa_id='$mm'";
	$res3=mysqli_query($conection,$qurey3);

		
	}

	?>
</head>
<body>
	<form action=""  method="post">
		<input type="input" name="aa">	
        <input type="submit" name="gg"  value="delete">

	</form>

</body>
</html>