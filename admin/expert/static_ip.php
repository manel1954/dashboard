<?php 
session_start();
$ip=($_POST["static_ip"]);
$ip_router=($_POST["ip_router"]);



//$_SESSION["static_ip"]=$static_ip;

$static_ip="static ip_address=" . $ip . "/24";
$dns="static domain_name_servers=" . $ip_router . " 8.8.8.8";

//esta linea escribe simplemente interface eth0
exec("sudo sed -i '44c interface eth0' /etc/dhcpcd.conf");

exec("sudo sed -i '45c $static_ip' /etc/dhcpcd.conf");

//esta linea escribe simplemente static router
exec("sudo sed -i '47c static routers=$ip_router' /etc/dhcpcd.conf");

//esta linea escribe simplemente ip + dns
exec("sudo sed -i '48c static routers=$dns' /etc/dhcpcd.conf");

header("Location:index.php");	
?>
