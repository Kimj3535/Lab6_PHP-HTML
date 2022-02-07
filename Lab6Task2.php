<!DOCTYPE>
<html>
<head>
<title> TEMPERATURE CONVERTER </title>
</head>
<body>
<form action "" method="post">
Celsius:
<input type="radio" name="units" value="Celsius" required>
Fahrenheit:
<input type="radio" name="units" value="Fahrenheit" required>
Temperature:
<input type="text" name="temperature" required> <br><br> 
<input type="submit" name="submit" value="CONVERT">
</form>
</body>
</html>
<?php

if(isset($_POST['submit'])){
$temperature = $_POST['temperature'];
$units = $_POST['units'];
if($units == 'Celsius'){
$result = ($temperature * 9 / 5) + 32;
echo 'The converted temperature is', "  " . $result;
}else{
$result = ($temperature - 32) * 5 / 9;
echo 'The converted tempature is', "  " . $result; 
}
}

?>