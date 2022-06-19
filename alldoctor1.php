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
<img class="us" src ="n.jpg">
<html>
<head>
<body style=" background-color:#F0FFF0;"> 

<?php
$sql ="SELECT * FROM doctor ,user WHERE (doctor.user_id=user.id)";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0){
 echo "<table style= border-spacing: 1rem;border-collapse: collapse;>" ;
 echo"<tr>";
echo"<th>  الاسم</th>";
echo" <th>الايميل</th>";
echo"<th>الهاتف</th>";
echo"<th>الاختصاص</th>";
echo"<th>العنوان</th>";
echo"<th>البلد</th>";
echo"<th>كلمة السر</th>";
echo"<th>رقم الهوية</th>";




  echo"</tr>";
while($row= mysqli_fetch_array($result) ){
 echo" <tr>";
   echo "<td>"  .$row['name']. " </td>";
   echo "<td>"  .$row['email']. " </td>";
   echo "<td>"  .$row['telephone']. " </td>";
      echo "<td>"  .$row['specialization']. " </td>";
   echo "<td>"  .$row['address']. " </td>";
      echo "<td>"  .$row['city']. " </td>";
	  				        echo "<td>"  .$row['password']. " </td>";
				        echo "<td>"  .$row['user_id']. " </td>";
				      



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
</html>