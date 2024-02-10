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
    <meta name="keywords" content="pi-star">
    <meta name="description" content="pi-star">
    <meta name="author" content="EA3EIZ">
    <title>IP FIJA</title>

    
    

<style type="text/css">
    body{
background:#000;
    }

.color_verde{
    color:#21FF06;
    }     

.boton3{
    background:#21FF06;
    width: 300px;
    height: 35px;
    font-size: 15px;
    border-radius: 5px;
    border:1px transparent;
    cursor: pointer;
    }
h5{

    color:#FFFFFF;
    font-size:18px;
    text-transform: none;
} 
.fondo_datos{
    margin-top: 1px;
    margin-bottom: 7px;
    width: 300px;
    height: 25px;
    text-align:center;
    padding: 0px 0px 0px 0px;
    background-color: #4C4C4C;
    border-radius: 5px 5px 5px 5px;
    font-size: 16px;
    color:#FFFFFF;
    border: 1px solid #ccc;
}
.form-control {
    width: 296px;
    height: 25px;
    text-align: center;
    font-size: 16px;
    border-radius: 5px 5px 5px 5px;
}
</style>
</head>
<body>

<br><br><br>
<!--============== CAJA LOGIN ====================================-->      
    
        <h5>CONFIGURACIÓN IP FIJA</h5>

<form method="post" action="static_ip.php">

        <input name="ip_statica" class="fuente_boton3 form-control" placeholder="Introduce ip fija + Enter">
            <div class="fondo_datos"> 
                <span class="color_verde"><?php echo $static_ip;?></span>
            </div>         
</form>
<br><br>
<form method="post" action="router_ip.php">

        <input name="ip_router" class="fuente_boton3 form-control" placeholder="Introduce ip del router  + Enter">
            <div class="fondo_datos"> 
                <span class="color_verde"><?php echo $ip_router;?></span>
            </div>         
</form>

<br>
<form method="post" action="../../index.php">
    <button class="boton3" type="submit">VOLVER AL DASHBOARD</button>
</form>
<br>


<!--============== FIN CAJA LOGIN ====================== -->

</body>
</html>