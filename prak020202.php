<?php
$baris = 4;
$kolom = 5;
echo"<table border ='1'>";
$no = 1;
for($i = 0; $i < $baris; $i++){
	echo "<tr>";
	for($j = 0; $j < $kolom; $j++){
		echo"<td>$no</td>";
		$no++;
	}
	echo "</tr>";
}
echo "</table>";
?>
