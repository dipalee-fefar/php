<?php
if(isset($_GET['n1'])){
$n = $_GET['n1'];
$i = 1;
$n1 = 1;
$n2 = 2;
$n3 = 0;
for($i=3;$i<=$n;$i++)
{
	$n3 = $n1+$n2;
	echo $n3. "<br>";
	$n1 = $n2;
	$n2 = $n3;
}
}
?>
