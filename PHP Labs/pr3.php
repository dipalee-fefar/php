<?php
	echo("<br>");
	$x = 5;
	$y = 2;
	$z = $x*$y;
	echo "multiplication of" .$x. "and" .$y. "is" .$z;
?>

<?php
	$name ="Yashvi";
	$str ="My name is $name";
	$b = 32;
	settype($b,"string");
	echo("<br>");
	echo ($b);
?>
<!--if else odd even-->

<?php

	$x = 4;
	echo("<br>");
	if($x%2==0)
	{
		echo "number is even".$x;

	}
	else
	{
		echo "number is odd".$x;
	}

?>

<!--grater number-->

<?php
if (isset($_GET['num1']) && isset($_GET['num2'])) 
{
	

$x = $_GET['num1'];
$y = $_GET['num2'];

echo("<br>");
if($x>$y)
{
	echo "number is grater";
}
else if($x<$y)
{
	echo "number is less ";
}
else
{
	echo "Both are equal";
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
		<div>
			Enter first number:
			<input type="text" name="num1">
		</div>
		<br/>
		<div>
			Enter second number:
			<input type="text" name="num2">
		</div>
		<input type="submit" value="submit">
	</form>

</body>
</html>