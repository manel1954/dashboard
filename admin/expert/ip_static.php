<?php 
session_start();

$static_ip = exec("sudo sed -n '45p' /etc/dhcpcd.conf");
$ip_router = exec("sudo sed -n '47p' /etc/dhcpcd.conf");

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="pi-start">
    <meta name="description" content="pi-star">
    <meta name="author" content="EA3EIZ">

<!-- refresca la página cada 10 segundo (implantado por mi) -->
<!-- ====================================================== -->
<!-- <meta http-equiv="refresh" content="5" /> -->

    <link rel="shortcut icon" href="img/favicon.png">
    <title>IP FIJA</title>

<style type="text/css">
    body{
background:#000;
    }

</style>
</head>
<body>
<div class="container"> 
<br><br><br>
<!--============== CAJA LOGIN ====================================-->      
 <div class="row">
    <div class="col-md-4 config_especial"><br>     
        <h5>CONFIGURACIÓN IP FIJA</h5>

<form method="post" action="static_ip.php">

        <input name="ip_statica" class="fuente_boton3 form-control" placeholder="Introduce Ip fija+ Enter">
            <div class="fondo_datos">Static ip: 
                <span class="color_verde"><?php echo $static_ip;?></span>
            </div>         
</form>

<form method="post" action="router_ip.php">

        <input name="ip_router" class="fuente_boton3 form-control" placeholder="Introduce Ip Router + Enter">
            <div class="fondo_datos">ip del Router: 
                <span class="color_verde"><?php echo $ip_router;?></span>
            </div>         
</form>
<br>
<form method="post" action="../../index.php">
    <button class="btn btn-success btn-sm btn-block" type="submit">VOLVER AL DASHBOARD</button>
</form>
<br>
   </div><!-- "col-md-4 -->
</div><!-- row -->

<!--============== FIN CAJA LOGIN ====================== -->
</div><!-- container -->

    <!-- jQuery -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>


</body>
</html>