<?php
include('settings.php');
session_start();

if ($_SESSION["conectado"] == false) {
  echo "<script> alert('Debe iniciar sesión para acceder a esta página.');</script>";
  header("location: login.html");
}
 ?>

<script language="javascript" type="text/javascript" src="../Scripts/idAleatorio.js"></script>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Añadir producto</title>
  </head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel=stylesheet href="../CSS/style.css" type="text/css">
  <body>
    <h1 class="tituloCentrado">Añadir un Producto</h1>
    <div class="formularioAnadirProducto col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <form class="formAnadirProducto" action="comprobarExistencia.php" method="get">
        <label>ID del producto*:</label> <input type="text" name="inIdProd" id="inIdProd" placeholder="123456789X" required>
        <label>Nombre del producto*:</label> <input type="text" name="inNomProd" id="inNomProd" placeholder="Nombre del producto" required>
        <label>Descripción:</label> <textarea rows="4" cols="50" name="inDesProd" id="inDesProd"></textarea>
        <label>Precio:</label> <input type="text" name="inPrecioProd" id="inPrecioProd">
        <label>Imagen:</label> <input type="file" name="inImagenProd" id="inImagenProd">
        <label>ID de video:</label> <input type="text" name="inVideoProd" id="inVideoProd">
        <label>Categoría:</label> <select class="" name="">
          <option value="">Pintura</option>
          <option value="">Barniz</option>
          <option value="">Resina</option>
          <option value="">Otro</option>
        </select>
        <input type="submit" name="" value="Añadir">
      </form>
        <button id="generarAuto">Generar código automáticamente</button><br>

    </div>
  </body>
</html>
