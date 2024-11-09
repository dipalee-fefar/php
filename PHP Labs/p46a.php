<?php
function pattern2($n)
{
   for ($i = 0; $i < $n; $i++)
 {
  for($j = 0; $j < $i; $j++ )
  {
      echo "*";
  }
  echo "\n";
 }
}
  $n = 5;
 pattern2($n);
?>
