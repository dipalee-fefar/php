<?php
function pattern4($n)
{
 $num = 1;
 
 for ($i = 0; $i < $n; $i++)
 {
  for ($j = 0; $j <= $i; $j++ )
  {
   echo $num." ";
  }
   $num = $num + 1;
    echo "\n";
 }
}
 $n = 4;
 pattern4($n);
?>
