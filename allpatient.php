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
  
}//بحث عن طبيب عن طريق الاسم 
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

tr:nth-child(even){background-color: #F0FFF0}

th {
  background-color: #4169E1;
  color: white;
}
p {
  text-align: center;
  background-color: ;
  font-size:30px;
}
.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
.us{
	top:80%;
	left:50%;
	right:10%;
	margin: ;
	display:block;
	margin-bottom:30px;
	width:1350px;
	height:250px;
}
</style>
<body style=" background-color:#F0FFF0;"> 

<img class="us" src ="z.jpg">
<?php
$sqll="
SELECT * FROM patient,user WHERE patient.user_id=user.id";
$result=mysqli_query($conn,$sqll);
 if (mysqli_num_rows($result) > 0){
 echo "<table style= border-spacing: 1rem;border-collapse: collapse; margin-top:10px;>" ;
 echo"<tr>";
echo"<th>  الاسم</th>";
echo" <th> الجنس</th>";
echo"<th>الحالة الاجتماعية</th>";
echo"<th>عدد الاطفال</th>";
echo"<th>زمرة الدم</th>";
echo"<th>التدخين</th>";
echo"<th>الطول </th>";
echo"<th>الوزن </th>";
echo"<th>العنوان </th>";
echo"<th>العمل </th>";
echo"<th>رقم الموبايل </th>";
echo"<th>كلمة السر </th>";
echo"<th>ايميل </th>";
  echo"</tr>";
while($row= mysqli_fetch_array($result) ){
 echo" <tr>";
   echo "<td>"  .$row['name_pa']. " </td>";
   echo "<td>"  .$row['gender']. " </td>";
   echo "<td>"  .$row['social_status']. " </td>";
      echo "<td>".$row['number_of_children']. " </td>";
   echo "<td>"  .$row['blood_type']. " </td>";
   echo "<td>"  .$row['smoking']. " </td>";
   echo "<td>"  .$row['length']. " </td>";
      echo "<td>"  .$row['weight']. " </td>";
	        echo "<td>"  .$row['address_pa']. " </td>";
		 echo "<td>"  .$row['job']. " </td>";
	        echo "<td>"  .$row['mobile_pa']. " </td>";
		   echo "<td>"  .$row['password']. " </td>";
	        echo "<td>"  .$row['email']. " </td>";

   echo "</tr>";
}
	echo "</table>";
}
 else{ 
	 echo" <tr>";
   echo "<td></td>";
   echo "<td> </td>";
   echo "<td> </td>";
      echo "<td> </td>";
   echo "<td></td>";
      echo "<td> </td>";
	        echo "<td> </td>";
				        echo "<td> </td>";
   echo "</tr>";
	}
	echo "</table>";


  	$conn->close();

?>
</head>
</body>
<html>