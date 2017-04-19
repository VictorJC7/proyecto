<?php
include('settings.php');
session_start();

//Obtenemos los diferentes campos del producto que hemos buscado o escaneado.
$codigo_Producto = $_SESSION['codigoProducto'];
$nombre_Producto = "";
$descripcion_Producto = "";
$precio_Producto = "";
$urlImagen_Producto = "";
$urlVideo_Producto = "";
$categoria_Producto = "";
$proveedor_Producto = "";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ficha técnica del producto <?php echo $nombre_Producto; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel=stylesheet href="../CSS/style.css" type="text/css">
  </head>
  <body>
    <div class="contaier-fluid text-center">
      <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 fila1">
        <?php echo $codigo_Producto; ?>
      </div>
    <div class="contaier-fluid">
      <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 fila1">
        <?php echo $nombre_Producto; ?>
      </div>
      <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 fila2">
        <?php echo $descripcion_Producto; ?>
      </div>
      <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 fila3">
        <?php echo $precio_Producto; ?>
      </div>
      <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 fila4">
        <img src="<?php echo $urlImagen_Producto; ?>" alt="Imagen del producto">
      </div>
        <?php
        if ($urlVideo_Producto != "") {
          echo "<div class='row col-lg-12 col-md-12 col-sm-12 col-xs-12 fila5'>
          <a href=" .  "'" . $urlVideo_Producto . "'" . "> Ver video </a></div>";
        }
         ?>
      <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 fila4">
        <?php echo $categoria_Producto; ?>
      </div>

      <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 fila4">
        <?php echo $proveedor_Producto; ?>
      </div>
  </body>
</html>
