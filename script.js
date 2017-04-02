// LOGIN 
$(document).ready(function(){
    $("#errorMsg").hide();
    $("#in").click(function(){
        var usu = $("#txtUser").val();
        var pass = $("#txtpass").val();
        
        $.post("conexionLogin.php",{ usu : usu, pass : pass},function(respuesta){
            if (respuesta == '1') {
                $.mobile.changePage("#isAdmin");
            }
            else if(respuesta == '2'){
                $.mobile.changePage("#pUsuario");
            }
            else{
                $.mobile.changePage('#pageError');
                /*$("#errorMsg").fadeIn(300);
                $("#errorMsg").css("display", "block");*/
            }
        });
    });
});


// Registro de usuarios
$(document).ready(function(){
    $("#errorMsg").hide();
    $("#rUsuarios").click(function(){
        var nombre = $("#rnombre").val();
        var paterno = $("#rpaterno").val();
        var materno = $("#rmaterno").val();
        var edad = $("#redad").val();
        var correo = $("#rcorreo").val();
        var direccion = $("#rdireccion").val();
        var user2 = $("#ruserF").val();
        var pass2 = $("#rpass").val();
        
        var sexo = $("#rsexo").val();
        if(sexo=='Hombre' || sexo=='Mujer'){
            var sexo1=sexo;
        
        
        $.post("rUsuarios.php",{nombre:nombre,paterno:paterno,materno:materno,edad:edad,correo:correo,sexo1:sexo1,direccion:direccion,user2:user2,pass2:pass2},function(respuesta){
            if (respuesta) {
                $.mobile.changePage("#registroRealizado");
            }
            else{
                $.mobile.changePage('#pageError');
                /*$("#errorMsg").fadeIn(300);
                $("#errorMsg").css("display", "block");*/
            }
        });}
    });
});




// Registro de Articulos
$(document).ready(function(){
    $("#errorMsg").hide();
    $("#RegistroA").click(function(){
        var TArticulo = $("#RArticulo").val();
        var NArticulo = $("#RNombreA").val();
        var foto = $("#RFotoA").val();
        var comentario = $("#RComentarioA").val();
        var cantidad = $("#RCantidadA").val();
        var fecha = $("#RFechaA").val();
        var precio = $("#RPrecioA").val();
        
        
        $.post("rArticulos.php",{TArticulo:TArticulo,NArticulo:NArticulo,foto:foto,comentario:comentario,cantidad:cantidad,fecha:fecha,precio:precio},function(respuesta){
            if (respuesta) {
                $.mobile.changePage("#registroArticulos2");
            }
            else{
                $.mobile.changePage('#pageError');
                /*$("#errorMsg").fadeIn(300);
                $("#errorMsg").css("display", "block");*/
            }
        });
    });
});

