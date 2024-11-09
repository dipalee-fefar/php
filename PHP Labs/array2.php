<?php
echo "associative array"."<br>";
$color = array("r"=>"red","p"=>"pink","y"=>"yellow","g"=>"green");
foreach ($color as $key=>$val) {

	echo $kay."--".$val.("<br>");
}
#we can print associative array without loop using print_r() funcation
echo "<br>";
print_r($color);
?>
