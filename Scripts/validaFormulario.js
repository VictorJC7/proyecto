onload = function(){
var formulario = document.forms[0];
// formulario.onsubmit = function(){
var errList ="";
var ret = true;
}

function comprobar() {
  //validamos el nombre
  var nom = document.getElementsByName('nombre')[0].value;
  console.log(nom);
  if (nom == null || nom.length == 0 || !(/^\S+$/.test(nom))){
       errList += "El nombre es erróneo <br/>";
       ret = false;
  }
  // Validamos la contraseña:
  var pass = document.getElementsByName('contraseña')[0].value;
  if (pass == null || pass.length == 0 ){
       errList += "Contraseña vacía, por favor introduzca una contraseña <br/>";
       ret = false;
  }

  if (!ret){
    alert(errList);
  }

}
