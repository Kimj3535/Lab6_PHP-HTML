<!DOCTYPE>
<html>
<head>
<title> Hello Message </title>
</head>
<body>
<form action "" method="get">
First Name:
<input type="text" name="firstname"> <br><br> 
Last Name:
<input type="text" name="lastname"> <br><br>
<input type="submit" value="Submit">
</form>
</body>
</html>

<?php
if(isset($_GET['firstname'])){
	$firstname=$_GET['firstname'];
	$lastname=$_GET['lastname'];
	echo 'Hello',"  " .$firstname, "  " .$lastname; exit;
}

?>