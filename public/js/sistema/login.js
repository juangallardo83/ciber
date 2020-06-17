$('#btn_login').click(function () {

    var datos = {
        "email": $('#email').val(),
        "password": $('#password').val()
    };

    $.ajax({
        data: datos,
        type: "POST",
        dataType: "json",
        url: "http://localhost/ciber/index.php/UsuarioCI/login",
        success: function (data) {
           
            if(data){
                window.location.href = "http://localhost/ciber/index.php/AutoevaluacionCI";
                 //alert("acceso correcto");
            }
            else{
                 alert("acceso incorrecto");
            }
           
        }
    });
});


$('#btn_registro').click(function () {
   
    var datos = {
        "nombre": $('#nombre').val(),
        "paterno": $('#paterno').val(),
        "materno": $('#materno').val(),
        "email": $('#mail').val(),
        "password": $('#pass').val(),
        "idempresa": $('#empresa').val()
    };

    $.ajax({
        data: datos,
        type: "POST",
        dataType: "json",
        url: "http://localhost/ciber/index.php/UsuarioCI/registrarse",
        success: function (data) {
            console.log(data);
            $("#registrarse")[0].reset();
            $('#modalregistro').modal('toggle');
           
        }
    });
});



