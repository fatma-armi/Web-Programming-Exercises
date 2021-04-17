<?php
$nameFile = "myfile.txt";
$myfile	= fopen($nameFile,"r")or die("Tidak bisa buka file!");
echo fread($myfile, filesize($nameFile));
fclose($myfile);
?>