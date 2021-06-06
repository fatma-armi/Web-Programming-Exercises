<?php
include_once("koneksi.php");
$id_tma = $_GET['id_tma'];
$result = mysqli_query($mysqli, "DELETE FROM tma WHERE id_tma='$id_tma'");
if($result){
	header("Location:index.php");
}
?>