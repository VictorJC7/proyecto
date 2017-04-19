<?php
// Conectamos con la BD
include('settings.php');
session_start();
//Asignamos a variables el nombre de usuario y la contraseña introducidas
$username = mysqli_real_escape_string($conexion, $_POST['inUser']);
$password = mysqli_real_escape_string($conexion, $_POST['inPass']);
// $password = $_POST['inPass'];
// $passEncript=md5($password);

$_SESSION['conectado'] = false;
// Creamos la consulta SQL para seleccionar los datos del usuario
$sql = "SELECT * FROM usuarios WHERE nombre='".$username."' AND pass = '$password'";
// = '$username' AND password = '$password'";
//Comprobamos si existe algún usuario con los datos introducidos en la BD
$result = $conexion->query($sql);
$rows = $result->num_rows;
$row = $result->fetch_assoc();
$_SESSION['nom_usuario'] = $row['nombre'];
$_SESSION['pass_usuario'] = $row['pass'];
if (isset($_SESSION['nom_usuario'])) {
    //Creamos una variable booleana de sesion para confirmar que el usuario se ha logueado y asi darle acceso al panel de control.
    $_SESSION['conectado'] = true;
    // $row = $result->fetch_assoc();
    // Creamos variables de sesion para almacenar los datos del usuario
    // $_SESSION['nom_usuario'] = $row['nombre'];
    header("location: panelDeControl.php");
  }else {
    session_destroy();
         //Si la Contraseña es incorrecta le damos la opcion al usuario de ir a una página para recuperar la contraseña o volver a loguearse
         echo "Nombre o contraseña incorrecto. <br>
         <a href='login.html'>Volver a Intentarlo</a>";
  }
?>
