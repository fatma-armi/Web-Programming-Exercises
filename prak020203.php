<?php
$baris = 4;
$kolom = 5;
echo"<table border ='1'>";
$no = 1;
for($i = 0; $i < $baris; $i++){
	echo "<tr>";
	for($j = 0; $j < $kolom; $j++){
		if($no % 2 == 0){
			$color = "white";
			$cellbg = "style = 'background-color : red;'";
	}
		else{
		$color = "red";
		$cellbg = "style = 'background-color : white;'";
	}
		echo"<td <?php $cellbg; ?><font color = $color>$no</font></td>";
		$no++;
	}
	echo "</tr>";
}
echo "</table>";
?>
