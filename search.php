<!DOCTYPE html>
<html>
<head>
    <title></title>

    <style type="text/css">
        body{margin: 0;padding: 0;background-color:#e6ecff}
        #tt1{border: 3px solid black;background-color: gray;margin-left:3px}
        .tt2{border: 1px solid black;padding:2px;background-color: #cc0052;font-size: 25px;color:#ffffcc}
        .tt3{border: 1px solid black;padding:2px;color:black;background-color:white;font-size: 22px}

        #yy1{border: 3px solid black;background-color: gray;margin-left: 17%}
        .yy2{border: 1px solid black;padding:2px;background-color:#006666
        ;font-size: 25px;color:#ffffcc}
        .yy3{border: 1px solid black;padding:2px;color:black;background-color:white;font-size: 28px;width: 280px}


        #zz1{border: 3px solid black;background-color: gray;margin-left: 17%}
        .zz2{border: 1px solid black;padding:2px;background-color:#e69900
        ;font-size: 25px;color:#ffffcc}
        .zz3{border: 1px solid black;padding:2px;color:black;background-color:white;font-size: 28px;width:280px}

        #kk1{border: 3px solid black;background-color: gray;margin-left: 27%}
        .kk2{border: 1px solid black;padding:2px;background-color:#267326
        ;font-size: 25px;color:#ffffcc}
        .kk3{border: 1px solid black;padding:2px;color:black;background-color:white;font-size: 28px;width:150px}

       .tt3:hover{background-color:#ffcccc;}
       .yy3:hover{background-color:#d9e6f2;}
       .zz3:hover{background-color:#ffffb3;}
       .kk3:hover{background-color:#b3ffb3;}
       #gg1{width: 100%;height: 500px;background-image:url(cod20.jpg);background-size: 100% 500px}
       #gg2{width:800px;height: 400px}
       #gg3{width:600px;color: #00334d;font-size: 50px;margin-left:42%;margin-top: -10%}
       #gg4{width:200px;color:white;font-size: 50px;margin-left:76%;margin-top: -23%;font-family: "sans-serif";}
       #ff1{width:430px;color:#cc0052;font-size: 40px;margin-left:33%;font-family: "sans-serif";border-style: solid;border-color:#cc0052;padding: 2px 1px 2px 100px;border-radius: 15px;background-color: white}

        #ff2{width:280px;color:#006666;font-size: 40px;margin-left:39%;font-family: "sans-serif";border-style: solid;border-color:#006666;padding: 2px 3px 2px 80px;border-radius: 15px;background-color: white}

         #ff3{width:190px;color:#e69900;font-size: 40px;margin-left:43%;font-family: "sans-serif";border-style: solid;border-color:#e69900;padding: 2px 3px 2px 60px;border-radius: 15px;background-color: white}
         #ff4{width:210px;color:#267326;font-size: 40px;margin-left:42%;font-family: "sans-serif";border-style: solid;border-color:#267326;padding: 2px 3px 2px 60px;border-radius: 15px;background-color: white}




        
        
        
        



    </style>
</head>
<body> 
    <div id="gg1">
        <img src="cod21.jpeg" id="gg2">
        <h1 id="gg3"> View the medical record </h1>
        <h1 id="gg4"> Doctor </h1>
</div>
<br><br><br>
<h1 id="ff1"> patient-information </h1>




<?php

$conection=new mysqli('localhost','root','','record');
if (isset($_POST['ser2'])){
    $zz1=$_POST['ser1'];

    $sql1="SELECT * FROM  patient WHERE id_pa=$zz1";
    $res1=mysqli_query($conection,$sql1);
    while($row1=mysqli_fetch_array($res1))
    {
        $aa1=$row1['id_pa'];
        $aa2=$row1['name_pa'];
    	$aa3=$row1['age'];
    	$aa4=$row1['gender'];
        $aa5=$row1['social_status'];
        $aa6=$row1['number_of_children'];
        $aa7=$row1['blood_type'];
        $aa8=$row1['job'];
        $aa9=$row1['smoking'];
        $aa10=$row1['length'];
        $aa11=$row1['weight'];
        $aa12=$row1['address_pa'];
        $aa13=$row1['mobile_pa'];
    }

echo "<table id='tt1'><tr>
<th  class='tt2'>Id_Number</th>
<th  class='tt2'>Name</th>
<th  class='tt2'>Age</th>
<th  class='tt2'>Gender</th>
<th  class='tt2'>Social_Status</th>
<th  class='tt2'>Children</th>
<th  class='tt2' width='110px'>Job</th>
<th  class='tt2'>Blood_Type</th>
<th  class='tt2'>Smoking</th>
<th  class='tt2'>Length</th>
<th  class='tt2'>Weight</th>
<th  class='tt2'>Address</th>
<th  class='tt2'>Mobile</th></tr>

<tr>
<td class='tt3' width='150px'>$aa1</td>
<td class='tt3' width='200px'>$aa2</td>
<td class='tt3'>$aa3</td>
<td class='tt3'>$aa4</td>
<td class='tt3'>$aa5</td>
<td class='tt3'>$aa6</td>
<td class='tt3'>$aa7</td>
<td class='tt3'>$aa8</td>
<td class='tt3'>$aa9</td>
<td class='tt3'>$aa10</td>
<td class='tt3'>$aa11</td>
<td class='tt3'>$aa12</td>
<td class='tt3'>$aa13</td>
</tr>

</table><br><br><br>";
	

$sql2="SELECT * FROM patient ,medical_tests,patient_tests WHERE patient.id_pa=patient_tests.pa_id AND medical_tests.id_mt=patient_tests.mt_id AND patient.id_pa=$zz1";
$result2=mysqli_query($conection,$sql2);

$sql3="SELECT * FROM patient,diseases,patient_diseases WHERE patient.id_pa=patient_diseases.pa_id AND diseases.id_es=patient_diseases.es_id AND patient.id_pa=$zz1";
$result3=mysqli_query($conection,$sql3);

$sql4="SELECT * FROM patient,surgeries,patient_surgeries WHERE patient.id_pa=patient_surgeries.pa_id AND surgeries.id_su=patient_surgeries.su_id  AND patient.id_pa=$zz1";
$result4=mysqli_query($conection,$sql4);
   
    
}

else {
    echo  "alaa";
}

?>
<h1 id="ff2">medical-test </h1>

<table id='yy1'>

<tr>

<th class="yy2">Test</th>
<th class="yy2">Symbol</th>
<th class="yy2">Result</th>
<th class="yy2">Date</th>
</tr>
<?php
if(mysqli_num_rows($result2)>0)
{
    while ($row2=mysqli_fetch_array($result2))
{

?>

<tr>
    
    <td class="yy3" ><?php echo $row2['name_mt']; ?></td>
    <td class="yy3"><?php echo $row2['symbol']; ?></td>
    <td class="yy3"><?php echo $row2['result']; ?></td>
    <td class="yy3" style="width:150px"><?php echo $row2['test_date']; ?></td>

</tr>
<?php
}
}
?>
    </table>
    <br><br><br>

    <h1 id="ff3">diseases</h1>

    <table id="zz1">
<tr>
<th class="zz2">Disease</th>
<th class="zz2">type</th>
<th class="zz2">Drug</th>
<th class="zz2">Date</th>
</tr>
<?php
if(mysqli_num_rows($result3)>0)
{
    while ($row3=mysqli_fetch_array($result3))
{

?>

<tr>
    
    <td class="zz3"><?php echo $row3['name_es']; ?></td>
    <td class="zz3"><?php echo $row3['type']; ?></td>
    <td class="zz3"><?php echo $row3['drug']; ?></td>
    <td class="zz3" style="width: 150px"><?php echo $row3['diseases_date']; ?></td>

</tr>
<?php
}
}
?>
    </table>

    <br><br><br>
    <h1 id="ff4">surgeries</h1>

    <table id="kk1">
<tr>

<th class="kk2">Surgery_Type</th>
<th class="kk2">Details</th>
<th class="kk2">Date</th>
</tr>
<?php
if(mysqli_num_rows($result4)>0)
{
    while ($row4=mysqli_fetch_array($result4))
{

?>

<tr>
   
    <td class="kk3"><?php echo $row4['surgery_ type']; ?></td>
    <td class="kk3"  style="width:400px"><?php echo $row4['details']; ?></td>
    <td class="kk3"><?php echo $row4['date_surgery']; ?></td>
   

</tr>
<?php
}
}
?>
    </table>

    <br><br><br>






</body>
</html>