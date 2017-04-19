<?php
$host_db = "localhost"; //Host de la Base de Datos
$name_db = "pruebadb"; //Nombre de la BD
$user_db = "root"; //Usuario de la Base de Datos
$pass_db = ""; //Pass del usuario de la bd
$tbl_db = ""; //Nombre de la tabla usuarios de la BD

//Conectamos con la Base de Datos
$conexion = new mysqli($host_db, $user_db, $pass_db, $name_db);

if(!$conexion)
      {
          echo "No se ha podido conectar con el servidor" . mysql_error();
      }
 ?>
