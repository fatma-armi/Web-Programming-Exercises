<!DOCTYPE html>
<html>
<head>
	<title>Add Karyawan</title>
<link rel="icon" href="img/logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

	
</head>
<body style="background-color: #f8a5c2">
	<div class="container-fluid" style="padding-top: 2%">
	<a href="index.php" class="btn btn-primary">Kembali</a>
	<br><br>

	<form action="add.php" method="post" name="forml">
		<table width="25%" border="0" class="table table-light">
			<tr>
				<td>ID Karyawan</td>
				<td><input type="number" name="id"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email"></td>
			</tr>	
				<td>Telepon</td>
				<td><input type="text" name="telepon"></td>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="radio" id="pria" name="gender" value="pria">Pria
				<input type="radio" id="wanita" name="gender" value="wanita">Wanita</td>
			</tr>
				<td>Tempat Lahir</td>
				<td><input type="text" name="tempat_lahir"></td>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tanggal_lahir"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="submit" class="btn btn-danger"></td>
			</tr>
		</table>
	</form>

	<?php
	if(isset($_POST['submit'])){
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$telepon = $_POST['telepon'];
		$alamat = $_POST['alamat'];
		$gender = $_POST['gender'];
		$tempat_lahir = $_POST['tempat_lahir'];
		$tanggal_lahir = $_POST['tanggal_lahir'];

		include_once("config.php");

		$result = mysqli_query($mysqli, "INSERT INTO karyawan (id_karyawan, nama, email, telepon, alamat, jenis_kelamin, tempat_lahir, tanggal_lahir) VALUES ('$id', '$nama', '$email', '$telepon', '$alamat', '$gender', '$tempat_lahir', '$tanggal_lahir')");

		if($result){
			echo "data karyawan berhasil ditambahkan";
		}
	}

	?>
</div>
</body>
</html>