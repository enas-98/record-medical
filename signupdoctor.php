
<!Doctype html >
<html>
<head>

<title>sign up </title>
<link rel="stylesheet" href="">
<style> 
body{
	padding:0;
	margin:0;
	  background-color: white;

font-size:16px;
color:blue;
font-family:sans-serif;
font-weight:300;
/*background-position:left-top;*/مكان الصورة في الصفحة
}

#loginbox
{
 border: 7px solid  ;
  background-color:rgb(0,0,0,0);
color:blue;
width:400px;
height:1000px;
font-size:20px;
right:10%;
top:55%;
left:70%;
  margin:auto;
  border: 2px solid blue;
}
  button{
    background-color:blue;
    display:block;
    border:2px solid #366473;
    padding:14px 110px;
    border-radius:20px;
    color:white;
    transition:0.25px;
	left:-80%;
    
    }
.user{
	top:50%;
	left:-100%;
	display:block;
	margin-bottom:5px;
	width:290px;
	height:100px;
}
.us{
	top:50%;
	left:50%;
	right:10%;
	margin:60 auto;
	display:block;
	margin-bottom:5px;
	width:1600px;
	height:300px;
}

.users{
	top:30%;
	left:-80%;
	right:90%;
	margin:60 auto;
	display:block;
	margin-bottom:5px;
	width:1700px;
	height:300px;
}
.box
{
position:absolute;
top:50;

box-sizing:border-box;
padding:40px;
width:1000px;
height:700px;

}
h1
{
	margin:0 0 20px 0;
	font-weight:300;
	font-size:30px;
	position:center;
}
input[type=password]
{
	display:block;
	box-sizing:border-box;
	margin-bottom:20px;
	padding:4px;
	width:220px;
	height:32px;
	border:none;
	outline:none;
	border-bottom:4px solid blue;
			font-family:sans-serif;
			font-weight:400;
			font-size:;
			transition:0,2s ease;
			
}
input[type=text]{
display:block;
	box-sizing:border-box;
	margin-bottom:20px;
	padding:4px;
	width:220px;
	height:32px;
	border:none;
	outline:none;
	border-bottom:4px solid blue;
			font-family:sans-serif;
			font-weight:400;
			font-size:;
			transition:0,2s ease;
			
}

	.right-box
	{
		position:absolute;
		top:-30%;
		right:0;
		left:0;
		box-sizing:border-box;
		padding:700px;
		width:100px;
		height:700px;
	
		background-size:cover;
		background-position:left;
	}
		




.table {
  border-collapse: collapse;
  border: 10px solid black;
  background-color:black
  ;
}


</style>
</head>
<body style=" background-color:#F0FFF0;"> 

<form  name ="form1" method="post" action="adddoctor.php">
<img class="us" src ="p.jpg" >
<div id="loginbox" >

<div class="box" style="position:absolute;">

<img class="user" src ="nl.png"  style="top:50%;
	left:-100%;
	display:block;
	margin-bottom:5px;
	width:350px;
	height:150px;
">
<br><input type ="text"  name="name" placeholder="الاسم" required /></td></br>

<br> <td><input type ="text"  name="email"  placeholder="البريد الالكتروني" required /></td></br>
<br><td><input type ="password"  name="password"  placeholder="كلمة المرور " required /></td></br>
<select name="city" style="width=300px;height:40px; margin-top:5px ;background-color:#0000CD;">

    <option value="seo">المحافظة</option>
    <option value="auto">دمشق</option>
    <option value="business">حمص</option>
    <option value="design">حلب</option>
	    <option value="design">ديرالزور</option>
			    <option value="design">حماة</option>
							    <option value="design">الحسكة</option>



	</select>
<br>	<select name="specialization" style="width=300px;height:40px; margin-top:5px ;background-color:">
    <option value="seo"> <h1>الاختصاص</h1></option>
    <option value="auto">عصبية </option>
    <option value="business">
بولية </option>
    <option value="design">اطفال</option>
    <option value="design">جلدية</option>
    <option value="design">قلبية</option>
    <option value="design">بولية</option>
    <option value="design">باطنية</option>
    <option value="design">عظمية</option>
    <option value="design">نسائية</option>
    <option value="design">تجميل</option>
    <option value="design">الأسنان</option>
    <option value="design">الطوارئ</option>
    <option value="design">عضلية</option>
	    <option value="design">بصرية</option>
    <option value="design">غدد</option>
	    <option value="design">جراحة قلبية</option>
    <option value="design">جراحة عامة</option>
    <option value="design">جراحة عصبية</option>




<br><td><input type ="text"  name=" address"     placeholder="العنوان">
<br><td><input type ="text"  name="mobile"     placeholder="رقم الموبايل">
<br><td><input type ="text"  name="telephone"     placeholder="هاتف العياد">
<br><td><input type ="text"  name="user_id"     placeholder="رقم الهوية">




        <button type="submit" name="save">signup</button>
		
</div>
</div>
<tr>
</td>
</tr>
</tr>
</form>
</body>
</html>
