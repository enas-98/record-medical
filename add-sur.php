<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    #gg{font-size: 30px;color:white;padding: 50px 0px 0px 70px ;margin-left: 13%}
    #nn{width:500px;height: 200px;background-color:#660033;margin-left: 33%}
    #vv{font-size: 30px;padding: 7px 20px 7px 20px ;color:#660033;background-color: #ff80bf;margin-left: 40%;text-decoration: none;border-radius: 5px}
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
     $xx3=$_POST['z3'];
     $xx4=$_POST['z4'];
    

     $sel1="INSERT INTO patient_surgeries(pa_id,su_id,details,date_surgery)values('$xx1','$xx2','$xx3','$xx4')";
       $res1=mysqli_query($conection,$sel1);
       if($res1)
       {
      

    echo "<br><br><div id='nn'><h1 id='gg'>Added successfully</h1>
    <br><br><a id='vv' href='http://localhost/file/doctor1.php'>back</a></div>";
  
  }
  
    
  else
   if(empty($xx1)){
    echo "<br><br><div id='nn'><h1 id='gg'>Add failed, try again</h1>
    <br><br><a id='vv' href='http://localhost/file/doctor1.php'>back</a></div>";
  }
  else if(empty($xx2)){
    echo "<br><br><div id='nn'><h1 id='gg'>Add failed, try again</h1>
    <br><br><a id='vv' href='http://localhost/file/doctor1.php'>back</a></div>";
  
  }
else if(empty($xx3)){
    echo "<br><br><div id='nn'><h1 id='gg'>Add failed, try again</h1>
    <br><br><a id='vv' href='http://localhost/file/doctor1.php'>back</a></div>";
  
  }
 
  else if(empty($xx4)){
    echo "<br><br><div id='nn'><h1 id='gg'>Add failed, try again</h1>
    <br><br><a id='vv' href='http://localhost/file/doctor1.php'>back</a></div>";
  
  }

  else  echo "<br><br><div id='nn'><h1 id='gg'>The ID number is wrong</h1>
    <br><br><a id='vv' href='http://localhost/file/doctor1.php'>back</a></div>";
    
  }
    ?>
    </body></html>