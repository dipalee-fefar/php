<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$myfile  =fopen("newfile1.txt", "r")or
	die ("unable to open file!");
	fread($myfile,filesize("newfile1.txt"));

	while (!feof($myfile))
	 {
		echo fgets($myfile)."<br>";
	}

	while (!feof($myfile))
	 {
		echo fgetc($myfile);
	}
	fclose($myfile);
?>
</body>
</html>