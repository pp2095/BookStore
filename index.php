 <html>
 <style>
 a{
 text-decoration:none;
 text-color:black;
 }
 </style>
<script>
function Validate()
{
	var alpha=/^[A-Za-z]+$/;
	var numer=/^[0-9]+$/;
	if(document.orderform.fname.value=="" || !(document.orderform.fname.value.match(alpha)))
	{
		alert("Please enter valid first name!");
		document.orderform.fname.focus();
		return false;
	}
	if(document.orderform.lname.value=="" || !(document.orderform.lname.value.match(alpha)))
	{
		alert("Please enter valid last name!");
		document.orderform.lname.focus();
		return false;
	}
	if(document.orderform.add.value=="")
	{
		alert("Please enter address!");
		document.orderform.add.focus();
		return false;
	}
	if(document.orderform.phone.value=="" || !(document.orderform.phone.value.match(numer)))
	{
		alert("Please enter valid phone number!");
		document.orderform.phone.focus();
		return false;
	}
	if(document.orderform.bookname.value==-1)
	{
		alert("Please select a book!");
		document.orderform.bookname.focus();
		return false;
	}
	if(document.orderform.noc.value==""|| document.orderform.noc.value<1)
	{
		alert("Please enter the number of copies required:");
		document.orderform.noc.focus();
		return false;
	}
	if(document.orderform.noc.value>3)
	{
		alert("You cannot order more than 3 copies online. Please visit our store to place a wholesale order!");
		document.orderform.noc.focus();
		return false;
	}
	return true;
}
</script>
<link rel="stylesheet" type="text/css" href="bgr.css"></head>
<body class="bg">
	<?php
	include 'config.php';
	?>
<img width=15% height=12% align ="left" src = "new1.png"></img>
<div class="name">XYZ BOOKSTORE
<div class="name2">ANDHERI WEST,MUMBAI
<br><br>
<div class="name10">ORDER BOOKS ONLINE</center>
<form name="orderform" action= "http://localhost/tutorial/insert.php" method="post">
<center><table class="box">
<tr><td>First name:  </td><td><input type="text" name="fname"></td></tr>
<tr><td>Last name:  </td><td><input type="textfield" name="lname"></td></tr>
<tr><td>Address:    </td><td><input type="textarea" rows="4" cols="100" name="add"></td></tr>
<tr><td>Phone number:</td><td><input type="textfield" name="phone"></td></tr>
<br>
<tr><td>Select a book:</td><td>
<select name="bookname">
<option value="-1">Select a book to order!</option>
<option value="Animal Farm">Animal Farm</option>
<option value="Charlie and the Chocolate Factory">Charlie and the Chocolate Factory</option>
<option value="Confetti Cakes">Confetti Cakes</option>
<option value="Couture Chocolate">Couture Chocolate</option>
<option value="Eat,Pray,Love">Eat,Pray,Love</option>
<option value="Harry Potter- The Collection">Harry Potter- The Collection</option>
<option value="Kane and Abel">Kane and Abel</option>
<option value="Mahabharata">Mahabharata</option>
<option value="Relaxed Cooking With Curtis Stone">Relaxed Cooking With Curtis Stone</option>
<option value="Snow White and the Seven Dwarves">Snow White and the Seven Dwarves</option>
<option value="The Firm">The Firm</option>
<option value="The Lost Symbol">The Lost Symbol</option>
<option value="The Second Sex">The Second Sex</option>
<option value="Wise and Otherwise">Wise and Otherwise</option>
<option value="Who Moved My Cheese?">Who Moved My Cheese?</option>
<option value="Your Place Or Mine?">Your Place Or Mine?</option>
</select>
<tr><td>Number of copies:</td><td><input type="textfield" name="noc"></td></tr>
<tr><td><center><input type="submit" name="ORDER NOW!" value="ORDER NOW!" onclick="return(Validate())"></center></td><td><center><input type="reset" name="RESET" value="RESET"></center></td></tr>
</table></center>
<table align="left" >
<tr><td>
<div class="butt2" ><a href="home.html">RETURN HOME</a></div></tr></td>
</table>
</body>
</html>