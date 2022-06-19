<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
		body{background-color:  #c6ecd9}
		h1{font-size: 40px ;color:#c6ecd9;margin-left: 8%}
		#o1{width: 300px;height: 40px; margin-top: 4%;margin-left: 27%;border-radius: 10px;border-style: solid;border-color:white }
		#o2{width: 200px;height: 50px;margin-top: 4%;margin-left: 34%;border-radius: 10px;border-style: solid;border-color:#ff9900;background-color: #ff9900;color: white;font-size: 30px;font-family:"Arial" ;}
		#o2:hover{background-color:#8600b3;color: #194d33;border-color: #8600b3;color: white}
		
   


	</style>
	<?php 

	$conection=new mysqli('localhost','root','','record');
	 session_start();
	
	 $mm4= $_SESSION["user3"];

  if(isset($_POST['aa1']))
  {
  $dd1=$_POST['aa1'];

  $sql5="SELECT * FROM  patient WHERE user_id='$mm4'";
    $res5=mysqli_query($conection,$sql5);
    while ($row5=mysqli_fetch_array($res5)) {
       $good=$row5['id_pa'];
   }

  $qurey1="DELETE  FROM patient_tests WHERE pa_id='$good'";
	$res1=mysqli_query($conection,$qurey1);

 $qurey2="DELETE  FROM patient_surgeries WHERE pa_id='$good'";
 $res2=mysqli_query($conection,$qurey2);

 $qurey3="DELETE  FROM  patient_diseases WHERE pa_id='$good'";
 $res3=mysqli_query($conection,$qurey3);

 $qurey4="DELETE  FROM  patient WHERE id_pa='$good'";
 $res4=mysqli_query($conection,$qurey4);

 $qurey6="DELETE  FROM  user WHERE id='$dd1'";
 $res6=mysqli_query($conection,$qurey6);

  header("location:login.php");

	
	}

	?>
</head>
<body style="background-color:#f2ccff ">

	<div style="width: 700px;height: 500px;border-style: solid;border-color: black;background-image:url(cod29.jpg);background-size: 700px 500px;margin-left: 27%;margin-top: 6%" >


	<form action=""  method="post">
		<h1>do you sure to delete  your account </h1>
		<input type="input" name="aa1" id="o1" value="<?php echo $mm4;  ?>" readonly="readonly">
		<br><br>
        <input type="submit" name="aa2" id="o2" value="Delete">

	</form>

</body>
</html>