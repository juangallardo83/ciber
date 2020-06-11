$('#btn_login').click(function () {

    var datos = {
        "email": $('#email').val(),
        "password": $('#password').val()
    };

    $.ajax({
        data: datos,
        type: "POST",
        dataType: "json",
        url: "index.php/UsuarioCI/login",
        success: function (data) {
           
            if(data){
                window.location.href = "index.php/AutoevaluacionCI";
                 //alert("acceso correcto");
            }
            else{
                 alert("acceso incorrecto");
            }
           
        }
    });
});



