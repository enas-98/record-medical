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
	right:80%;
	mar: ;
	display:block;
	margin-bottom:30px;
	width:1400px;
	height:300px;
}
p text-align:center ;font-size:200px; color:blue;
 }
 
</style>
<img class="us" src ="n.jpg">
 <body style=" background-color:#E6E6FA;"> 

<?php

  $o= $_POST['o'];
$sql="SELECT  * FROM doctor WHERE specialization ='$o'";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0){
 echo "<table style= border-spacing: 1rem;border-collapse: collapse;>" ;
 echo"<tr>";
echo"<th>  الاسم</th>";
echo"<th>العنوان</th>";
echo"<th>الهاتف</th>";
echo"<th>الاختصاص</th>";
  echo"</tr>";
while($row= mysqli_fetch_array($result)){
 echo" <tr>";
   echo "<td>"  .$row['name']. " </td>";
   echo "<td>"  .$row['address']. " </td>";
   echo "<td>"  .$row['telephone']. " </td>";
    echo "<td>"  .$row['specialization']. " </td>";

   echo "</tr>";
	}
	echo "</table>";
}


		
 else{echo"<p>....لايوجد طبيب بهذا الاختصاص....</p></h1>";
 }
?>