$(document).ready(function () {
    
    //guardar datos
    $("#registrar").click(function(){ 

        var nombre = $("#nombreRegistro").val();
        var apellido = $("#apellidoRegistro").val();
        var usuario = $("#usuarioRegistro").val();
        var pass = $("#passRegistro").val();
        var capturarError = false;

        if(nombre == "" ){
            capturarError = true;
            alertify.alert('Debes agregar el nombre');
        }
        else if(apellido == ""){
            capturarError = true;
            alertify.alert('Debes agregar el apellido');
            }

            
        else if(usuario == ""){
            alertify.alert('Debes agregar el usuario');
            capturarError = true;
        }

        else if(pass == ""){
            alertify.alert('Debes agregar la contraseña');
            capturarError = true;
            }

        if (!capturarError){

            var InsertarUsuario = new FormData();
            InsertarUsuario.append("insertarNombres", nombre);
            InsertarUsuario.append("insertarApellidos", apellido);
            InsertarUsuario.append("insertarusuario", usuario);
            InsertarUsuario.append("insertarPass", pass);

            $.ajax({
                async:true, 
                url: "controlador/ctrlUsuarios.php",
                method: "POST", 
                data: InsertarUsuario,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "json", 
    
                success: function(response){ 

                    if (response == 1){
                        alert('Exitoooooo');
                        alertify.success("Agregado con éxito");
                        //window.location = "index.html";
                    }

                    else{
                        alert("Error");
                    }
                }
            })
        }
    });
});