<?php 
session_start();
$ip=($_POST["ip_statica"]); // ip estatica ej: 192.168.1.91

$statica_ip="static ip_address=" . $ip . "/24";

//esta linea escribe simplemente interface eth0
exec("sudo sed -i '44c interface eth0' /etc/dhcpcd.conf");

exec("sudo sed -i '45c $statica_ip' /etc/dhcpcd.conf");

header("Location:ip_static.php");	
?>
