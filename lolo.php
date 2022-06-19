<!DOCTYPE html>
<html>
<head>
	<title></title>
<?php

$conection=new mysqli('localhost','root','','record');


?>


</head>
<body>

    <?php
    if(isset($_POST['mm']))
    {
    $bb1=$_POST['aa1'];
    $bb2=$_POST['aa2'];
    $bb3=$_POST['aa3'];
    $bb4=$_POST['aa4'];
    $bb5=$_POST['aa5'];
    $bb6=$_POST['aa6'];
    $bb7=$_POST['aa7'];
    $bb8=$_POST['aa8'];
    $bb9=$_POST['aa9'];
    $bb10=$_POST['aa10'];
    $bb11=$_POST['aa11'];
    $bb12=$_POST['aa12'];
   
    $bb14=$_POST['aa14'];
    $bb15=$_POST['aa15'];
    
    $qqq="INSERT INTO user(id,email,password,type)values
    ('$bb14','$bb15',0)";

    $qqq1=mysqli_query($conection,$qqq);

    $eee="SELECT * FROM user WHERE email='$bb14'";
    $rrr=mysqli_query($conection,$eee);
    while ($row=mysqli_fetch_array($rrr)) {
        $dd1=$row['id'];
        $dd2=$row['email'];
        $dd3=$row['password'];
        $dd4=$row['type'];
    }

    
   
    $www="INSERT INTO patient(id_pa,user_id ,name_pa,age,gender,social_status,number_of_children,job,    smoking,length,weight,address_pa,mobile_pa)values
    ('$bb1','$dd1','$bb2','$bb3','$bb4','$bb5','$bb6','$bb7','$bb8','$bb9','$bb10','$bb11','$bb12')";

    $www1=mysqli_query($conection,$www);

    $sss="SELECT * FROM user WHERE email='$bb14'";
    $mmm=mysqli_query($conection,$sss);
    while ($row=mysqli_fetch_array($mmm)) {
        $dd1=$row['id'];
        $dd2=$row['email'];
        $dd3=$row['password'];
        $dd4=$row['type'];
    }


 $amer="INSERT INTO doctor(id_do,user_id,name,specialization,city,address,mobile,telephone)values
    ('$bb4','$dd1','$bb5','$bb6','$bb7','$bb8','$bb9','$bb10')";

    $omar=mysqli_query($conection,$amer);
    
}
    ?>

    <form  action=""   method="post">

       id <input type="input" name="aa1">
       name <input type="input" name="aa2">
      


         age<input type="input" name="aa3">


         gender  male<input type="radio" name="aa4" value="male">
              female <input type="radio" name="aa4" value="famle">

               social-status  sigle<input type="radio" name="aa5" value="sigle">
              married<input type="radio" name="aa5" value="married">

           number of chlidren   <input type="number" name="aa6">

             job <input type="input" name="aa7">
             
              smoking  yes<input type="radio" name="aa8" value="yes">
              no<input type="radio" name="aa5" value="no">

              length <input type="number" name="aa9">
            weigt <input type="number" name="aa10">

               adrees <input type="number" name="aa11">
              mobil<input type="number" name="aa12">

              
              email<input type="email" name="aa14">
               password<input type="npassword" name="aa15">

               <input type="submit" name="mm" value="add">




       


    </form>

</body>
</html>