<?php

	include_once("config.php");
	if(isset($_POST['update'])){
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$telepon = $_POST['telepon'];
		$alamat = $_POST['alamat'];
		$gender = $_POST['gender'];
		$tempat_lahir = $_POST['tempat_lahir'];
		$tanggal_lahir = $_POST['tanggal_lahir'];


		$result = mysqli_query($mysqli, "UPDATE karyawan set nama = '$nama', email = 
			'$email', telepon = '$telepon', alamat='$alamat', jenis_kelamin='$gender', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir' WHERE id_karyawan = '$id'");

		if($result){
			header("Location: index.php");
		}
	}

	$id = $_GET['id'];
	$result = mysqli_query($mysqli, "SELECT * FROM karyawan WHERE id_karyawan='$id'");

	while($user_data = mysqli_fetch_array($result))
	{
		$id = $user_data['id_karyawan'];
		$nama = $user_data['nama'];
		$email = $user_data['email'];
		$telepon = $user_data['telepon'];
		$alamat = $user_data['alamat'];
		$gender = $user_data['jenis_kelamin'];
		$tempat_lahir = $user_data['tempat_lahir'];
		$tanggal_lahir = $user_data['tanggal_lahir'];

	}

	?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Mahasiswa</title>
<link rel="icon" href="img/logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

	
</head>
<body style="background-color: #f8a5c2">
	<div class="container-fluid" style="padding-top: 2%">	
	<a href="index.php" class="btn btn-primary">Home</a>
	<br><br>

	<form action="edit.php" method="post" name="update user">
		<table width="25%" border="0" class="table table-light">
			<tr>
				<td>ID Karyawan</td>
				<td><input type="number" name="id" value="<?php echo $id;?>"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value="<?php echo $email;?>"></td>
			</tr>	
				<td>Telepon</td>
				<td><input type="text" name="telepon" value="<?php echo $telepon;?>"></td>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $alamat;?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="radio" id="pria" name="gender" <?php if($gender == 'pria'){?> checked="true" <?php } ?> >Pria
				<input type="radio" id="pria" name="gender" <?php if($gender == 'wanita'){?> checked="true" <?php }?> >Wanita</td>
			</tr>
				<td>Tempat Lahir</td>
				<td><input type="text" name="tempat_lahir" value="<?php echo $tempat_lahir;?>"></td>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tanggal_lahir" value="<?php echo $tanggal_lahir;?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="update" value="update" class="btn btn-danger"></td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>