<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {margin:0;}

.icon-bar {
  width: 100%;
  background-color:	#191970;
  overflow: auto;
}

.icon-bar a {
  float: left;
  width: 30%;
  text-align: center;
  padding: 60px 60px;
  transition: all 0.3s ease;
  color: white;
  font-size: 40px;
  
	margin

}

.icon-bar a:hover {
  background-color:blue;
}

.active {
  background-color: ;
}

a:link, a:visited {
  background-color:;
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
  border: 5px solid ;
  z-index: 9;
  background:rgba(0,0,0,0.10);
  box-shadow: 0px 0px 50px 10px #000;
  display: none;
  opacity:0,1 ;
  top: 25%;
  left: 33%;
  width: 25%;
  height: 70%;
  padding: 30px;
  background-color:	#4B0082; 		 
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
table {
  width:20%;
}
table, th, td {
  border: 0px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 20px;
  text-align: left;
}
<?php session_start();
   $mm4= $_SESSION["user3"];
        $mm2= $_SESSION["user1"];

  ?>

</style>
<body style=" background-color:#F0FFF0;"> 

<div class="icon-bar">
  <a class="active" href="#"><i class="" style= "background-color=#4682B4;font-size:30px;"> doctor</i></a> 
    <a class="active" href="#"><i class=""style="background-color=#4682B4 font-size:30px;"> <?php echo $mm2 ; ?></i></a> 
       <a href="logout.php"><i class="" style="font-size:35px;color :white;background-color: ; width:200;height:;margin-right:-325%;"> تسجيل الخروج</i></br></a>
 
 <a href="#"></div>
<img class="user" src ="m.jpg"  style="display:block;
	margin-bottom:0px;
	width:1300px;
	margin-left:%;
	margin-right;%;
	height:300px;">
	<div class="icon-bar2">
 
<table class="center" style="
 width:70%; height:px; right:100px; margin-left:40%; margin-right:40%;
">
  <tr>
    <th>
  <p> <a href="allpatient.php"  style=  "font-size:30px;color:white ; border:2px solid k;background-color:navy;position:center;"> عرض جميع المرضى
  </a></th>
  </p>
 <th> <p> <a href="add-doctor.php" style=  "font-size:30px;color:white ; border:2px solid k;background-color:navy;position:center;">اضافة طبيب</a></th>
  </p>
  <th> <p> <a href="alldoctor1.php" style=  "font-size:30px;color:white ; border:2px solid ;background-color:navy;position:center;">عرض جميع الاطباء</a></th>
  </p>
  </tr>
  <tr>
  
  </p><td> <p> <a href="javascript:void(0)" onclick="document.getElementById('myForm4').style.display='block';document.getElementById('fade').style.display='block'" style=  "font-size:30px;color:white ; border:2px solid ;background-color:navy;position:center;">حذف مريض</a></td>
  </p><td> <p> <a href="javascript:void(0)" onclick="document.getElementById('myForm3').style.display='block';document.getElementById('fade').style.display='block'" style=  "font-size:30px;color:white ; border:2px solid ;background-color:navy;position:center;">حذف طبيب</a></td>
  </p>
</tr>
 
  
  <div id="myForm3" class="form-popup">
  <img class="user" src ="mmbb.jpg" style="margin:0 auto;
	display:block;
	margin-bottom:1px;
	width:150px;
	height:100px;">

  <h1> <center>أدخل رقم الهوية <center></h1>
  		    <form  name ="form" method="post"  class="form-container" 
  		    action="deletedoctor.php">
			<input type="text" name="specialization" style=" width: 90%;
  padding: 12px;
  margin: 5px 0 22px 0;
  border: none;
  background: #E6E6FA;
"><br>
	<input type ="submit" value="احذف" class="btn" style="   display:inline-block;"></input>
</form>
 <br> <a href=""><i class="" style="  background-color: red ;  text-align: center; 
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
  
  <div id="myForm4" class="form-popup">
  <img class="user" src ="mmbb.jpg" style="margin:0 auto;
	display:block;
	margin-bottom:1px;
	width:150px;
	height:100px;">

  <h1> <center>أدخل رقم الهوية <center></h1>
  		    <form  name ="form" method="post"  class="form-container" 
  		    action="deletepatient1.php">
			<input type="text" name="specialization" style=" width: 90%;
  padding: 12px;
  margin: 5px 0 22px 0;
  border: none;
  background: #E6E6FA;
"><br>
	<input type ="submit" value="احذف" class="btn"></input>
</form>
 <br> 
 <br> <a href=""><i class="" style="  background-color: red ;  text-align: center; 
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
  
  <div id="my1" class="form-popup">
  <img class="user" src ="enass.png" style="margin:0 auto;
	display:block;
	margin-bottom:1px;
	width:150px;
	height:75px;">

  
  </div>
  </table>
  <head >
  <html>