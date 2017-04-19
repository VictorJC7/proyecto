onload = function(){
  var formulario = document.forms[0];
}
function comprobarBusqueda() {
  var busqueda = formulario.cajatexto;
  if (busqueda == "") {
    console.log("1");
    alert("Introduzca un valor para realizar su búsqueda");
  }else if (busqueda.length > 50) {
console.log("2");
    alert("Introduzca una cadena con menos de 50 caracteres para realizar su busqueda");
  }else {
    <?php
    header('Location: ficha.php');
    ?>
  }
}
