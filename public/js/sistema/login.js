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

            if (data) {
                window.location.href = "http://localhost/ciber/index.php/Dashboard";

            } else {

                alert("acceso incorrecto");
            }

        }
    });
});


$('#btn_login_auditor').click(function () {

    var datos = {
        "email": $('#email_auditor').val(),
        "password": $('#password_auditor').val()
    };

    $.ajax({
        data: datos,
        type: "POST",
        dataType: "json",
        url: "http://localhost/ciber/UsuarioCI/login_auditor",
        success: function (data) {

            if (data) {
                window.location.href = "http://localhost/ciber/Auditor/datos";

            } else {

                alert("acceso incorrecto");
            }

        }
    });
});


$('#btn_registro').click(function () {

    var datos = {
        "nombre": $('#nombre').val(),
        "paterno": $('#paterno').val(),
        "nom_emp": $('#nom_emp').val(),
        "email": $('#mail').val(),
        "password": $('#pass').val(),
        "idempresa": $('#empresa').val(),
        "region": $('#region').val()
    };





    if (datos.nombre === "" || datos.paterno === "" || datos.email === "" || datos.password === "" || datos.idempresa === "" || datos.region === "") {

    } else {
        $.ajax({
            data: datos,
            type: "POST",
            dataType: "json",
            url: "http://localhost/ciber/index.php/UsuarioCI/registrarse",
            success: function (data) {
                console.log(data);
                if (data) {
                    $("#registrarse")[0].reset();
                    $('#modalregistro').modal('toggle');
                    Swal.fire({
                        type: 'success',
                        title: 'Usuario',
                        text: 'Registrado en el Sistema',
                    });
                } 
                
                if(data === "existe"){
                    $("#registrarse")[0].reset();
                    $('#modalregistro').modal('toggle');
                    Swal.fire({
                        type: 'info',
                        title: 'Cuenta de Correo Electronico',
                        text: 'Existente',
                    });

                }





            }
        });
    }




});






