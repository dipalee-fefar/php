//for loop
<?php
if(isset($_GET['n1'])){
$n = $_GET['n1'];
$i = 1;
for($i=1;$i<=$n;$i++)
{
	if($i%2==0)
	{
		echo($i."<br>");
	}
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
//while loop
<?php
if(isset($_GET['n1']))
{
	$n = $_GET['n1'];
	$i=1;

	while ($i<=$n) {
		if($i%2==0)
		{
			echo($i."<br>");
		}
		$i++;
	}
}
?>
//do..while
<?php
if(isset($_GET['n1']))
{
	$n = $_GET['n1'];
	$i = 1;
	do{
		
			echo(i."<br>");
			$i+2;
	
	}while($i<=$n);

}
?>