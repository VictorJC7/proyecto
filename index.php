<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- Font awesome: -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel=stylesheet href="CSS/style.css" type="text/css">
    <!-- <script type="text/javascript" src="Scripts/comprobacionBuscador.js"></script> -->
    <!-- Latest compiled and minified CSS of Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Buscador</title>
  </head>
  <body>
    <div class="container-fluid contenido">
      <div class="container cabecera col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="logoCabecera col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <img src="Imagenes/logo-omar.png" alt="Logo de Omar" width="150" height="65">
          <a href="Paginas/login.html" id="botonLogin">Iniciar sesión</a>
        </div>
      </div>
      <div class="divFormulario col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <form class="formulario" method="GET" action="Paginas/buscador.php">
          <input type="text" name="busqueda" placeholder="Buscar..." id="busqueda" maxlength="">
          <input type="submit" name="BotonEnviar" value="Buscar" id="botonBuscar"><br>
          <div class="checkBoxes">
            <span>Código <input type="checkbox" name="bCod" id="bCod" value="Codigo"></span>
            <span>Nombre <input type="checkbox" name="bName" id="bName" value="nomProduct"></span>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
