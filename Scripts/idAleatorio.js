// Creamos esta función para evitar que el formulario se envie solo cuando generamos el código del producto
function evitarDefault(event) {
  event.preventDefault();
}

window.onload = function() {
 document.getElementById("generarAuto").addEventListener("click", incluirId);
function incluirId(){
  var id = generarAuto();
  var inputId;
  inputId = document.getElementById('inIdProd');
  inputId.value = id;
}

function generarAuto() {
  var aleatorio;
  var a = 1000000000000;
  var b = 9999999999999;
  var claves;
  claves=Array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V"
  ,"W","X","Y","Z");
  var letra;
  letra = claves[Math.floor(Math.random() * claves.length)];
  aleatorio = Math.round(Math.random()*(b-a)+parseInt(a)); //Generacion de numero aleatorio
  var id = aleatorio + letra;
  return id;
}
}
