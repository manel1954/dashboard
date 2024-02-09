<?php 
session_start();
$puerta_enlace=($_POST["puerta_enlace"]);

exec("sudo sed -i '53c static routers=$puerta_enlace' /etc/dhcpcd.conf");
exec("sudo sed -i '54c static domain_name_servers=$puerta_enlace' /etc/dhcpcd.conf");

header("Location:poner_ip_fija.php");

?>