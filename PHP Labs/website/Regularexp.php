<?php
//preg_match()
$str = "Yashvi Bhalara";
$pattern = "/chhagan/i";
echo $str."<br>";
echo preg_match($pattern, $str)."<br>";

//preg_match_all
$str = "The rain in SPAIN falls mainly on the plains.";
echo $str."<br>";
$pattern1 = "/ain/i";
echo "no of matches".preg_match_all($pattern1, $str)."<br>";

//preg_replace
$str = "Darshan collage !";
$pattern = "/college/i";
echo preg_replace($pattern, "University", $str);
?>