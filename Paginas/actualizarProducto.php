<?php

include('settings.php');
session_start();

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
    <title>Modificar producto</title>
  </head>
  <body>
    <div class="margenSup text-center">
    <?php
    if ($busqueda<>'') {
      //Contamos el numero de palabrasS
          $sqlSearch = "SELECT * FROM producto WHERE idProducto LIKE '$busqueda'";
          // $_SESSION['sqlSearch']=mysqli_real_escape_string($sqlSearch);

          $result = mysqli_query($conexion, $sqlSearch);
          $row_cnt = $result->num_rows;
          $_SESSION['fila'] = mysqli_fetch_assoc($result);
          if ($row_cnt == 1) {
            //Si se llega aqui significa que hay un producto con ese codigo.
            //Introducimos los valores del producto en un array que mostraremos para modificar el producto
            echo "<label>Nombre:</label> <input type='text' name='inNomProd' id='inNomProd' value='" .$_SESSION['fila']['nombre_producto']. "'><br>";
            echo "<label>Descripcion: </label><textarea rows='4' cols='50' name='inDesProd' id='inDesProd'>". $_SESSION['fila']['descripcion_producto'] ."</textarea><br>";
            echo "<label>Precio: </label> <input type='text' name='inPrecioProd' id='inPrecioProd' value='" . $_SESSION['fila']['precio'] . "'><br>";
            echo "<label>ID del video: </label> <input type='text' name='inVideoProd' id='inVideoProd' value='" . $_SESSION['fila']['video'] . "'><br>";
            echo "<label>Categoría:</label> <select class='' name=''>
              <option value=''>Pintura</option>
              <option value=''>Barniz</option>
              <option value=''>Resina</option>
              <option value=''>Otro</option>
            </select><br>";
            echo "<label>Proveedor: </label> <input type='text' name='inProvProd' id='inProvProd' value='" . $_SESSION['fila']['nombre_proveedor'] . "'><br>";
            echo "<input type='submit' value='Añadir'><a href='panelDeControl.php' id='botonVolver'>Volver</a>";
          }elseif ($row_cnt > 1){
            echo "Existe mas de un producto con el código introducido. Por favor contacte con un administrador para que sean
            revisados los pructos duplicados";
          }else {
            echo "<h2> No se ha encontrado ningún producto con la ID itroducida.</h2>";
            echo "<a href='panelDeControl.php' id='botonVolver'>Volver</a>";
          }
    }else {
      echo "<h2> No se ha encontrado ningún producto con la ID itroducida.</h2>";
      echo "<a href='panelDeControl.php' id='botonVolver'>Volver</a>";
    }
     ?>
       </div>
  </body>
</html>
