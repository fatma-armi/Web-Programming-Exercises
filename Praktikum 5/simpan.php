<?php

//membukafile
$namafile = "datamhs.dat";
$myfile = fopen($namafile, "a") or die("File tidak bisa dibuka!");

//membaca input
$NIM = $_POST['nim'];
$NAMA = $_POST['nama'];
$TGLLHR = $_POST['tgllhr'];
$TMPTLHR = $_POST['tmptlhr'];

fwrite($myfile, "\n".$NIM."|".$NAMA."|".$TGLLHR."|".$TMPTLHR."");
fclose($myfile);

echo "Data telah ditambahkan";
?>