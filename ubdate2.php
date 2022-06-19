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
?>

 <style>
table {
  border-collapse: collapse;
  width: 100%;
  margin-left: auto;
  margin-right: auto;
}

th, td {
  text-align: center;
   font-family:Georgia, Garamond, Serif;color:black;
  padding: 15px;
}

tr:nth-child(even){background-color: 	#ADD8E6}

th{
background-color: 	#00008B;  color: blue;
} 
input[type=text]{
display:block; 
background-color:#ADD8E6;
	box-sizing:border-box;
	margin-bottom:20px;
	padding:4px;
	width:50px;
	height:32px;
	border:none;
	outline:none;
	border-bottom:2px solid blue;
			font-family:sans-serif;
			font-weight:400;
			font-size:;
			transition:0,2s ease;
			
}
.us{
	top:100%;
	left:50%;
	right:10%;
	margin: auto;
	display:block;
	margin-top:10px;
	width:1290px;
	height:200px;
	margin-bottom:50px;
}

 button{
    background-color:blue;
    display:block;
    border:2px solid #366473;
    padding:14px 90px;
    border-radius:20px;
    color:white;
    transition:0.25px;
	margin-left:20%;
		margin-right:20%;

	font size:60;
    
    }

</style>
<?php
 session_start();
 $mm4= $_SESSION["user3"];
 ?>
 <form method="post" action="ubdate5.php">
<table style=" border-spacing: 1rem;border-collapse: collapse; margin-top:10px;">
<?php

           $sqll="SELECT * FROM patient,user WHERE patient.user_id=user.id AND user_id='$mm4'";
 $result=mysqli_query($conn,$sqll);
	  while($row = mysqli_fetch_array($result))
{
?>
<img class="us" src ="i.png" >
<tr>
<th>  الاسم</th>
<th>الحالة الاجتماعية</th>
<th>عدد الاطفال</th>
<th>التدخين</th>
<th>الطول </th>
<th>الوزن </th>
<th>العنوان </th>
<th>العمل </th>
<th>رقم الموبايل </th>
<th>العمر</th>
<th>......</th>
 </tr> 
  <tr>
  <?php
 
	$name_pa=$row['name_pa'];
$social_status=$row['social_status'];
 $numbre_of_children=$row['number_of_children'];
   $smoking=$row['smoking'];
 $length=$row['length'];
 $weight= $row['weight'];
	$adress_pa= $row['address_pa'];
	$job= $row['job'];
	$mobile_pa=$row['mobile_pa'];
	$age=$row['age'];
	?>
  <td><input name="name_paid" type="text" value="<?= $name_pa?>"></td>
<td><input name="social_statusid" type="text" value ="<?=$social_status?>"></td>
<td><input name="number_of_childrenid" type="text" value="<?= $numbre_of_children?>"></td>
<td><input name="smokingid" type="text" value="<?= $smoking?>"></td>
<td><input name="lengthid" type="text" value="<?=$length?>"></td>
<td><input name="weightid" type="text" value="<?= $weight?>"></td>
<td><input name="address_paid" type="text" value="<?= $adress_pa?>"></td>
<td><input name="jobid" type="text" value="<?=$job?>"></td>
<td><input name="mobile_paid" type="text" value="<?= $mobile_pa?>"></td>
<td><input name="ageid" type="text" value="<?= $age?>"></td>
  <?php  }?>
 <td><button type="ubdate"  id="ubdate" name="save">ubdate</button></td>
</tr>
</table>
</form>
</tr>
</body>
</html>