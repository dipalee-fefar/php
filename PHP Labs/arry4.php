<?php
echo "descending array"."<br>";
$num = array(10,20,30,40,50);
$temp=0;

for($i=0;$i < count($num);$i++)
{
	for($j=$i+1;$j<count($num);$j++)
	{
		if($num[$i] < $num[$j])
		{
			$num[$i]=$temp;
			$num[$i]=$num[$j];
			$temp=$num[$j];

		}
	}
	echo ("sorting array");
	for($i=0;$i<$num;$i++)
	{
		echo "\n",$num[$i];
	}
}
?>