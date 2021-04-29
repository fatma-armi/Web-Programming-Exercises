<?php
include('cek.php');
echo "Hallo, nama saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!";

echo "<form method='get'>
Bilangan tebakan anda : <input type='text' name='tebakan'>
<input type='submit' name='submit' value='Submit'>
</form>";

$bilangan = $_COOKIE['acak'];

if(isset($_GET['tebakan'])){
	$angkatebakan = $_GET['tebakan'];
	if ($angkatebakan > $bilangan){
		echo "Waaah… masih salah ya, bilangan tebakan Anda terlalu tinggi.";
	} else if ($angkatebakan < $bilangan){
		echo "Waaah… masih salah ya, bilangan tebakan Anda terlalu kecil.";
	} else {
		echo "Selamat ya… Anda benar, saya telah memilih bilangan".$bilangan."";
		setcookie("acak", "", time()+3*30*24*3600,"/");
        setcookie("acak", rand(0,100), time()+3*30*24*3600,"/");
        echo ("<br><a href='game.php'>Mulai lagi</a>");
	}
}

echo "<br><a href='logout.php'>Log Out</a>";
?>