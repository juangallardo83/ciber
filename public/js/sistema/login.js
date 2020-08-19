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
                window.location.href = "http://localhost/ciber/index.php/Dashboard";
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
        "nom_emp": $('#nom_emp').val(),
        "email": $('#mail').val(),
        "password": $('#pass').val(),
        "idempresa": $('#empresa').val(),
        "region": $('#region').val()
    };
    
    if(datos.nom_emp === ""){
        datos.nom_emp = 'no registra';
    }
    if(datos.nombre === "" || datos.paterno === "" || datos.email === "" || datos.password === "" || datos.idempresa === "" || datos.region === ""){
        
    }
    else{
        $.ajax({
        data: datos,
        type: "POST",
        dataType: "json",
        url: "http://localhost/ciber/index.php/UsuarioCI/registrarse",
        success: function (data) {
           
            $("#registrarse")[0].reset();
            $('#modalregistro').modal('toggle');
           
        }
    });
    }
    
    

    
});


$('#btn_logout').click(function () {
   
   alert("salir");
        $.ajax({
        //data: datos,
        type: "POST",
        dataType: "json",
        url: "http://localhost/ciber/index.php/UsuarioCI/logout",
        success: function (data) {
           
           
           
        }
    });
  
    

    
});



