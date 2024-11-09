
<?php
$str = "Yashvi Bhalara";
$str1 = " ";
$j = 0;
for($i=strlen($str)-1;$i>=0;$i--,$j++)
{
	$str1[$j] = $str[$i];
}
echo "$str<br>";
echo "$str1";
?>