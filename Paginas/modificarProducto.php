<?php
include('settings.php');
session_start();
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- Font awesome: -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel=stylesheet href="../CSS/style.css" type="text/css">
    <!-- <script type="text/javascript" src="Scripts/comprobacionBuscador.js"></script> -->
    <!-- Latest compiled and minified CSS of Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Modificar un producto</title>
  </head>
  <body>
    <div class="titulo text-center">
      <h1>Introduzca la ID del producto que quiere modificar.</h1>
    </div>
    <div class="divFormulario col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <form class="formulario" method="GET" action="actualizarProducto.php">
        <input type="text" name="busqueda" placeholder="Buscar..." id="busqueda" maxlength="">
        <input type="submit" name="BotonEnviar" value="Buscar" id="botonBuscar"><br>
      </form>
    </div>
  </div>
  </body>
</html>
