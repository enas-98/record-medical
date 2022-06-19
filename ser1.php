 <?php

$conection=new mysqli('localhost','root','','record');


  session_start();
 $mm4= $_SESSION["user3"];
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
  padding: 10px;
}

tr:nth-child(even){background-color: 	#ADD8E6}

th {
background-color: 	#00008B;  color: white;
}
p {
  text-align: center;
  background-color: ;
  font-size:30px;
}
.accordion {
  background-color: white;
  color: black;
  padding: 50px;
  width: 100%;
  border: 9px;
  text-align: center;
  outline: none;
  font-size: 1px;
  transition: 0.8s;
}

.active, .accordion:hover {
  background-color: white; 
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
	margin-bottom:px;
	width:1340px;
	height:350px;
}
</style>
 <?php
 ?>
 <body style=" background-color:#F0FFF0;"> 
<img class="us" src ="fg.jpg">
  <img src="dr.jpg" style="width:200px; margin-left:43%; margin-right:42%; margin-top:5%;
	height:100px;"><p> الملف الشخصي </p></button>
<?php
 $search = $_POST["search"];
 if (empty($search)) {
		
	$message = " الرجاء ادخال اسم الطبيب ";
echo "<script type='text/javascript'>alert('$message');</script>";
	  }
	 
 $sql1="SELECT * FROM  patient WHERE user_id='$search'";
   
 $result=mysqli_query($conection,$sql1);
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
echo"<th>الايميل </th>";


  echo"</tr>";
while($row= mysqli_fetch_array($result) ){
 echo" <tr>";
   echo "<td>"  .$row['name_pa']. " </td>";
   echo "<td>"  .$row['gender']. " </td>";
   echo "<td>"  .$row['social_status']. " </td>";
      echo "<td>"  .$row['numbre_of_children']. " </td>";
   echo "<td>"  .$row['blood_type']. " </td>";
   echo "<td>"  .$row['smoking']. " </td>";
   echo "<td>"  .$row['length']. " </td>";
      echo "<td>"  .$row['weight']. " </td>";
	        echo "<td>"  .$row['adress_pa']. " </td>";
				        echo "<td>"  .$row['job']. " </td>";
	        echo "<td>"  .$row['mobile_pa']. " </td>";
	        echo "<td>"  .$row['email_pa']. " </td>";
				       

   echo "</tr>";
	
	echo "</table>";
}
}

else{
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
echo"<th>الايميل </th>";
  echo"</tr>";

 echo" <tr>";
   echo "<td> </td>";
   echo "<td> </td>";
   echo "<td> </td>";
      echo "<td> </td>";
   echo "<td> </td>";
   echo "<td></td>";
   echo "<td></td>";
      echo "<td> </td>";
	        echo "<td> </td>";
				        echo "<td> </td>";
	        echo "<td></td>";
	        echo "<td> </td>";
   echo "</tr>";
	
	echo "</table>";
}
 ?></div>
 
 