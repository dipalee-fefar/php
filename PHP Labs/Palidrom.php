<?php
if(isset($_GET['n1'])){
$n = $_GET['n1'];
$i = 1;
$number = $n;
$reverse = 0;
$num;
while ($n!=0) {
	$num = $n%10;
	$reverse = ($reverse*10)+$num;
	$n = floor($n/10);
}
if($number==$reverse)
{
	print("palidrom");
}
else
{
	print("not palidrom");
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