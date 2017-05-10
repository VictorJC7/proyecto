<?php
include('settings.php');
require '../qrcode/qrlib.php';

session_start();

if ($_SESSION["conectado"] == false) {
  echo "<script> alert('Debe iniciar sesión para acceder a esta página.');</script>";
  header("location: login.html");
}

$idProd = $_GET['inIdProd'];
$nomProd = $_GET['inNomProd'];
$desProd = $_GET['inDesProd'];
$precioProd = $_GET['inPrecioProd'];
$imgProd = $_GET['inImagenProd'];
$videoProd = $_GET['inVideoProd'];
$idCategoriaProd = "";
$nomProveedorProd = "";


// }
// comprobarID();
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
     integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <link rel=stylesheet href="../CSS/style.css" type="text/css">
     <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
     <title>Añadir producto</title>
   </head>
   <body>
     <div class="contaier-fluid text-center">
     <?php
     //Preparamos todas las variables para generar el codigo QR
     $dir = "../imagenesQR/";
     $filename = $dir . $idProd . ".png";
     $tamanio = 10;
     $level = "M";
     $frameSize = 3;
     $contenido = "http://localhost/Proyecto/Paginas/ficha.php?idQR=" .$idProd;

     $qrProd = $filename;

     // public function comprobarID(){
       $sqlSearch = "SELECT * FROM producto WHERE idProducto LIKE '$idProd'";
       // $_SESSION['sqlSearch'] = mysqli_real_escape_string($sqlSearch);

       $result = mysqli_query($conexion, $sqlSearch);
       $row_cnt = $result->num_rows;
       $fila = mysqli_fetch_assoc($result);

       if ($row_cnt > 0) {
         echo "Ya existe un producto con la ID introducida.";
         echo "<a href='anadirProducto.php'>Volver</a>";
       }else {
         // Si no existe un producto con la id introducida pasaremos a almacenar los datos del nuevo producto en la BD
         //Creamos la imagen QR
         QRcode::png($contenido, $filename, $level, $tamanio, $frameSize);
         $sqlIns = "INSERT INTO producto VALUES ('$idProd', '$nomProd', '$desProd', '$precioProd', '$qrProd', '$imgProd', '$videoProd', '$idCategoriaProd', '$nomProveedorProd')";
         mysqli_query($conexion, $sqlIns);
         echo "<h2>Producto " . $nomProd . " con ID " .$idProd . " creado correctamente.</h2><br>";
         echo "<a href='panelDeControl.php' id='botonVolver'>Panel de control</a>";
       }
      ?>
    </div>
   </body>
 </html>
