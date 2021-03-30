<?php
function hitungDenda($tglHarusKembali, $tglKembali){
	$pecah1 = explode("-", $tglHarusKembali);
	$hari1 = $pecah1[2];
	$bulan1 = $pecah1[1];
	$tahun1 = $pecah1[0];

	$pecah2 = explode("-", $tglKembali);
	$hari2 = $pecah2[2];
	$bulan2 = $pecah2[1];
	$tahun2 = $pecah2[0];

	$tgl1 = GregorianToJD($bulan1, $hari1, $tahun1);
	$tgl2 = GregorianToJD($bulan2, $hari2, $tahun2);

	$selisih = $tgl2 - $tgl1;

	$denda = $selisih * 3000;

	return $denda;
}
echo "Besarnya denda adalah: Rp. ".hitungDenda("2021-01-03", "2021-01-05");
?>