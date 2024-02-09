<?php 
session_start();
$static_ip=strtoupper($_POST["static_ip"]);
$_SESSION["static_ip"]=$static_ip;
exec("sudo sed -i '45c $static_ip' /etc/dhcpcd.conf");
header("Location:index.php");	
?>
