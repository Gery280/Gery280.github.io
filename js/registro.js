document.addEventListener("DOMContentLoaded", () => {

    var inputnombreCompleto = document.getElementById("nombre");
    var inputcorreo = document.getElementById("correo");
    var inputtelefono = document.getElementById("telefono");
    var inputpassword = document.getElementById("contraseña");

    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    function validarEmail(email){
        return emailRegex.test(email);
    }

    function validarFormulario(){
        var nombre = inputnombreCompleto.value.trim();
        var correo = inputcorreo.value.trim();
        var telefono = inputcorreo.value.trim();
        var contraseña = inputpassword.value;

        if(nombre === "" || correo === "" || telefono === "" || contraseña === ""){
            alert("Por favor, Complete todos los campos.");
            return false;
        }

        if(!validarEmail(correo)){
            alert("Por favor, Ingrese una dirección de correo electrónico válida");
            return false;
        }

        if(contraseña.length < 8){
            alert("La contraseña debe contener mas de 8 caracteres");
            return false;
        }

        return true
        
    }

    document.getElementById("formulario").addEventListener("submit", function(event){

        if(!validarFormulario()){
            
            event.preventDefault(); // Si la validación no pasa, evitamos que el formulario se envíe
        }
    });

});