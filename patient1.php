
<!DOCTYPE html>
<html>

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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {margin:0;}
.icon-bar {
  width: 100%;
  height:40%;
  background-color:	#B0E0E6;
  overflow: auto;
}

.icon-bar a {
  float: left;
  width: 40%;
  text-align: center;
  padding: 60px 60px;
  transition: all 0.3s ease;
  color: white;
  font-size: 40px;
    background-color:#B0E0E6;
	margin

}

.icon-bar a:hover {
  background-color: pink;
}
.icon-bar2 {
  float: left;
  width: 50%;
  text-align: center;
  padding: 12px 0;
  background-color:pink
  transition: all 0.3s ease;
  color: white;
  font-size: 36px;
}

.icon-bar a:hover {
  background-color: pink;
}

.active {
  background-color:white;
}
video {
  width: 170%;
  height: auto;
  margin-left:20%;
  margin-right:30%;
}
a:link, a:visited {
  color: white;
width:265px;
height:50px;
    padding:20px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
 top:100%;
 

a:hover, a:active {
  background-color: pink;
}
.white_content{
background-color: blue;
  color: blue;
}
.white_content {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}
.form-container input[type=text]:focus
  background-color: blue;
  outline: none;
}
/* The popup form - hidden by default */
	.form-popup {
  background: url(bb.png);
  position: absolute;
  bottom: 0;
  right: 15px;
  border: px solid white ;
  z-index: 9;
  background:rgba(0,0,0,0.10);
  box-shadow: 0px 0px 5px 10px #FFE4E1;
  display: none;
  opacity:0,1 ;
  top: 25%;
  left: 33%;
  width: 25%;
  height: 70%;
  padding: 30px;
  background-color:#800080; 		 
  z-index: 1002;
  overflow: auto;
    }
 .btn {

  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
  margin:1px;
  font-size:20px;
  display:block;
	    border:0px solid #191970;

    padding:14px 110px;
    border-radius:20px;
    transition:0.25px;
		background-color:#FF1493;
}
table.center {
  width:200%;
  
}
table, th, td {
  border: 0px solid ;
  border-collapse: collapse
  margin-left:;
  margin-right:50px;
  
}
th, td {
  padding: 10px;
  text-align: right;
}

p {
  text-align: center;
  ;
  font-size:30px;
  width:400px;
}
.header {
  background-color: #33b5e5;
  color: #ffffff;
  
  padding: 5px;
}




</style>
   
<body >
  <?php session_start();
   $mm4= $_SESSION["user3"];
        $mm2= $_SESSION["user1"];

  ?>
<div class="icon-bar">
       <a href=""><i class="" style="font-size:35px;color :#008080;background-color: ;  margin_left:20%;width:50px;height: ;"> doctors </i></br></a>

       <a href=""><i class="" style="font-size:30px;color :#008080; width:px;height:;"> <?php echo $mm2 ; ?></i></br></a>

 <a href="javascript:void(0)" onclick="document.getElementById('myForm9').style.display='block';document.getElementById('fade').style.display='block'
" class=""  style="font-size:35px;color :#008080;background-color: ;  margin_left:20%;width:50px;height: ; margin-top:1%;" > الأعدادات </i></a> 

  <div class="search-container" style="  float: right;
">
    <form method="post" action="toto.php">
	          <select class="form-control required" name="o" required style="  margin-top: 50px;
  font-size: 17px;
  border: none; 
   float: none;
    display: block;
    text-align: left;
    width: 70%;
	height:200%;
    margin: 15px;
    padding: 20px 20px;
	 margin-right:100px">
    
                                  <option>البحث عن طبيب حسب الاختصاص</option>
                                  <option>عصبية</option>
                                  <option>رئوية</option>
                                  <option>اطفال</option>
                                  <option>نسائية </option>
                                  <option>داخلية</option>
                                  <option>دموية</option>
  </select>
      <button type="submit" style=" float: none;
    float: right;
  padding: 8px 10px;
  margin-top: -60px;
  margin-right: 50px;
 
  font-size: 17px;
  border: none;
  cursor: pointer;
    background: #B0E0E6;
"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
 
 
</div>  <img class="user" src ="welcome.jpg"  style="display:block;
	margin-bottom:px;
	width:1400px;
	height:400px;">
<div class="icon-bar2">
<table  align="center"
 style=" text-align:center;background-color:white;width:70%; height:px; right:100px; margin-left:60%; margin-right:60%; border: 5px solid  #B0E0E6; ;
;
">
  <tr style="background-color:">
    <th>
  <a href="javascript:void(0)" onclick="document.getElementById('myForm').style.display='block';document.getElementById('fade').style.display='block'" style=  "font-size:30px;color:black ; border:2px solid pink;background-color:pink;position:center; 
    display:block;
	    border:0px solid #191970;
    padding:14px 70px;
    border-radius:20px;
    color:;
    transition:0.25px;
		background-color:#B0E0E6;
		right:80%;
	"> البحث عن طبيب حسب الاسم</a></th>
  <th>  <img class="user" src ="y.png"  style="display:block;margin-bottom:px;
	width:100px;
	height:200px;"></th>
	
  </p></tr>
  <tr>
  <th> <a href="javascript:void(0)" onclick="document.getElementById('myForm3').style.display='block';document.getElementById('fade').style.display='block'" style=  "font-size:30px;color:black ; border:2px solid pink;background-color:pink;position:center; 
    display:block;
	    border:0px solid #191970;
    padding:14px 70px;
    border-radius:20px;
    color:;
    transition:0.25px;
		background-color:#B0E0E6;
	"> عرض السجل الطبي </a></th>
 <th> <img class="user" src ="yy.png"  style="display:block;margin-bottom:px;
	width:100px;
	height:200px;"></th>
  </tr>
    </table>
	<table>
	<tr>

  </div>
	 <div id="myForm9" class="form-popup">
  <img class="user" src ="d.jpg" style="margin:;
	display:block;
	margin-left:20%;
		margin-right:20%;

	width:200px;
	height:100px;">
	 <a href="javascript:void(0)" onclick="document.getElementById('myForm2').style.display='block';document.getElementById('fade').style.display='block'
"style="font-size:35px;color:white;background-color:white  width:200;height:200;
 ">حذف الحساب</i></a> 
 <a href="javascript:void(0)" onclick="document.getElementById('m').style.display='block';document.getElementById('fade').style.display='block'
"style="font-size:35px;color:white;background-color: white  width:200;height:200;
 ">تعديل الحساب الشخصي </i></a> 
       <a href="http://localhost/logout.php"><i class="" style="font-size:35px;color :white;background-color: ; width:200;height:;"> تسجيل الخروج</i></br></a>

   <a href=""><i class="" style="font-size:35px;color :white;background-color: ; width:200;height:;"> الغاء</i></br></a>

  </div> 
	 <div id="myForm" class="form-popup">
  <img class="user" src ="o.jpg" style="margin:0 auto;
	display:block;
	margin-bottom:1px;
	width:200px;
	height:100px;">
  <p> <h4 style="color:white;"><center>أدخل اسم الطبيب <center></h4>
  		    <form  name ="form" method="post"  class="form-container" action="alldoctor.php">
			<input type="text" name="specialization" style=" width: 90%;
  padding: 12px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
"><br>

	<input type ="submit" value="البحث" class="btn"></input>
	
</form>
    <a href=""><i class="" style="  background-color: red ;  text-align: center; 
  color: white;
  border: none;
  cursor: pointer;
  width: 105;
  height:90%;
  margin-bottom:5px;
  opacity: 0.8;
  margin:px;
  font-size:30px;
  display:block;
	    border:0px solid #191970;
		    border-radius:20px;
    transition:0.25px;
		background-color:#FF1493;"> الغاء</i></br></a>

  </div>
  
  
  <div id="myForm2" class="form-popup">
  <img class="user" src ="enass.png" style="margin:0 auto;
	display:block;
	margin-bottom:1px;
	width:150px;
	height:75px;">

   <center>هل انت متأكد من حذف هذا الحساب <center>
  		    <form  name ="form" method="post"  class="form-container" 
          action="deletepatient.php">
			<br>
	<input type ="submit" value="احذف" class="btn"></input>
</form>  <a href=""><i class="" style="  background-color: red ;  text-align: center; 
  color: white;
  border: none;
  cursor: pointer;
  width: 105;
  height:90%;
  margin-bottom:5px;
  opacity: 0.8;
  margin:px;
  font-size:30px;
  display:block;
	    border:0px solid #191970;
		    border-radius:20px;
    transition:0.25px;
		background-color:#FF1493;"> الغاء</i></br></a>
  </div>

  <div id="myForm3" class="form-popup">
  <img class="user" src ="ooo.png" style="margin:0 auto;
	display:block;
	margin-bottom:1px;
	width:150px;
	height:100px;">

   <h3><center>أدخل رقم الهوية <center></h3>
  		    <form  name ="form" method="post"  class="form-container" action="search1.php">
			<input type="text" name="search" value="<?php echo $mm4; ?>" style=" width: 90%;
  padding: 12px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
"><br>


	<input type ="submit" value="أبحث" class="btn"></input>
</form>
   <a href=""><i class="" style="  background-color: red ;  text-align: center; 
  color: white;
  border: none;
  cursor: pointer;
  width: 105;
  height:90%;
  margin-bottom:5px;
  opacity: 0.8;
  margin:px;
  font-size:30px;
  display:block;
	    border:0px solid #191970;
		    border-radius:20px;
    transition:0.25px;
		background-color:#FF1493;"> الغاء</i></br></a>
  </div>
  

  <div id="m" class="form-popup">
  <img class="user" src ="ooo.png" style="margin:0 auto;
	display:block;
	margin-bottom:1px;
	width:100px;
	height:100px;">

   <h3><center>أدخل رقم الهوية <center></h3>
  		    <form  name ="form" method="post"  class="form-container" 
          action="ubdate2.php">
			<input type="text" name="search" style=" width: 90%;
  padding: 12px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
"><br>
	<input type ="submit" value="تعديل" class="btn"></input>
    <a href=""><i class="" style="  background-color: red ;  text-align: center; 
  color: white;
  border: none;
  cursor: pointer;
  width: 105;
  height:90%;
  margin-bottom:5px;
  opacity: 0.8;
  margin:px;
  font-size:30px;
  display:block;
	    border:0px solid #191970;
		    border-radius:20px;
    transition:0.25px;
		background-color:#FF1493;"> الغاء</i></br></a>

  </div>
</form> 
</div>
 container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="f.jpg" style="width:1000px ;height:500px; margin-left:30%;margin-right:30%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="hhh.png" style="width:1000px ;height:500px; margin-left:30%;margin-right:30%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="enas.jpg" style="width:1000px ;height:500px; margin-left:30%;margin-right:30%">
    <div class="text">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>
<div class="col-6 col-s-9">
    <video width="2000" controls>
      <source src="mm.mp4" type="video/mp4">
      <source src="mm.ogg" type="video/ogg">
    </video>

<div class="container">
  <div class="content">
    <h1>Heading</h1>
    <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
  </div>
</div>
<table  align="center"
 style=" text-align:center;background-color:white;width:200%; height:px; right:100px; margin-left:-0,5%; margin-right:50%; margin-top:-70%;border: 5px solid  #B0E0E6; ;
;
">
  <tr style="background-color:">
    <th>  <img class="user" src ="enasss.jpg"  style="display:block;margin-bottom:px;
	width:500px;
	height:600px;"></th>
    <th style="width:50%;"> 
<p style="color:black; margin-right:60%";>
   <h1 style="color:black;"> السمنة</h1>
   <h2 style="color:black;"> علاج السمنة </h2>
    <h5 style="color:black;">
	لا تقتصر مشاكل الوزن على السمنة فقط ، بل على الوزن الزائد الذي يجعل شكل الشخص غير صحي وغير طبيعي. السمنة هي زيادة في كتلة الجسم وزيادة في نسبة الدهون فوق الحد الطبيعي المعقول ، والنحافة هي انخفاض في كتلة الجسم أقل من الحد الطبيعي ، مما يسبب العديد من المشاكل الصحية.



بدانة
الأسباب
تناول كميات كبيرة من الطعام دون حرقها ، بالإضافة إلى نوع الطعام الذي يحتوي على الكثير من الدهون والسكريات.
العوامل الوراثية ، مثل وجود هرمون اللبتين.
عدم ممارسة الرياضة.


علاج او معاملة
يمكنك اتباع بعض الخطوات التي تساعد على إنقاص الوزن وعلاج السمنة ، بما في ذلك:

عدم تناول الكثير واختيار الأطعمة قليلة الدسم أو قليلة الدسم ، مثل الخضار والفواكه.
توقف عن تناول المشروبات الغازية لأنها تحتوي على سعرات حرارية عالية تؤدي إلى السمنة ، واستبدلها بشرب كميات كبيرة من الماء.
عدم اختيار أحجام كبيرة ، لذلك اختر دائمًا أطباق صغيرة وكميات صغيرة من كل شيء حتى تعتاد على ذلك.
النوم السليم والكافي يقلل من اضطراب الهرمونات المسؤولة عن الشعور بالجوع والإشباع.
الانتباه إلى وجبة الإفطار من أجل تزويد الجسم بالطاقة اللازمة لأداء المهام اليومية ، وجعل العشاء في وقت مبكر بحيث يكون هناك وقت لهضم الطعام قبل النوم.
عدم تناول وجبة كبيرة في وقت واحد ، لذلك يتم توزيع ما يجب تناوله على وجبات صغيرة طوال اليوم حتى لا يخزن الجسم الدهون.
لا ينبغي تفويت وجبات الطعام ، لأن ذلك سيجعلهم يشعرون بالجوع الشديد ويجعلهم يأكلون أكثر في وقت واحد.
اكتب وتلتزم بالأطعمة التي تحتوي على سعرات حرارية أقل على الكمبيوتر المحمول.
</h5>
</p>
	</th>

	
  </p></tr>

</body>
</html>
  </div>
</body>
</html>