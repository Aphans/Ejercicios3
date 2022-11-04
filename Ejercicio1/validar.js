document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("formulario").addEventListener('submit', validarFormulario); 
  });
  
  function validarFormulario(evento) {
    let dni = document.getElementById('DNI').value;
while(!(/^\d{8}[a-zA-Z]$/.test(dni))){
  dni = prompt("Introduzca un numero de DNI: 8 numeros y una letra");
  document.getElementById('DNI').value=dni;
}

//Se separan los números de la letra
var letraDNI = dni.substring(8, 9).toUpperCase();
var numDNI = parseInt(dni.substring(0, 8));

//Se calcula la letra correspondiente al número
var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];
var letraCorrecta = letras[numDNI % 23];

if(letraDNI!= letraCorrecta){
  alert("Has introducido una letra incorrecta\nTu letra debería ser: " + letraCorrecta);
} else {
  alert("Enhorabuena hemos podido validar tu DNI");

}
  }