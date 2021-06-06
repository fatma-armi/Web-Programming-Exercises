<?php

	include_once("koneksi.php");
	if(isset($_POST['update'])){
		$id_tma = $_POST['id_tma'];
		$nama = $_POST['nama'];
		$nilai = $_POST['nilai'];
		$waktu = $_POST['waktu'];
	}


		$result = mysqli_query($koneksi, "UPDATE tma set nama = '$nama', nilai = 
			'$nilai', waktu = '$waktu'");

		if($result){
			header("Location: index.php");
		}
	}

	$id = $_GET['id'];
	$result = mysqli_query($koneksi, "SELECT * FROM tma WHERE id_tma='$id_tma'");

	while($user_data = mysqli_fetch_array($result))
	{
		$id_tma = $user_data['id_tma'];
		$nama = $user_data['nama'];
		$nilai = $user_data['nilai'];
		$waktu = $user_data['waktu'];;

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
				<td>ID TMA</td>
				<td><input type="number" name="id" value="<?php echo $id;?>"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
			</tr>
			<tr>
				<td>Nilai</td>
				<td><input type="text" name="nilai" value="<?php echo $nilai;?>"></td>
			</tr>
			<tr>
				<td>Waktu</td>
				<td><input type="text" name="waktu" value="<?php echo $waktu;?>"></td>
			</tr>
			<tr>
				<button type="submit" name="submit" class="btn btn-info">Submit</button>
			</tr>
		</table>
	</form>
</div>
</body>
</html>