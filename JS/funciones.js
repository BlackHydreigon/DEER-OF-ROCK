$(document).ready(function(){
    jQuery.validator.addMethod("mayus", function(value, element) {
        // allow any non-whitespace characters as the host part
        return this.optional( element ) || /^[A-Z]$/.test( value );

      }, 'la primer letra tiene que tener una mayuscula.');
      




    $("#registro").validate({
        rules:{
            nombrecompleto:{
                required:true,
                minlength:4
            },
            nombre_usuario:{
                required:true,
                minlength:4
            },
           contrasena:{
            required:true,
            minlength:8
            mayus : true
           },
           correo:{
            required:true,
            email: true
           },

           messages:{
            nombrecompleto:{
                required: "El nombre completo es requerido es requerido",
                minlength: "es necesario como minimo 10 caracteres"

            },
            nombre_usuario:{
                required: "El nombre de usuario es requerido",
                minlength: "es necesario como minimo 4 caracteres"

            },            
            correo:{
                required: "El correo es requerido",
                email: "el correo no es valido"

            },
            contrasena:{
                required: "El nombre de usuario es requerido",
                minlength: "es necesario como minimo 8 caracteres"

            },


        },

        }
    

    });

});