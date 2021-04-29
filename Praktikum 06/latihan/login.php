<?php

$files = "user.txt";
$myfile = fopen($files, 'r') or die("File error");
$userdata = array();
while (!feof($myfile)) {
 	$user = explode("|", fgets($myfile));
 	array_push($userdata, $user);
}
fclose($myfile);

if (isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	foreach ($userdata as $users) {
		if((trim($users[0])==$username) && (trim($users[2])==$password)){
			setcookie('nama', trim($users[1]), time()+3*30*24*3600,"/");
			$_COOKIE['nama'] = trim($users[1]);
			setcookie('acak', rand(1,100), time()+3*30*24*3600,"/");
		}

		if(isset($_COOKIE['nama'])){
			header("Location: game.php");
		}
	}

	echo "Login gagal, silahkan <a href='form.html'>log in</a> kembali";
} 

?>