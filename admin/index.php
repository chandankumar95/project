<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="main">
<div class="header"></div><!--end of header-->
<div class="logo">
<div class="logo-div1"><br><h2>LOGIN PAGE</h2><p><center>Enter your credentials below</center><p></div><!--end of logo-div1-->
<div class="logo-div2">
<img src="css/thQX7AWOS1.jpg" height="100%" width="80%">
</div><!--end of logo-div2-->

</div><!--end of logo-->
<div class="login">
<div class="login-inside">
<form method="post" action="sendlogin.php">
<label id="label">USERNAME</label><br>
<input type="text" id="input" name="username"><br>
<label id="label">PASSWORD</label><br>
<input type="text"  id="input" name="password"><br>

<p> <a href="registration-page.php">NEW USER REGISTRATION </a></p>
<input type="submit"id="log-in-button"></input><!--end of button-->
</form>
</div><!--end of login-inside-->
</div><!--end of login-->



<center><table border="1">

<tr>
<th>USERID</th>
<th >FIRST NAME</th>
<th>LAST NAME</th>
<th>EMAIL ID</th>
<th>PASSWORD</th>
<th>PHOTO</th>
<th>DATETIME</th>

<th>DELETE</th>
<th>UPDATE</th>
</tr>

<?php

include('connect.php');

$display="select * from registration";
$row=mysql_query($display);
$count=mysql_num_rows($row);

if($count=="")
			  {
				  echo"<tr><td colspan='9'>NO RECORD FOUND</td></tr>";
			  }
			  else
			  {
				 
while($record=mysql_fetch_array($row))
{
	$userid=$record['userid'];
	$firstname=$record['firstname'];
	$lastname=$record['lastname'];
	$emailid=$record['emailid'];
	$password=$record['password'];
	$photo=$record['photo'];
	$datetime=$record['datetime'];
	 
	
				 
	
	echo "<tr>
	<td>$userid</td>
	<td>$firstname</td>
<td>$lastname</td>
<td>$emailid</td>
<td>$password</td>
<td><img src='photo/$photo' width='50' height='50' alt=' '/></td>
<td>$datetime</td>

<td><a href='delete.php?userid=$userid'>DELETE</a></td>
<td><a href='updateuser.php?userid=$userid'>UPDATE</a></td>


</tr>";
}
}



   
			 


?>
</table></center>
<!--<div class="footer">
<br><h4> (c) Copyright 2016 STDIO BLUE BIRD</h4>
</div>--><!--end of footer-->
</div><!--end of main-->
</body>
</html>
