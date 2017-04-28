<?php

include('settings.php');
session_start();

if ($_SESSION["conectado"] == false) {
  echo "<script> alert('Debe iniciar sesión para acceder a esta página.');</script>";
  header("location: login.html");
}

$busqueda = $_GET['busqueda'];
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

    <title>Eliminar producto</title>
    </head>
  <body>
  <div class="margenSup text-center">
    <?php
    if ($busqueda<>'') {
      $sql = "SELECT * FROM producto WHERE idProducto = '$busqueda'";
      $registro = mysqli_query($conexion, $sql);

      if ($reg=mysqli_fetch_array($registro)){
        mysqli_query($conexion, "DELETE FROM producto WHERE idProducto = '$busqueda'");
        echo "Datos Eliminados";
      }
      else {
      echo "Datos no han sido Eliminados.";
      }
    }else {
        echo "<h2> No se ha encontrado ningún producto con la ID itroducida.</h2>";
        echo "<a href='panelDeControl.php' id='botonVolver'>Volver</a>";
      }
    ?>﻿
  </div>
  </body>
</html>
