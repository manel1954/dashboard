<?php
// Load the language support
require_once('../config/language.php');
//Load the Pi-Star Release file
$pistarReleaseConfig = '/etc/pistar-release';
$configPistarRelease = array();
$configPistarRelease = parse_ini_file($pistarReleaseConfig, true);
//Load the Version Info
require_once('../config/version.php');
?>
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" lang="en">
  <head>
    <meta name="robots" content="index" />
    <meta name="robots" content="follow" />
    <meta name="language" content="English" />
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="Author" content="Andrew Taylor (MW0MWZ)" />
    <meta name="Description" content="Pi-Star Expert Editor" />
    <meta name="KeyWords" content="Pi-Star" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="pragma" content="no-cache" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <meta http-equiv="Expires" content="0" />
    <title>Editor Experto</title>
    <link rel="stylesheet" type="text/css" href="/css/font-awesome-4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/pistar-css.php" />
  </head>
  <body>
  <div class="container">
  <?php include './header-menu.inc'; ?>
  <div class="contentwide">

  <table width="120%">
    <tr><th>EDITOR EXPERTOS</th></tr>
    <tr><td align="center">
      <h2 style="color: #f00;">**PELIGRO**</h2>
      Los editores Pi-Star Expert se han creado para editar algunas de las configuraciones adicionales en el<br />
      archivos de configuración más simple, lo que le permite actualizar algunas áreas de los archivos de <br />
      configuración sin el necesita iniciar sesión en su Pi a través de SSH.<br />
      <br />
      Tenga en cuenta que cuando haga sus ediciones aquí, estos archivos de configuración pueden ser actualizados por<br />
      el panel de control y que sus ediciones se pueden sobrescribir. Se asume que ya sabes<br />
      lo que está haciendo editando los archivos a mano y que comprende qué partes de los archivos<br />
      son mantenidos por el Dashboard.<br />
      <br />
      Con esa advertencia en mente, puede realizar los cambios que desee para recibir ayuda en Facebook.<br />
      grupo (enlace en la parte inferior de la página) y pida ayuda cuando la necesite.<br />
      73 y disfruta de tu experiencia Pi-Star.<br />
      Equipo de Pi-Star UK.<br />
      <br />
    </td></tr>
  </table>
  </div>

  <div class="footer">
Pi-Star web config, &copy; Andy Taylor (MW0MWZ) 2014-<?php echo date("Y"); ?>.<br />
Need help? Click <a style="color: #ffffff;" href="https://www.facebook.com/groups/pistarusergroup/" target="_new">here for the Support Group</a><br />
or Click <a style="color: #ffffff;" href="https://forum.pistar.uk/" target="_new">here to join the Support Forum</a><br />
<a style="color: #ff0;" href="http://www.ea3eiz.com/DMR" target="_new">Dashboard editado por EA3EIZ</a>
</div>

</div>
</body>
</html>
