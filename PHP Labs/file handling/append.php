<?php
$myfile =fopen("newfile1.txt", "a")or
die("unable to create new file !");
$txt ="darshan university\n";
fwrite($myfile,$txt);
fclose($myfile);
?>