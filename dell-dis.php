<!DOCTYPE html>
<html>
<head>
	<title></title>
	
<style type="text/css">

  body{margin: 0;padding:0;background-color:#ebebe0}

  div{width: 50%;height: 600px;background-image: url(cod31.jpg);margin-left: 26%
  	;margin-top: 2%}

  header{border-top-style: solid;border-top-color: #339933;border-top-width:20px;
  	border-bottom-style:dashed;border-bottom-color:#339933;}

  h1{color:#267326;font-size: 37px;margin-left: 38% }

  #x1{width:500px;height: 40px;padding: 3px;font-size: 25px;border-style: solid;
  	border-radius: 15px;border-color: black;margin-left: 15%;margin-top: 6%}

  #x2{width:200px;height: 50px;padding: 3px;font-size: 25px;color:#4d0019;  border-style: solid;border-radius:10px;border-color: black;margin-left: 7%;}

  #x3,#x4{width:500px;height: 40px;padding: 3px;font-size: 25px;border-style: solid;border-radius: 15px;border-color: black;margin-left: 15%}

  #x5{width:300px;height: 40px;padding: 3px;font-size: 25px;border-style: solid;border-radius: 15px;border-color: #339933;margin-left: 29%;
  background-color:#339933;color:white;}
  

  
  #x6{color: #009900;font-size:37px;margin-left: 16% ;}

  #x7{width:500px;height:40px;padding:5px 40px 5px 40px;font-size: 25px;border-style: solid;border-radius: 18px;border-color: #996600;margin-left: 80%;
  background-color:#e6e600;color:#996600;text-decoration: none;}
  #x7:hover,#x7:focus {box-shadow: 4px 4px 30px #ffff00;}
  



</style>
</head>
<body style="background-color:  #dfff80">
	
    <div>
<header><h1> Delete disease</h1></header>

	<form action="dis.php" method="post">

	<input type="input" name="z1" id="x1" placeholder="Enter-patient-id">

	<br><br><br>

	<label id="x6">choise type</label>

	<select name="z2" id="x2">
		
<option value="1">  الجهاز الهضمي </option>
<option value="2">  الجهاز التنفسي  </option>
<option value="3"> جهاز الدوران </option>
<option value="4"> جهاز العصبي </option>
<option value="5">جهاز المناعة  </option>
<option value="6"> جهاز العضلي </option>
<option value="7"> جهاز البولي </option>
<option value="8"> جهاز الهيكلي </option>
<option value="9"> جهاز التناسلي </option>
<option value="10"> جهاز اللحافي </option>
<option value="11"> الجهاز اللمفاوي </option>
<option value="12"> الجهاز المناعي </option>



	</select>
	<br><br><br>
	<input type="date" name="z4" id="x4" value="12/3/2020" >
	<br><br><br>

	<input type="submit" name="z5" id="x5" value="Delete"> 
</form>
<a id="x7" href="http://localhost/file/doctor1.php"> back </a>
</div>
</body>
</html>