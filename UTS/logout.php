<?php
session_start();
session_destroy();
setcookie("nama", "", time()+3*30*24*3600,"/");
header("Location: index.php");
?>