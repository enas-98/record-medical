
<?php

$conection=new mysqli('localhost','root','','record');
  

?>

<?php
    if(isset($_POST['mm']))
    {
    
    $bb2=$_POST['aa2'];
    $bb3=$_POST['aa3'];
    $bb4=$_POST['jj1'];
    $bb5=$_POST['jj2'];
    $bb6=$_POST['jj3'];
    $bb7=$_POST['jj4'];
    $bb8=$_POST['jj5'];
    $bb9=$_POST['jj6'];
    $bb10=$_POST['jj7'];
    
   
    $alaa="INSERT INTO user(email,password,type)values
    ('$bb2','$bb3',1)";

    $nor=mysqli_query($conection,$alaa);

    $sss="SELECT * FROM user WHERE email='$bb2'";
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
    if($omar){
    header("location:login.php");
}
}