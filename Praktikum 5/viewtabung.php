<?php

//membuka file
$namafile = "datatabung.dat";
$myfile = fopen($namafile, "r") or die("File tidak bisa dibuka!");

echo"<h2>Data Ukuran Tabung</h2>";

//tabe;
echo"<table border= '1'>";
echo("<tr>
	<th>NAMA TABUNG</th>
	<th>DIAMETER</th>
	<th>TINGGI</th>
	<th>LUAS</th>
	</tr>");

//loop tabel dan isi
while(!feof($myfile)){
	echo("<tr>");
	$dataTabung = explode(",", fgets($myfile));

	//hyperlink file hitungluas.php
	$link = "http://localhost/PemrogramanWeb/Praktikum%205/luastabung.php?n=$dataTabung[0]&d=$dataTabung[1]&t=$dataTabung[2]";
	echo("
		<td>$dataTabung[0]</td>
		<td>$dataTabung[1]</td>
		<td>$dataTabung[2]</td>
		<td><a href=$link target='_blank'>view</a></td>
		");
	echo("<tr>");
};

echo("</table>");

fclose($myfile);
?>