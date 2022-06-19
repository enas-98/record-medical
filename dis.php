<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    #gg{font-size: 30px;color: white;padding: 50px 0px 0px 70px }
    #nn{width:500px;height: 200px;background-color:#339933;margin-left: 33%}
    #vv{font-size: 30px;padding: 7px 20px 7px 20px ;color: white;background-color: #e68a00;margin-left: 40%;text-decoration: none;border-radius: 5px}
  </style>
</head>

<body>

	<?php

$conection=new mysqli('localhost','root','','record');

?>

	<?php
     if(isset($_POST['z5']))
     {
     $xx1=$_POST['z1'];
     $xx2=$_POST['z2'];
     $xx4=$_POST['z4'];
    
  $qurey="DELETE FROM patient_diseases WHERE pa_id='$xx1' AND   es_id='$xx2' AND   diseases_date='$xx4'";
  $res=mysqli_query($conection,$qurey);
  if($res) {

    echo "<br><br><div id='nn'><h1 id='gg'>The deletion was successful</h1>
    <br><br><a id='vv' href='http://localhost/file/doctor1.php'>back</a></div>";
  
  }
  
    
  }

  else  if(!isset($_POST['z5'])){
    echo "<br><br><div id='nn'><h1 id='gg'>Delete failed,try again</h1>
    <br><br><a id='vv' href='http://localhost/file/dell-sur.php'>back</a></div>";
  }

  
       
       


    ?>
</body></html>
