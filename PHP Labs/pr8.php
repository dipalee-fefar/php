//for loop
<?php
if(isset($_GET['n1'])){
$n = $_GET['n1'];
$i = 1;
for($i=1;$i<=$n;$i++)
{
	echo("Hello"."<br>");
}
}
?>
<!DOCTYPE html>
<html>
<head>
	
	<title></title>
</head>
<body>
	<form>
		Enter number::
		<input type="text" name="n1"><br/>
		<input type="submit" value="submit">
	</form>
</body>
</html>