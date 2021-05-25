<?php
include_once("config.php");
$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM karyawan WHERE id_karyawan='$id'");
if($result){
	header("Location:index.php");
}
?>