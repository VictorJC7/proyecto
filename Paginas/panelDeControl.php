<?php
include('settings.php');
session_start();

if ($_SESSION["conectado"] == false) {
  echo "<script> alert('Debe iniciar sesión para acceder a esta página.');</script>";
  header("location: login.html");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Panel de control</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel=stylesheet href="../CSS/style.css" type="text/css">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
  </head>
  <body>
    <h1 class="tituloCentrado">Panel de control</h1>
    <h4 class="tituloCentrado">
    <?php
      echo "Buenos días " . $_SESSION['nom_usuario'];
    ?>
    </h4>
     <div class="espaciador col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
     <div class="botones col-lg-6 col-md-6 col-sm-6 col-xs-6">
       <button type="button" class="btn btn-default btn-lg btn-block" id="botonPanelControl" onClick="window.location.href='../index.php'">Inicio</button>
       <button type="button" class="btn btn-default btn-lg btn-block" id="botonPanelControl"  onClick="window.location.href='anadirProducto.php'">Añadir un producto</button>
       <button type="button" class="btn btn-default btn-lg btn-block" id="botonPanelControl"  onClick="window.location.href='modificarProducto.php'">Modificar un producto</button>
       <button type="button" class="btn btn-default btn-lg btn-block" id="botonPanelControl"  onClick="window.location.href='eliminarProducto.php'">Eliminar un producto</button>
       <button type="button" class="btn btn-default btn-lg btn-block" id="botonPanelControl"  onClick="window.location.href='cerrarSesion.php'">Cerrar sesión</button>
     </div>
     <div class="espaciador col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
</body>
</html>
