<?php 
session_start();

$ip = exec("sed -n '52p' /etc/dhcpcd.conf");
$ip = substr("$ip", 18, 15);

$puerta_enlace = exec("sed -n '53p' /etc/dhcpcd.conf");
$puerta_enlace = substr("$puerta_enlace", 15, 15);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Allstar Link">
    <meta name="description" content="Allstar Link">
    <meta name="author" content="EA3EIZ">

<!-- refresca la página cada 10 segundo (implantado por mi) -->
<!-- ====================================================== -->
<!-- <meta http-equiv="refresh" content="5" /> -->

    <link rel="shortcut icon" href="img/favicon.png">
    <title>poner ip fija</title>

    <!-- CSS Bootstrap--> 
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="custom/bootstrap/css/bootstrap.css" rel="stylesheet">
    
    <!-- CSS tema -->
    <link href="css/freelancer.css" rel="stylesheet">
    
    <!-- <Fuentes -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

<style type="text/css">
    body{
background-image: url(fondo_02.png);
    }
    .boton{
        width:400px;
    background:#f00;
        color:#fff;
        height:50px;
    } 
    .boton_salir{
        width:400px;
        height:50px;
    background:#21FF06;
        color:#000; 
    }
.color_verde{
    color:#21FF06;
    }      
.ip_address{
    margin-top: 1px;
    margin-bottom: 7px;
    width: 400px;
    height: 25px;
    text-align:center;
    padding: 0px 0px 0px 0px;
    background-color: #4C4C4C;
    border-radius: 3px 3px 3px 3px;
    font-size: 16px;
    color:#FFFFFF;
    border: 1px solid #ccc;
}
.input_datos{
    margin-top: 1px;
    margin-bottom: 7px;
    width: 400px;
    height: 25px;
    text-align:center;
    padding: 0px 0px 0px 0px;
    background-color: #fff;
    border-radius: 3px 3px 3px 3px;
    font-size: 16px;
    color:#000;  
}
.config_especial{
    height: 350px;
    background:#000000;
    border-radius: 8px 8px 8px 8px;
    color:#fff;
    font-size:40px;
    }
</style>
</head>
<body>


    <!-- Navigation -->


<div class="container"> 
<br><br>
<!--============== CAJA LOGIN ====================================-->       
 <div class="row">
    <div class="col-md-4 config_especial text_center"><br>     
        <h5>Configurar IP FIJA solo si tienes conectado el cable Ethernet</h5>
  

<form method="post" action="cambia_ip.php">       
    <div class="ip_address">Ip: 
            <span class="color_verde"><?php echo $ip;?></span>
    </div>         
            <input name="ip" class="input_datos" placeholder="introduce Ip de la raspi  + Enter (ej:192.168.1.44)">
</form>
<br>

<form method="post" action="cambia_puerta_enlace.php">        
    <div class="ip_address">Puerta de enlace: 
                <span class="color_verde"><?php echo $puerta_enlace;?></span>
    </div>         
            <input name="puerta_enlace" class="input_datos" placeholder="Introduce Puerta de enlace + Enter (ej:192.168.1.1)">
</form>

<form method="post" action="configure.php">
    <button class="boton_salir btn btn-warning btn-sm btn-block" type="submit">SALIR SIN HACER CAMBIOS</button>
</form>

<form method="post" action="apagar_maquina.php">
    <button class="boton btn btn-warning btn-sm btn-block" type="submit">APAGAR LA RASPI Y VOLVER A ENCENDERLA PARA QUE SE GUARDEN LOS CAMBIOS</button>
</form>
<br>
   </div><!-- "col-md-4 -->
</div><!-- row -->

<!--============== FIN CAJA LOGIN ====================== -->



</div><!-- container -->

    
<?php
//}else {
//header('Location:/dvs/index.php');    
//}
?>
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <script src="js/freelancer.min.js"></script>
<script>
function parpadear() {
with (document.getElementById("parpadeo").style)
visibility = (visibility == "visible") ? "hidden" : "visible";
}
</script>
</body>
</html>