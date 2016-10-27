<html>
<body>
<html>
 <style>
 a{
 text-decoration:none;
 text-color:black;
 }
 h2
 {
 text-color:rgb(53,0,106);
 TEXT-SIZE: 22PX;
 TEXT-ALIGN: LEFT;
 }
 
 </style>
<link rel="stylesheet" type="text/css" href="bgr.css"></head>
<body class="bg">
<img width=15% height=12% align ="left" src = "new1.png"></img>
<div class="name">XYZ BOOKSTORE
<div class="name2">ANDHERI WEST,MUMBAI
<br></br>
<?php
include 'config.php';
$content=$_POST['fname'];
$conten=$_POST['lname'];
$conte=$_POST['add'];
$cont=$_POST['phone'];
$con=$_POST['bookname'];
$co=$_POST['noc'];
//echo $con;
$result =$mysqli->query("INSERT into djscoe (fname,lname,address,phone,book,copies) values ('$content','$conten','$conte','$cont','$con','$co')");
{
	echo '<h2>ORDER SUCCESSFULLY PLACED!</H2>';
}
?>
<div class="butt2" ><a href="home.html">RETURN HOME</a></div>
</BODY>
</HTML>