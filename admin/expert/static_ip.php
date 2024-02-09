<?php 
session_start();
$ip=($_POST["static_ip"]);




//$_SESSION["static_ip"]=$static_ip;

$static_ip="static ip_address=" . $ip . "/24";


//esta linea escribe simplemente interface eth0
exec("sudo sed -i '44c interface eth0' /etc/dhcpcd.conf");

exec("sudo sed -i '45c $static_ip' /etc/dhcpcd.conf");
header("Location:index.php");	
?>
