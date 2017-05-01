 <?php
include('settings.php');
session_start();

//Obtenemos los diferentes campos del producto que hemos buscado o escaneado.
//Si se ha llegado aqui por el buscador la ariable del id ya la tendremos definida
// if (isset($_SESSION["busq"]) {
//   $_SESSION['busq'] = false;
//   $codigo_Producto = $_SESSION['codigoProducto'];
// }
//Si se ha llegado escaneando el QR lo obtenemos cogiendola de la url por el metodo GET
// else {
  $codigo_Producto = $_GET['idQR'];
  //Generamos la cosulta para obtener los datos de las filas
  $sqlSearch = "SELECT * FROM producto WHERE idProducto LIKE '$codigo_Producto'";
  $result = mysqli_query($conexion, $sqlSearch);
  $_SESSION['fila'] = mysqli_fetch_assoc($result);
// }

$nombre_Producto = $_SESSION['fila']['nombre_producto'];
$descripcion_Producto = $_SESSION['fila']['descripcion_producto'];
$precio_Producto = $_SESSION['fila']['precio'];
$urlImagen_Producto = $_SESSION['fila']['imagen'];
$urlVideo_Producto = $_SESSION['fila']['video'];
$categoria_Producto = $_SESSION['fila']['id_categoria'];
$proveedor_Producto = $_SESSION['fila']['nombre_proveedor'];
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
    <!-- <div class="container-fluid"> -->
      <div class="cabeceraProd text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <a href='../index.php' id='botonFicha'>Volver</a>
        <h1><?php echo $nombre_Producto; ?></h1>
      </div>
      <div class="tablaProdImg container-fluid">
      <!-- <div class="sep col-lg-2 col-md-2 col-sm-1 col-xs-1"></div> -->
      <div class="contenidoProd col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="sep col-lg-2 col-md-2 col-sm-1 col-xs-1"></div>
        <div class="tablaContenido col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 fila fila1">
            <span> Código: </span><?php echo $codigo_Producto; ?>
          </div>
          <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 fila fila2">
            <span> Nombre: </span><?php echo $nombre_Producto; ?>
          </div>
          <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 fila fila3">
            <span> Descripción: </span><?php echo $descripcion_Producto; ?>
          </div>
          <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 fila fila4">
            <span> Precio: </span><?php echo $precio_Producto . "€";?>
          </div>
          <?php
          if ($urlVideo_Producto != "") {
            $urlYou = "https://www.youtube.com/watch?v=" . $urlVideo_Producto;
            echo "<div class='row col-lg-12 col-md-12 col-sm-12 col-xs-12 fila fila5'>
            <a href='$urlYou' target='_blank'> Ver vídeo </a></div>";
          }
          if ($categoria_Producto !="") {
            echo "<div class='row col-lg-12 col-md-12 col-sm-12 col-xs-12 fila fila6'>
            <span> Categoría: </span>". $categoria_Producto . "</div>";
          }
          if ($proveedor_Producto !="") {
            echo "<div class='row col-lg-12 col-md-12 col-sm-12 col-xs-12 fila fila7'>
            <span> Proveedor: </span>". $proveedor_Producto . "</div>";
          }
         ?>
    </div><!-- Tabla  -->
    <div class="imagen col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <img src="<?php echo $urlImagen_Producto ?>" alt="Imagen del producto">
    </div>
    <div class="sep col-lg-2 col-md-2 col-sm-1 col-xs-1"></div>
    </div>
    <!-- <div class="sep col-lg-2 col-md-2 col-sm-1 col-xs-1"></div> -->
  </div> <!-- Tabla de contenido e imagen -->
  <!--</div> Contenedor  -->
  </body>
</html>
