<?php
include('settings.php');

session_start();
// $sqlSearch = "";
// $_SESSION['sqlSearch']="";

$busqueda = $_GET['busqueda'];

//Contamos el número de palabras de la cadena para determinar el tipo de búsqueda
//Primero nos aseguramos de que la cadena no esté vacía.
if ($busqueda<>'') {
  //Contamos el numero de palabras
  $palabras = explode(" ",$busqueda);
  $numPalabras = count($palabras);

  if(isset($_GET['bCod'])){
      echo "Se ha seleccionado la busqueda por codigo";
      $sqlSearch = "SELECT * FROM producto WHERE idProducto LIKE '$busqueda'";
      $_SESSION['sqlSearch']=mysqli_real_escape_string($sqlSearch);

      $result = mysqli_query($conexion, $sqlSearch);
      $row_cnt = $result->num_rows;
      $fila = mysqli_fetch_assoc($result);

      if ($row_cnt == 1) {
        //Si se llega aqui significa que hay un producto con ese codigo.
        echo "Existe un producto con el código introducido.";
        $_SESSION['codigoProducto']=$busqueda;
        header("Location: ficha.php");
      }elseif ($row_cnt > 1){
        echo "Existe mas de un producto con el código introducido. Por favor contacte con un administrador para que sean
        revisados los pructos duplicados";
      }else {
        echo "No existe ningún producto con el codigo introducido";
      }
  }
  //Falta poner el if que comprueba que ambos estan seleccionados.
  else if(isset($_GET['bName'])){
      echo "Se ha seleccionado la busqueda por nombre";
      $_SESSION['nombreProducto']=$busqueda;
      $sqlSearch = "SELECT * FROM producto WHERE nombre_producto LIKE '%$busqueda%'";
      $_SESSION['sqlSearch'] = $sqlSearch;

      $result = mysqli_query($conexion, $sqlSearch);
      $row_cnt = $result->num_rows;
      $fila = mysqli_fetch_assoc($result);

      if ($row_cnt > 0) {
        echo "Se han encontrado " .$row_cnt. " resultados que coinciden con tus parametros de búsqueda." ;
        echo "<ul>";
        // foreach ($variable as $key => $value) {
        //   echo "<li><a href='" . $linkDelProducto ."'>" .$nombreDelProducto " </a></li><br>";
        // }
        echo "</ul>";

      }else {
        echo "No se han encotrado productos que coincidan con los parametros introducidos.";
      }{

        }
  }else {
    echo "<script> alert('Por favor selecciona busqueda por código o nombre.');</script>";
    header("Location: ../index.php");
  }
}else{
  echo "Fallo en la busqueda";
}
  ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel=stylesheet href="CSS/style.css" type="text/css">
    <!-- <script type="text/javascript" src="Scripts/comprobacionBuscador.js"></script> -->
    <!-- Latest compiled and minified CSS of Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Buscador</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="espaciador col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
      <div class="botones col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <button type="button" class="btn btn-default btn-lg btn-block" onClick="window.location.href='../index.php'">Volver a inicio</button>
      </div>
      <div class="espaciador col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
    </div>
  </body>
</html>
