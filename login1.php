<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php

$conection=new mysqli('localhost','root','','record');

?>

	<?php session_start();
if (isset($_POST['kk3'])){
    $user_name=$_POST['kk1'];
	$pass_word=$_POST['kk2'];

	$water="SELECT * FROM  user WHERE email='$user_name' AND password='$pass_word'";
	$result=mysqli_query($conection,$water);
    while ($row=mysqli_fetch_array($result)) {
    	$id_u=$row['id'];
    	$em=$row['email'];
    	$pa=$row['password'];
    	$ty=$row['type'];
            
  } 

   $_SESSION["userType"]=$ty;
   $_SESSION["user1"]=$em;
   $_SESSION["user2"]=$pa;
   $_SESSION["user3"]=$id_u;

       
if(isset($_SESSION["userType"]))
{
  $mm1= $_SESSION["userType"];
}

if(isset($_SESSION["user1"]))
{
    $mm2= $_SESSION["user1"];
}
if(isset($_SESSION["user2"]))
{
    $mm3= $_SESSION["user2"];
}

if(isset($_SESSION["user3"]))
{
    $mm4= $_SESSION["user3"];
}

if(isset($_SESSION["userType"]) && $_SESSION["userType"]==1)
{
    
 header("location:doctor1.php");
}

if(isset($_SESSION["userType"]) && $_SESSION["userType"]==0)
{
header("location:patient1.php");
 
}
 
else if(!isset($_SESSION["userType"]))
{
  header("location:foll.php");
}

if(isset($_SESSION["userType"]) && $_SESSION["userType"]==2)
{
header("location:admin0.php");

}
    
}

 
?>



</head>
<body>

</body>
</html>