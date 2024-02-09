<?php 
session_start();
$ip=($_POST["ip"]);
$ip=$ip . "/24";
exec("sudo sed -i '52c static ip_address=$ip' /etc/dhcpcd.conf");

header("Location:poner_ip_fija.php");

?>