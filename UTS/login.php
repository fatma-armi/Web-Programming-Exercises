<?php
session_start();
if(isset($_POST['submit'])){
	$nama = $_POST['nama'];
	setcookie("nama", $nama, time()+3*30*24*3600,"/");
	$_SESSION['nyawa'] = 5;
	$_SESSION['skor'] = 0;
	$_SESSION['a'] = rand(0, 20);
	$_SESSION['b'] = rand(0, 20);
	header("Location: index.php");
}
?>