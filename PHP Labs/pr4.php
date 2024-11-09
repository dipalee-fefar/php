<?php
if(isset($_GET['num1']))
{
$x = $_GET['num1'];

if($x==0)
{
	echo("number is zero");
}
else if($x>=0)
{
	echo("number is positive");
}
else
{
	echo("number is nagative");
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<
	<title></title>
</head>
<body>
	<form>
		Enter number:
		<input type="text" name="num1">
		<br>
		<input type="submit" value="submit">
	</form>

</body>
</html>