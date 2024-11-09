<?php
function display($number)
{
	if($number <= 50)
	{
		echo "$number <br>";
		display($number+1);
	}
}
display(1);
?>