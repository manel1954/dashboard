<?php 
session_start();
$ip=($_POST["ip_statica"]); // ip estatica ej: 192.168.1.91
$ip_router=($_POST["ip_router"]); // ip del router ej: 192.168.1.1

$statica_ip="static ip_address=" . $ip . "/24";
$dns="static domain_name_servers=" . $ip_router . " 8.8.8.8";
$ip_del_router="static router=" . $ip_router;

//esta linea escribe simplemente interface eth0
exec("sudo sed -i '44c interface eth0' /etc/dhcpcd.conf");

exec("sudo sed -i '45c $statica_ip' /etc/dhcpcd.conf");

//esta linea escribe simplemente static router
exec("sudo sed -i '47c $ip_del_router' /etc/dhcpcd.conf");

//esta linea escribe simplemente ip + dns
exec("sudo sed -i '48c $dns' /etc/dhcpcd.conf");

header("Location:index.php");	
?>
