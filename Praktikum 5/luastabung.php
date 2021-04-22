<?php

$nama = $_GET['n'];
$diameter = $_GET['d'];
$jarijari = $diameter/2;
$tinggitabung = $_GET['t'];

$kelilinglingkaran = (22/7) * $jarijari * 2;
$luaslingkaran = (22/7) * ($jarijari ** 2);
$luas = ($kelilinglingkaran * $tinggitabung) + ($luaslingkaran * 2);

echo "Luas Tabung $nama dengan diameter $diameter dan tinggi $tinggitabung adalah $luas satuan luas.";
?>