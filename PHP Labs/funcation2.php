<?php
$a=array(10,20,30,40,50,60,70);
for($i=0; $i < count($a); $i++)
{ 
	echo $a[$i]."<br>";
}
array_push($a, 20);
echo "<br>";
for ($i=0; $i < count($a); $i++) { 
	echo $a[$i]."<br>";
}
array_pop($a);
echo "<br>";

for ($i=0; $i < count($a); $i++) { 
	echo $a[$i]."<br>";
}
array_shift($a);
echo "<br>";
for ($i=0; $i < count($a); $i++) { 
	echo $a[$i]."<br>";
}
array_unshift($a, 5);

echo "<br>";



$a = array_slice($a,2,3);
for ($i=0; $i < count($a); $i++) 
{ 
	echo $a[$i]."<br>";
}
shuffle($a);
echo "<br>";
for ($i=0; $i < count($a); $i++) { 
	echo $a[$i]."<br>";
}

?>