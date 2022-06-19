<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
		body{background-color:  #c6ecd9}
		h1{font-size: 40px ;color:#c6ecd9;margin-left: 8%}
		#o1{width: 300px;height: 40px; margin-top: 4%;margin-left: 27%;border-radius: 10px;border-style: solid;border-color:white;color: white;font-size: 20px ;background-color: black }
		#o2{width: 200px;height: 50px;margin-top: 4%;margin-left: 34%;border-radius: 10px;border-style: solid;border-color:#194d33;background-color: #2d8659;color: white;font-size: 30px;font-family:"Arial" ;}
		#o2:hover{background-color:#cca300;color: #194d33}
		
   


	</style>
	<?php 

	$conection=new mysqli('localhost','root','','record');
	 session_start();
	
	 $mm4=$_SESSION["user3"];

  if(isset($_POST['aa1']))
  {
  $dd1=$_POST['aa1'];

	$qurey1="DELETE FROM doctor WHERE user_id='$dd1'";
	$res1=mysqli_query($conection,$qurey1);

	$qurey2="DELETE FROM user WHERE id='$dd1'";
	$res2=mysqli_query($conection,$qurey2);

    header("location:login.php");
		
	}

	?>
</head>
<body>

	<div style="width: 700px;height: 500px;border-style: solid;border-color: black;background-image:url(cod24.jpg);background-size: 700px 500px;margin-left: 27%;margin-top: 6%" >


	<form action=""  method="post">
		<h1>do you sure to delete  your account </h1>
		<input type="input" name="aa1" id="o1" value="<?php echo $mm4;  ?>" readonly="readonly">
		<br><br>
        <input type="submit" name="aa2" id="o2" value="Delete">

	</form>

</body>
</html>