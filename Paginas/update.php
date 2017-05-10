<?php

include('settings.php');
session_start();

if ($_SESSION["conectado"] == false) {
  echo "<script> alert('Debe iniciar sesión para acceder a esta página.');</script>";
  header("location: login.html");
}

$nomViejo = $_SESSION['fila']['nombre_producto'];
$descViejo = $_SESSION['fila']['descripcion_producto'];
$provViejo = $_SESSION['fila']['nombre_proveedor'];
$precViejo = $_SESSION['fila']['precio'];
$vidViejo = $_SESSION['fila']['video'];

$cont = 0;
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
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Producto actualiado</title>
  </head>
  <body>
    <div class="margenSup text-center">
    <?php
    if ($_GET['inNomProd'] != $nomViejo) {
      $sql = "UPDATE producto SET nombre_producto = '$_GET[inNomProd]' WHERE nombre_producto = '$nomViejo'";
      mysqli_query($conexion, $sql);
      $cont++;
      echo "Nombre actualizado<br>";
    }
    if ($_GET['inDesProd'] != $descViejo) {
      $sql = "UPDATE producto SET descripcion_producto = '$_GET[inDesProd]' WHERE descripcion_producto = '$descViejo'";
      mysqli_query($conexion, $sql);
      $cont++;
      echo "Descripcion actualizada<br>";
    }
    if ($_GET['inProvProd'] != $provViejo) {
      $sql = "UPDATE producto SET nombre_proveedor = '$_GET[inProvProd]' WHERE nombre_proveedor = '$provViejo'";
      mysqli_query($conexion, $sql);
      $cont++;
      echo "Proveedor actualizado<br>";
    }
    if ($_GET['inPrecioProd'] != $precViejo) {
      $sql = "UPDATE producto SET precio = '$_GET[inPrecioProd]' WHERE precio = '$precViejo'";
      mysqli_query($conexion, $sql);
      $cont++;
      echo "Precio actualizado<br>";
    }
    if ($_GET['inVideoProd'] != $vidViejo) {
      $sql = "UPDATE producto SET video = '$_GET[inVideoProdd]' WHERE precio = '$vidViejo'";
      mysqli_query($conexion, $sql);
      $cont++;
      echo "Video actualizado<br>";
    }
    if ($cont = 0) {
      echo "No se ha modificado ningun registro, por favor compruebe que ha modificado algún dato.";
    }
     ?>
     <a href='panelDeControl.php' id='botonVolver'>Panel de control</a>
   </div>
  </body>
</html>
