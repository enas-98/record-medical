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

session_start();
$mm4=$_SESSION["user3"];
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
	  $sqll="
SELECT * FROM  patient WHERE user_id=$mm4";
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


  echo"</tr>";
while($row= mysqli_fetch_array($result) ){
 echo" <tr>";
   echo "<td>"  .$row['name_pa']. " </td>";
   echo "<td>"  .$row['gender']. " </td>";
   echo "<td>"  .$row['social_status']. " </td>";
   echo "<td>"  .$row['number_of_children']. " </td>";
   echo "<td>"  .$row['blood_type']. " </td>";
   echo "<td>"  .$row['smoking']. " </td>";
   echo "<td>"  .$row['length']. " </td>";
   echo "<td>"  .$row['weight']. " </td>";
	 echo "<td>"  .$row['address_pa']. " </td>";
	 echo "<td>"  .$row['job']. " </td>";
	 echo "<td>"  .$row['mobile_pa']. " </td>";
	       

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
 
  <img src="nn.png" style="width:200px;
	height:100px;  margin-left:43%; margin-right:42%;  margin-top:5%;"><p>التحاليل</p></button>
 <?php
//البحث عنريض عن طريق  id
$search = $_POST["search"];
$sql="SELECT * FROM patient ,medical_tests,patient_tests WHERE patient.id_pa=patient_tests.pa_id AND medical_tests.id_mt=patient_tests.mt_id AND patient.id_pa='$mm4'";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) >0){
 echo "<table style= border-spacing: 1rem;border-collapse: collapse;>" ;
 echo"<tr>";
  echo"<th>  اسم التحليل</th>";
   echo" <th>تاريخ التحليل</th>";
	echo"<th>  نتيجة التحليل</th>";
  echo"</tr>";
	while($row= mysqli_fetch_array($result)>0 ){
 echo" <tr>";
   echo "<td>"  .$row['name_mt']. " </td>";
   echo "<td>"  .$row['test_date']. " </td>";
   echo "<td>"  .$row['result']. " </td>";
   echo "</tr>";
	}
	echo "</table>";
}
else{ 
	 echo "<table style= border-spacing: 1rem;border-collapse: collapse;>" ;
 echo"<tr>";
  echo"<th>  اسم التحليل</th>";
   echo" <th>تاريخ التحليل</th>";
	echo"<th>  نتيجة التحليل</th>";
  echo"</tr>";
 }
 echo" <tr>";
   echo "<td> </td>";
   echo "<td> </td>";
   echo "<td></td>";
   echo "</tr>";
	
		echo "</table>";

 ?> 
 </div>
 
 
 <img src="sp.jpg" style="width:200px;
	height:100px; margin-left:43%; margin-right:42%; margin-top:5%;"><p>العمليات</p></button>
 <?php
//البحث عنريض عن طريق  id
$search = $_POST["search"];
$sqlll="SELECT * FROM patient,patient_surgeries,surgeries WHERE patient_surgeries.pa_id=patient.id_pa AND patient.user_id=$mm4
";
$result=mysqli_query($conn,$sqlll);
if (mysqli_num_rows($result) > 0){
 echo "<table style= border-spacing: 1rem;border-collapse: collapse;>" ;
 echo"<tr>";
  echo"<th> الاسم  </th>";
  echo"<th> التفاصيل  </th>";
  echo"<th> التاريخ  </th>";
  
echo"</tr>";

	while($row= mysqli_fetch_array($result) ){
 echo" <tr>";
echo "<td>"  .$row['surgery_ type']."</td>";
echo "<td>"  .$row['details']."</td>";
echo "<td>"  .$row['date_surgery']."</td>";

   echo "</tr>";
	}
	echo "</table>";
}else{ 
	 echo "</table>";
echo "<table style= border-spacing: 1rem;border-collapse: collapse;>" ;
 echo"<tr>";
  echo"<th> اسم العملية</th>";
   echo" <th>تاريخ العملية</th>";
  echo"<th> التفاصيل  </th>";
    

  echo"</tr>";

 echo"<tr>";
   echo "<td>- </td>";
   echo "<td>-</td>";
  echo "<td>-</td>";

   echo "</tr>";
	echo "</table>";;
 }
 ?>
 </div>

 
 <img src="u.jpg" style="width:200px;
	height:100px; margin-left:43%; margin-right:42%;  margin-top:5%;"><p>الامراض</p></button>

 <?php
//البحث عنريض عن طريق  id
$search = $_POST["search"];
$sql5="SELECT diseases.name_es,patient_diseases.es_id,patient_diseases.type,patient_diseases.drug,patient_diseases.diseases_date FROM patient,patient_diseases,diseases WHERE patient_diseases.pa_id=patient.id_pa AND patient.user_id=$mm4";
$result=mysqli_query($conn,$sql5);
if (mysqli_num_rows($result) > 0){
 echo "<table style= border-spacing: 1rem;border-collapse: collapse;>" ;
 echo"<tr>";
  echo"<th> اسم المرض</th>";
   echo" <th>نوع المرض</th>";
      echo" <th>   الدواء الموصوف</th>";
	   echo" <th> التاريخ</th>";

  echo"</tr>";
	while($row= mysqli_fetch_array($result) ){
 echo" <tr>";
   echo "<td>"  .$row['name_es']. " </td>";
   echo "<td>"  .$row['type']. " </td>";
      echo "<td>"  .$row['drug']. " </td>";
	        echo "<td>"  .$row['diseases_date']. " </td>";


   echo "</tr>";
	}
	echo "</table>";
}else{ 
echo "<table style= border-spacing: 1rem;border-collapse: collapse;>" ;
 echo"<tr>";
  echo"<th> اسم المرض</th>";
   echo" <th>نوع المرض</th>";
      echo" <th>   الدواء الموصوف</th>";
	   echo" <th> التاريخ</th>";

  echo"</tr>";

 echo"<tr>";
   echo "<td>- </td>";
   echo "<td>-</td>";
      echo "<td>-</td>";
	        echo "<td>-</td>";
   echo "</tr>";
	echo "</table>";;
}
  ?>	</div>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script><?php
  	$conn->close();

?>