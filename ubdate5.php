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
  width: 70%;
  margin-left: auto;
  margin-right: auto;
}

th, td {
  text-align: center;
   font-family:Georgia, Garamond, Serif;color:black;
  padding: 15px;
}

tr:nth-child(even){background-color: #ADD8E6}

th {
  background-color: #00008B;;
  color: white;
}
</style>
<img class="user" src ="b.jpg"  style="top:50%;
	left:-100%;
	display:block;
	margin-bottom:5px;
	width:400px;
	height:100px;
	margin-left:35%;
	margin-right;35%;
	margin-bottom:50px;
">
<?php
  session_start();
 $mm4= $_SESSION["user3"];
if(isset($_POST['save']))
{

 $name_paid=$_POST["name_paid"];
$social_statusid=$_POST['social_statusid'];
 $numbre_of_childrenid=$_POST['number_of_childrenid'];
   $smokingid=$_POST['smokingid'];
 $lengthid=$_POST['lengthid'];
 $weightid= $_POST['weightid'];
	$adress_paid= $_POST['address_paid'];
	$jobid= $_POST['jobid'];
	$mobile_paid=$_POST['mobile_paid'];
	$ageid=$_POST['ageid'];


$sql=" UPDATE `patient` SET `name_pa`='$name_paid',`social_status`='$social_statusid',`number_of_children`='$number_of_childrenid',`smoking`='$smokingid',`length`='$lengthid',`weight`='$weightid',`address_pa`='$address_paid',`job`='$jobid',`mobile_pa`='$mobile_paid',`age`='$ageid' WHERE user_id='$mm4'"; 
if ($conn->query($sql) === TRUE) { 

$sqll = "SELECT * from patient where user_id='$mm4'";
$result=mysqli_query($conn,$sqll);
if (mysqli_num_rows($result) > 0){
 echo "<table style= border-spacing: 1rem;border-collapse: collapse;>" ;
 echo"<tr>";
  echo"<th>الاسم </th>";
echo"<th>الحالة الاجتماعسة </th>";
 echo"<th>عدد الاطفال </th>";
echo"<th>التدخين </th>";
echo"<th>الطول </th>";
echo"<th>الوزن </th>";
echo"<th>العنوان </th>";
echo"<th>العمل </th>";
echo"<th>رقم الموبايل </th>";
echo"<th> العمر </th>";

while($row= mysqli_fetch_array($result) ){
 echo" <tr>";
 
	        echo "<td>"  .$row['name_pa']. " </td>";
			echo "<td>"  .$row['social_status']. " </td>";
	        echo "<td>"  .$row['number_of_children']. " </td>";
	        echo "<td>"  .$row['smoking']. " </td>";
			echo "<td>"  .$row['length']. " </td>";
	        echo "<td>"  .$row['weight']. " </td>";
	        echo "<td>"  .$row['address_pa']. " </td>";
			echo "<td>"  .$row['job']. " </td>";
	        echo "<td>"  .$row['mobile_pa']. " </td>";
				        echo "<td>"  .$row['age']. " </td>";

   echo "</tr>";

	echo "</table>";
}
}
}
}else {
echo"lll";}
?>

