<!DOCTYPE html>
<html>
<head>
	<title></title>
	
<style type="text/css">

  body{margin: 0;padding:0;background-color:#ebebe0}

  div{width: 50%;height: 600px;background-image: url(cod15.jpg);margin-left: 26%
  	;margin-top: 2%}

  header{border-top-style: solid;border-top-color: #ff6699;border-top-width:20px;
  	border-bottom-style:dashed;border-bottom-color:#ffb3cc;}

  h1{color:#ffb3cc;font-size: 37px;margin-left: 34% }

  #x1{width:500px;height: 40px;padding: 3px;font-size: 25px;border-style: solid;
  	border-radius: 15px;border-color: black;margin-left: 15%;margin-top: 6%}

  #x2{width:200px;height: 50px;padding: 3px;font-size: 25px;color:#4d0019;  border-style: solid;border-radius:10px;border-color: black;margin-left: 7%;}

  #x3,#x4{width:500px;height: 40px;padding: 3px;font-size: 25px;border-style: solid;border-radius: 15px;border-color: black;margin-left: 15%}

  #x5{width:300px;height: 40px;padding: 3px;font-size: 25px;border-style: solid;border-radius: 15px;border-color: #4d0019;margin-left: 29%;
  background-color:#ff6699;color:black;}
  

  
  #x6{color:#ff6699;font-size:37px;margin-left: 16% }

  #x7{width:500px;height:40px;padding:5px 40px 5px 40px;font-size: 25px;border-style: solid;border-radius: 18px;border-color: #ff9900;margin-left: 80%;
  background-color: #ff9900;color:white;text-decoration: none;}
  #x7:hover,#x7:focus {box-shadow: 2px 2px 20px #ffcc00;}
  



</style>
</head>
<body>
	
    <div>
<header><h1>Add new test </h1></header>

	<form action="add-tes.php" method="post">

	<input type="input" name="z1" id="x1" placeholder="Enter-patient-id">

	<br><br><br>

	<label id="x6">choise test</label>

	<select name="z2" id="x2">
		
<option value="1">CBC</option>
<option value="2">ESR</option>
<option value="3">APTT</option>
<option value="4">Glucose</option>
<option value="5">Creatinine</option>
<option value="6">Uric Acid</option>
<option value="7">Plasma Urea</option>
<option value="8">HDL</option>
<option value="9">LDL</option>
<option value="10">Albumin</option>
<option value="11">Globulin</option>
<option value="12">Iron</option>
<option value="13">Calcium</option>
<option value="14">Magnesium</option>
<option value="15">Phosphorus</option>
<option value="16">Sodium</option>
<option value="17">Potassium</option>
<option value="18">PH</option>
<option value="19">AST</option>
<option value="20">ALT</option>
<option value="21">LDH</option>
<option value="22">T4</option>
<option value="23">T3</option>
<option value="24">TSH</option>
<option value="25">LH</option>
<option value="26">FSH</option>
<option value="27">Vit-D</option>
<option value="28">Troponin</option>










	</select>
	<br><br><br>

	<input type="input" name="z3" id="x3" placeholder="Enter-result">
	<br><br><br>
	<input type="date" name="z4" id="x4" value="12/3/2020" >
	<br><br><br>

	<input type="submit" name="z5" id="x5" value="Add"> 
</form>
<a id="x7" href="http://localhost/file/doctor1.php"> back </a>
</div>
</body>
</html>