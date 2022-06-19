<!DOCTYPE html>
<html>
<head>
<script src="jquery-3.5.0.min.js"></script>
  <script type="text/javascript">
    
$(document).ready(function() {

var x = 0;
$(".rana").click(function(){

x=(x<=300)?(x+100):0;
$("figure").css('left',-x+"%");

}) ;



$(".sama").click(function(){

x=(x>=100)?(x-100):400;
$("figure").css('left',-x+"%");

}) ;
});

</script>


	<?php 

$conection=new mysqli('localhost','root','','record');

?>

<?php session_start();
$mm2= $_SESSION["user1"];

?>
	<title></title>
	<style type="text/css">
   
	 body{margin: 0;padding: 0}
.slider{width: 50%;height: 450px;position: relative;overflow:hidden;border: 3px solid black;background:  #5c5c3d ;margin-left: 26%}

   .slider figure{margin:0px;position:relative;width:500%;left:0px;transition:2s ease-in-out; height: 150%}

   .slider figure img { width: 20% ; height: 70% ;float:left; }

   .sama,.rana{ position: absolute;top: 45%;cursor:pointer;color:#c2c2a3;background: black;padding: 2px;font-size:40px;height: 55px;width:60px;color: #c2c2a3;border-radius:5px;border-color: black}

  .sama{right: 0px}
  .rana{left: 0px}

   #r1{color: #ffeecc;font-size:50px;padding:4px}	
   #r2{width: 200px;height: 30px;border-style: solid;border-color: white;border-radius: 10px;margin-left: 5%;font-size: 20px}
   #r3{width: 250px;height:35px;border-style: solid;border-color:#9fbfdf;color:  #9fbfdf;border-radius:6px;background-color:#004466;font-size: 20px}
   #r3:hover{background-color:  #ff5c33;color:white;border-color: #ff3300}
   #r5{width: 100px;height:35px;border-style: solid;border-color: #ffecb3;color: #004466;border-radius:6px;background-color: #ffecb3;font-size: 25px;margin-left: 10%;}
   #r5:hover{color:red}
   #r6{width: 100%;height: 400px;background-image: url(doc2.jpg);background-size: 100% 400px}
  #r7{margin-top: 50px}
  #hr1{color:  #003333;border-color: #003333;background-color:#ebebe0;padding:
    10px  45px 10px 45px ;margin-left: 16%;font-size: 40px;text-decoration: none;border-radius: 10px}

  #hr2{color: #003333;border-color: #003333;background-color:#ebebe0;
    padding:10px 30px 10px 30px;margin-left:10%;font-size:40px;text-decoration: none;border-radius: 12px}

  #hr3{color:  #003333;border-color: #003333;background-color:#ebebe0;
    padding:10px 20px 10px 20px;font-size: 40px;text-decoration: none;border-radius: 12px}

    #hr4{color:  #003333;border-color: #003333;background-color:#ebebe0;padding:
    10px  30px 10px 30px ;margin-left: 16%;font-size: 40px;text-decoration: none;border-radius: 10px}

   #hr5{color:  #003333;border-color: #003333;background-color:#ebebe0;
    padding:10px 13px 10px 13px;margin-left:10%;font-size: 40px;text-decoration: none;border-radius: 12px}

  #hr6{color:  #003333;border-color: #003333;background-color:#ebebe0;
    padding:10px 10px 10px 10px;font-size: 40px;text-decoration: none;border-radius: 12px}
    .hr7:hover,.hr7:focus{box-shadow: 1px 1px 20px #ffcccc;}
    #hr1:hover{background-color:#ff6666;color:white}
    #hr2:hover{background-color:#ff6666;color:white}
    #hr3:hover{background-color:#ff6666;color:white}

    #hr4:hover{background-color:#ff6666;color:white}

    #hr5:hover{background-color:#ff6666;color:white}
    #hr6:hover{background-color:#ff6666;color:white}
    .p1{color:#DEB887;padding: 5px 0px 5px 50px  ;font-size: 25px;text-decoration: none;  }
    .p1:hover{color:#ffff00}
    #o1{color:#DEB887;padding: 5px 40px 5px 0px ;font-size: 25px  }


  
	</style>
</head>
<body> 
 
  <script type="text/javascript">

 var x = 0;
$(".rana").click(function(){

x=(x<=300)?(x+100):0;
$("figure").css('left',-x+"%");

}) ;


$(".sama").click(function(){

x=(x>=100)?(x-100):400;
$("figure").css('left',-x+"%");

}) ;

</script>


	
	
	<table style="background-color:#004466">
		
   <td  width="200" height="40px" id="r1">Doctor</td> <form action="search.php"  method="post">
   <td  width="250" height="40px">  <input type="input" name="ser1" id="r2" placeholder="Enter ID"> </td>
   <td  width="250" height="40px"> <input type="submit" name="ser2" id="r3" value="Search about Patient"></td></form>
   <td  width="300" height="40px"></td>
   <td  width="350" height="40px"> <h2 style="color: white"><?php echo $mm2 ; ?> </h2></td>
    <td  width="150" height="40px"><form action="logout.php" method="post"> <button id="r5" > logout</button>  </td>
    
</table> 
<div id="r6">
 <img src="bg.jpg" width="600px" height="350px" id="r7">
</div>



<br><br><br>


<table style="margin-left:20%;background-image: url(cod22.jpg);"> 

<tr>
	
<td width="300px" height="150px" ><a href="http://localhost/file/add-test.php" id="hr1" class="hr7"> Add test  </a></td>
	<td width="350px" height="150px"><a href="http://localhost/file/add-disease.php" id="hr2" class="hr7"> Add disease </a></td>
	<td width="300px" height="150px"><a href="http://localhost/file/add-surgery.php" id="hr3" class="hr7"> Add surgery  </a></td>
</tr>

<tr>
  
<td width="300px" height="150px"><a href="http://localhost/file/dell-test.php" id="hr4" class="hr7"> Delete test  </a></td>

<td width="350px" height="150px"><a href="http://localhost/file/dell-dis.php" id="hr5" class="hr7"> Delete disease </a></td>

<td width="300px" height="150px"><a href="http://localhost/file/dell-sur.php" id="hr6" class="hr7"> Delete surgey </a></td>
</tr>


</table>
<br><br><br>




   <div   class="slider">

  <figure>
  <img src="lolo9.jpg">
  <img src="lolo6.jpg">
  <img src="lolo3.jpg">
  <img src="lolo7.jpg">  

  </figure>

  <button  class="sama"><i class="row"><</i>   </button>
  <button  class="rana"><i class="row">></i>   </button>
  
  </div>
</div>

<br><br><br><br><br>


</div>

<div style="width: 100%;height: 600px;">
  <h1 style="color: red;margin-top:5%;margin-left: 60%;"> :تعرف على الأطعمة التي تحميك من مخاطر الاكتئاب  </h1>
  <p style="color: black;margin-left: 60%;font-size: 30px">أشارت الأبحاث منذ فترة طويلة إلى أن النظام الغذائي الغربي المعتاد المضاد للالتهاب ، والذي يتضمن المشروبات السكرية والحبوب المكررة والأطعمة المقلية واللحوم المصنعة والحلويات عالية الدسم ، يرتبط بزيادة خطر الإصابة بالاكتئاب وتحدد دراسة أجريت عام 2020 ، نُشرت في المجلة الدولية للبحوث البيئية والصحة العامة ، العديد من الارتباطات الإيجابية والسلبية بين النظام الغذائي والاكتئاب الدهون المضادة للالتهابات ، بما في ذلك أوميغا 3 من الأطعمة مثل السلمون البري ، والدهون الأحادية غير المشبعة من الأفوكادو وزيت الزيتون البكر، ترتبط أيضًا بتقليل مخاطر الاكتئاب ، وكذلك انخفاض علامات إلتهاب الدم أما بعض مضادات الأكسدة بما في ذلك الفلافونويد (الموجودة في التوت والفول والحمضيات والتفاح) ، فترتبط عكسياً بأعراض الاكتئاب</p>

<img src="nor1.jpg" width="650px" height="370px" style="border-color: black;border-style: solid;margin-left: 7%;margin-top:-30%;position: absolute;">


</div>

<br><br>

<img src="nor3.jpg" width="800px"  height="500px" style="border-color: #00334d;
border-style: solid;margin-left: 25%">

 <p style="color: black;font-size: 30px;width: 1200px;margin-left: 12%">تعتبر الفيروسات كائنات معدية صغيرة الحجم يمكن أن تتكاثر في الخلايا الحية كالحيوانات والنباتات والبكتيريا فقط، وتصنف الفيروسات ضمن تصنيف خاص بها كونها ليست نباتات ولا حيوانات ولا بكتيريا بدائية النواة، ويتم وضعها عموماً في تصنيف خاص بها ولا ينبغي أن تعتبر كائنات حية بالمعنى الحرفي لأنها لا تعيش بحرية أي أنها لا تستطيع إعادة إنتاج العمليات الأيضية وحملها بدون خلية مضيفة  وتعرف الفيروسات بأنها طفيليات جوهرية تعتمد على الخلية المضيفة في جميع وظائفها التي تحافظ على حياتها، كما ولا تستطيع الفيروسات تجميع البروتين لأنها تفتقر للريبوسومات أو عضيات الخلية</p>

<div><table style="background-color: #004466">
    <td><a class="p1" href=""> Edit</a></td>
    <td><a class="p1" href="http://localhost/file/dell-do.php"> delete</a></td>
    <td width="950px" height="50px"></td>
    <td id="o1"> AL SHAM private univercity</td>


  </table>

  
 

</body>
</html>