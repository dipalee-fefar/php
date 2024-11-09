<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$namemsg = "Name can not be empty";
}
else
{
	if((preg_match("/^[a-zA-Z] + (?:\s+[a-zA-Z]+)*$/",$_POST["name"]))?FALSE:TRUE)
	{
		$namemsg = "please enter correct name";
	}
}
//validation for email
if($_POST["email"]=="")
{
	$emailmsg = "Email can not be emapty";
}
else
{
	if((preg_match("/^ ([a-z0-9\+_\-])+(\.[a-z 0-9\+\-]+)*@([a-z 0-9\-]+\.)+[a-z]{2,6}$lix",$_POST["email"]))?FALSE:TRUE)
	{
		$emailmsg = "please enter correct email";
	}
}
//validation of grnder
if(!isset($_POST["gender"]))
{
	$gendermsg = "please select gender";
}
echo $namemsg."<br>".$emailmsg."<br>".$gendermsg;
?>
</body>
</html>