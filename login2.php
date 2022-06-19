<?php

$conection=new mysqli('localhost','root','','record');

?>
<?php
session_start();

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
    $bb13=$_POST['aa13'];
    $bb14=$_POST['aa14'];
    $bb15=$_POST['aa15'];
    
    $qqq="INSERT INTO user(email,password,type)values
    ('$bb14','$bb15',0)";

    $qqq1=mysqli_query($conection,$qqq);

    $eee="SELECT * FROM user WHERE email='$bb14'";
    $rrr=mysqli_query($conection,$eee);
    while ($row=mysqli_fetch_array($rrr)) {
        $mm4=$row['id'];
        $mm2=$row['email'];
        $dd3=$row['password'];
        $dd4=$row['type'];
    }

    
    $www="INSERT INTO patient(id_pa,user_id ,name_pa,age,gender,social_status,number_of_children,blood_type,job,    smoking,length,weight,address_pa,mobile_pa)values
    ('$bb1','$mm4','$bb2','$bb3','$bb4','$bb5','$bb6','$bb8','$bb7','$bb9','$bb10','$bb11','$bb12','$bb13')";

  $www1=mysqli_query($conection,$www);
  $_SESSION["user1"]=$mm2;
   $_SESSION["user3"]=$mm4;
   $_SESSION["userType"]=$dd4;
     header("location:patient1.php");
       
    }
    else
        
        ?>