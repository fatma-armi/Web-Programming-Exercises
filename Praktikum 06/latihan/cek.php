<?php

if (!isset($_COOKIE['nama'])){
    echo "<p>Maaf anda tidak memiliki akses ke halaman ini</p>";
    echo "<p>Silahkan <a href=form.html>login</a> terlebih dahulu</p>";
	exit();
}

?>