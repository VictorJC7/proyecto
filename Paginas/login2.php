<?php
include 'settings.php';


session_start();
$_SESSION['conectado'] = false;

$username = mysqli_real_escape_string($conexion, $_POST['inUser']);
$password = $_POST['inPass'];

$sql= "SELECT * FROM usuarios WHERE nombre='$username' AND pass='$password'";;

$result = mysqli_query($conexion, $sql);
$row_cnt = $result->num_rows;
$fila = mysqli_fetch_assoc($result);

if ($row_cnt > 0) {
  $_SESSION['nom_usuario']= $username;
  $_SESSION['conectado'] = true;
  header("location: panelDeControl.php");
}else {
  echo var_dump($username). "<br>";
  echo var_dump($password). "<br>";
  session_destroy();
       //Si la Contraseña es incorrecta le damos la opcion al usuario de ir a una página para recuperar la contraseña o volver a loguearse
       echo "Nombre o contraseña incorrecto. <br>
       <a href='login.html'>Volver a Intentarlo</a>";
}

?>
