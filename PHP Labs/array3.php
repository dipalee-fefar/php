<?php
echo "Multidimansion array"."<br>";
$cars = array(array("kia",20,10),
array("buw",30,50),
array("volvo",40,20));
echo "carname &nbsp;&nbsp;&nbspQuntity &nbsp;&nbsp;&nbsp;&nbsp  Soldown.<br>";
for ($i=0; $i < count($cars); $i++) 
{ 
	for ($j=0; $j < count($cars[$i]); $j++) 
	{ 
		echo ($cars[$i][$j]);
		echo ("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp");	
	}

echo "<br>";
}
?>