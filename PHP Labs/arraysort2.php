<?php
$age=array("sagar"=>"144","yashvi"=>"135","Anjali"=>"115","Rinku"=>"108");
ksort($age);
foreach ($age as $key => $value) 
{
	echo $key."=>" .$value."<br>";
}

?>
<br>
<?php
$age=array("sagar"=>"144","yashvi"=>"135","Anjali"=>"115","Rinku"=>"108");
asort($age);
foreach ($age as $key => $value) 
{
	echo $key."=>" .$value."<br>";
}

?>
<br>
<?php
$age=array("sagar"=>"144","yashvi"=>"135","Anjali"=>"115","Rinku"=>"108");
krsort($age);
foreach ($age as $key => $value) 
{
	echo $key."=>" .$value."<br>";
}

?>
<br>
<?php
$age=array("sagar"=>"144","yashvi"=>"135","Anjali"=>"115","Rinku"=>"108");
arsort($age);
foreach ($age as $key => $value) 
{
	echo $key."=>" .$value."<br>";
}

?>
<br>
