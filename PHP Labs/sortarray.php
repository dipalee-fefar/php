<?php
$names=array("chhayan","magan","champa","chadu");
sort($names);
for($i=0;$i<count($names);$i++)
{
	echo $names[$i]."<br>";
}
?>
<?php
$numbers=array(4,2,4,7);
sort($numbers);
for($i=0;$i<count($numbers);$i++)
{
	echo $numbers[$i]."<br>";
}
?>
<?php
$names=array("chhayan","magan","champa","chadu");
rsort($names);
for($i=0;$i<count($names);$i++)
{
	echo $names[$i]."<br>";
}
?>