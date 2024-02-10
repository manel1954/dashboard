<?php 
session_start();
$ip_router=($_POST["ip_router"]); // ip del router ej: 192.168.1.1

$dns="static domain_name_servers=" . $ip_router . " 8.8.8.8";
$ip_del_router="static router=" . $ip_router;

//esta linea escribe simplemente static router
exec("sudo sed -i '47c $ip_del_router' /etc/dhcpcd.conf");

//esta linea escribe simplemente ip + dns
exec("sudo sed -i '48c $dns' /etc/dhcpcd.conf");

header("Location:ip_static.php");	
?>