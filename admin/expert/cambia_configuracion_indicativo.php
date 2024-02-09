<?php 
session_start();
$indicativo=strtoupper($_POST["indicativo"]);
$_SESSION["indicativo"]=$indicativo;

$indicativo = substr("$indicativo", 9, 11);

exec("sudo sed -i '1c Callsign=$indicativo' /etc/dhcpcd.conf");






header("Location:index.php");	

?>
