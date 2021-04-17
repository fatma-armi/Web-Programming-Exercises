<?php
$nameFile = "datamhs.dat";
$myfile	= fopen($nameFile,"r")or die("Tidak bisa buka file!");
echo "<h2>Data Mahasiswa</h2>";

$tanggalNow = explode("-", date("Y-m-d"));
$dateNow = $tanggalNow[2];
$monthNow = $tanggalNow[1];
$yearNow = $tanggalNow[0];
$jd2 = gregoriantojd($monthNow, $dateNow, $yearNow);

function umur(String $tgllahir, $jd2){
	$tgllahir = explode("-", $tgllahir);
	$dateofbirth = $tgllahir[2];
	$monthofbirth = $tgllahir[1];
	$yearofbirth = $tgllahir[0];
	$jd1 = gregoriantojd($monthofbirth, $dateofbirth, $yearofbirth);

$usia = intval(($jd2 - $jd1)/365.25);
return $usia;
}

echo "<center><br>";
echo "<table border='1'>";
echo("<tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama Mhs</th>
        <th>Tanggal Lahir</th>
        <th>Tempat Lahir</th>
        <th>Usia (Tahun)</th>
    <tr>");
$nomer = 1;
$jmldata = 0;
while (!feof($myfile)){
    echo("<tr>");
    $datamhs = explode("|", fgets($myfile));

    if ($datamhs[0] != ''){
        $usia = umur($datamhs[2], $jd2);
        echo("
            <td>$nomer</td>
            <td>$datamhs[0]</td>
            <td>$datamhs[1]</td>
            <td>$datamhs[2]</td>
            <td>$datamhs[3]</td>
            <td>$usia</td>");
        $nomer++;
        $jmldata++;
    }
    echo("</tr>");
}
echo "</table>";
echo "/<center>";

echo "Jumlah data: ".$jmldata;
?>

