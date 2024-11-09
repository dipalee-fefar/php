//sum
<?php
function sum($n)
{
	if($n < 0)
		return -1;
	if($n == 0)
		return 1;
	return($n *sum($n-1));
}
echo sum(10);
?>