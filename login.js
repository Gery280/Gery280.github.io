document.addEventListener("DOMContentLoaded", function () {

  console.log("Hello world");

  var inputUsuario = document.getElementById('email');
  var inputPassword = document.getElementById('password');
  var form = document.getElementById("form")

  console.log(inputUsuario);
  console.log(inputPassword);

  // Expresión regular para validar el formato de correo electrónico
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  function validarEmail(email){
    return emailRegex.test(email);
  }
   
  // Función de validación del formulario
  function validarFormulario(){
    var email = inputUsuario.value.trim(); //trim para eliminar espacios en blanco
    var password = inputPassword.value;

    if(email === ""){
      alert("Por favor, ingrese su Correo");
      return false;
    }

    if(password === ""){
      alert("Por favor, ingrese su contraseña");
      return false;
    }

    if (!validarEmail(email)){
      alert("Por favor, Ingrese una dirección de correo electrónico válida")
      return false;
    }

    if (password.length < 2){
      alert("La contraseña debe contener mas de dos caracteres")
      return false;
    }

    //si todas las validaciones pasan retorna true
    return true
  }

  form.addEventListener('submit', function(event){
    //validar formulario
    if(!validarFormulario()){
      event.preventDefault();
    }
  });




  //dentro de la funcion
  //agregar validacion de email con expresiones regulares. - 
  //password longitud de dos caracteres o mas.
  //en el evento de submit (implementar que no se mande la linea al servidor, no refrescar pagina, queremos ver validacion, es una linea pequeña de js al final del evento)
});
