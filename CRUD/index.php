<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM karyawan ORDER BY id_karyawan DESC");
?>

<html>
<head>
	<title>Homepage</title>
	<link rel="icon" href="img/logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

	
</head>
<body style="background-color: #f8a5c2">
	<div class="container-fluid" style="padding-top: 2%">
	<a href="add.php" class="btn btn-primary">Add Karyawan</a><br><br>
	<table width='80%' border=1 class="table table-light  ">
		<tr class="table-danger">
			<th>ID Karyawan</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Telepon</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Action</th>
		</tr>
		<?php
		while($user_data = mysqli_fetch_array($result)){
			echo "<tr>";
			echo "<td>".$user_data['id_karyawan'];
			echo "<td>".$user_data['nama'];
			echo "<td>".$user_data['email'];
			echo "<td>".$user_data['telepon'];
			echo "<td>".$user_data['alamat'];
			echo "<td>".$user_data['jenis_kelamin'];
			echo "<td>".$user_data['tempat_lahir'];
			echo "<td>".$user_data['tanggal_lahir'];
			echo "<td><a href='edit.php?id=$user_data[id_karyawan]' class='btn btn-warning'>Edit</a>  <a href='delete.php?id=$user_data[id_karyawan]' class='btn btn-danger'>Delete</a></td></tr>";
		}
		?>
	</table>
</div>
</body>
</html>