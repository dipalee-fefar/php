//table 
<?php
if(isset($_GET['n1'])){
$n = $_GET['n1'];
$i=1;
for($i=1;$i<=$n;$i++)
{
	echo  $n."*" .$i. "=" .($n*$i)."<br>";
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
		<input type="text" name="n1">
		<input type="submit" value="submit">
	</form>
</body>
</html>
