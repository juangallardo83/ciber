$(document).ready(function () {


    //madurez();
    Auditorias();
    controles();
});


function auditor(obs) {
    $('#obs_auditor').val("");
    $('#obs_auditor').attr('disabled', true);
    $('#obs_auditor').val(obs);
    $('#modalAuditor').modal('show');
}



function Auditorias() {



    /*var datos = {        
     "idsubco" : idsubControl,
     "idestado" : opcion,
     "comentario" : comentario
     };*/


    $.ajax({
        //data: datos,
        type: "POST",
        dataType: "json",
        cache: false,
        url: "http://localhost/ciber/index.php/Auditor/verificaAsignacion",
        success: function (data) {
            
            $('#empresa').text(data[0].nom_emp);
            $('#nivel').text(data[0].nomnivel);
            $('#user').text(data[0].nombre + " " + data[0].ape_pat);
            $('#email').text(data[0].email);
            $('#fecha').text(convertDateFormat(data[0].fecha));
        }
    });
    return false;


}


function addComentarioAuditor() {



    var datos = {        
     "idsubco" : idsubControl,
     "iduser" : opcion,
     "iddetalle" : opcion,
     "comentario" : obsauditor
     };


    $.ajax({
        data: datos,
        type: "POST",
        dataType: "json",
        cache: false,
        url: "http://localhost/ciber/index.php/Auditor/insertComentario",
        success: function (data) {
            
           
        }
    });
    return false;


}

function datos() {
    $.ajax({
        //data: datos,
        type: "POST",
        dataType: "json",
        cache: false,
        url: "http://localhost/ciber/index.php/AutoevaluacionCI/salida",
        success: function (data) {

            $('#nomcontrol').html("");
            $.each(data, function (key, value) {
                //$('#nomcontrol').value(value.nomcuest);
            });
        }
    });
    return false;
}

function controles() {
    $.ajax({
//data: datos,
        type: "POST",
        dataType: "json",
        cache: false,
        url: "http://localhost/ciber/index.php/AutoevaluacionCI/control",
        success: function (data) {
            nivelMadurez();
            var avance;
            var nivel = 'success';
            $('#controles').html("");
            $.each(data, function (key, value) {
                if (value.avance === null)
                {
                    avance = '0';
                    nivel = 'danger';
                }

                if (value.avance > 0 && value.avance < 40)
                {
                    avance = value.avance;
                    nivel = 'danger';
                }

                if (value.avance >= 40 && value.avance < 70)
                {
                    avance = value.avance;
                    nivel = 'warning';
                }

                if (value.avance >= 70 && value.avance <= 100)
                {
                    avance = value.avance;
                    nivel = 'success';
                }


                $('#controles').append(
                        "<li class='list-group-item d-flex justify-content-between align-items-center'>"
                        + "<button class='btn btn-link' onclick='subcontrol(" + value.id + ",\"" + value.control + "\")' id='nomcontrol' type='button' data-toggle='collapse' data-target='#collapseOne' aria-expanded='true' aria-controls='collapseOne'>"
                        + value.control
                        + "</button>"
                        + "<h5><span class='badge badge-" + nivel + " badge-pill'>" + avance + "%</span></h5>"
                        + "</li>"

                        );
            });

        }
    });
    return false;
}




function muestra(item) {

    $('#recomienda' + item).css('display', 'none');
}

function subcontrol($id, $titulo) {

    var datos = {
        "idcontrol": $id
    };
    $.ajax({
        data: datos,
        type: "POST",
        dataType: "json",
        cache: false,
        url: "http://localhost/ciber/index.php/AutoevaluacionCI/subcontrol",
        success: function (data) {

            console.log(data);
            $('#itemsub').html("");
            $('#ModalTitulo').html("<i class='fa fa-list-alt' ></i>     " + $titulo);
            $('#idcontrol').val(datos.idcontrol)
            $.each(data, function (key, value) {
                var item = (key + 1);
                var check_auditor = "";
                var check = "chech.png";
                if (value.idestado === null) {
                    check = "alarma.png";
                }

                if (value.obsauditor !== null) {
                    check_auditor = "<a href='#' onclick='auditor(\"" + value.obsauditor + "\")'><small class='badge badge-pill badge-warning' style='font-size:12px;margin-left: 60%;' ><i class='fa fa-info-circle'></i> Control Auditado</small></a>";
                } else {
                    check_auditor = "";
                }



                $('#itemsub').append(
                        "<div class='media text-muted pt-3'>"
                        + "<title>Placeholder</title>"
                        + "<span class='badge badge-primary badge-pill' style='margin-left:10px;'>" + item + "</span>"
                        + "<p class='media-body pb-3 mb-0 small lh-125 border-bottom border-gray' style='margin-left: 15px;'>"
                        + "<strong class='d-block text-gray-dark'>"
                        + value.titulo
                        + "<button type='button' onclick='evaluar(" + value.idsubco + ",\"" + value.titulo + "\");evaluacion();'  class='btn btn-outline-info btn-sm float-right pregunta' > <i class='fa fa-list'></i>    Evaluar</button>"
                        + "</strong>"
                        + "<small class='badge btn-outline-success' style='font-size:12px;' title='" + value.descripcion + "'><i class='fa fa-info-circle'></i> Recomendación</small>"
                        + check_auditor
                        + "</p>"
                        + "<img src='../public/images/" + check + "' width='60px' >"
                        + "</div>"


                        );
            });
            $('#modalsubcontrol').modal('show');
        }
    });
    return false;

}






function evaluar(idsubco, titulo) {

    $('#pregunta').html("<i class='fa fa-list' ></i> " + titulo);
    $('#idpregunta').val(idsubco);
    $('#formEvaluar')[0].reset();
    $('#modalEvaluar').modal('show');

}

function evaluacion() {

    var datos = {
        "idsubco": $('#idpregunta').val()
    };
    $.ajax({
        data: datos,
        type: "POST",
        dataType: "json",
        cache: false,
        url: "http://localhost/ciber/index.php/AutoevaluacionCI/validaEvaluacion",
        success: function (data) {
            console.log("salida");
            console.log(data);
            
            
            
            

            $('#evidenciafile').text("");
            $('#observacion').text("No Registra");
            
            $("#cardComentario").addClass( "text-center" );
            $("#img_comentario").css("margin-left","35%");
            $("#addtexto").css("display", "none");
            $("#img_comentario").css("display", "block");
            $("#observacion").css("display", "block");


            $('#file_evidencia').removeAttr("href");
            $('#texto_evidencia').text("Sin Adjunto");
            $("#img_evidencia").attr("src", "../public/images/delete_file.png");


            $("#img_estado").attr("src", "../public/images/no_check.png");
            $('#estado').text("No Registra");
            $("#lst").css("display", "none");


            if (data[0].idestado !== null) {
                $("#img_estado").attr("src", "../public/images/chech.png");
                $('#estado').text(data[0].nomestado);
            }



            if (data[0].evidencia !== null) {
                $('#file_evidencia').attr('href', '../upload/' + data[0].evidencia);
                $('#file_evidencia').attr('href');
                $("#img_evidencia").attr("src", "../public/images/auditar.png");
                $('#texto_evidencia').text("Ver Adjunto");
                $("#lst").css("display", "block");
            }

            if (data[0].comentario !== null) {
                
                $(".card").css("height","94%");
                $("#addtexto").css("display", "block");
                $("#cardComentario").removeClass( "text-center" );                
                $('#addtexto').text(data[0].comentario);
                $("#img_comentario").css("display", "none");
                $("#observacion").css("display", "none");
            }


        }
    });
    return false;


}





function insertarDetalle() {
    var opcion = $('input:radio[name=opcion]:checked').val();
    var idsubControl = $('#idpregunta').val();
    var idControl = $('#idcontrol').val();
    var iduser = $('#iduser').val();
    var comentario = $('#comentario').val();


    var datos = {
        "idsubco": idsubControl,
        "idestado": opcion,
        "comentario": comentario
    };

    console.log(datos);
    $.ajax({
        data: datos,
        type: "POST",
        dataType: "json",
        cache: false,
        url: "http://localhost/ciber/index.php/AutoevaluacionCI/detalle",
        success: function (data) {
            console.log(data);
            if (data) {
                subcontrol(idControl, $('#ModalTitulo').text());
                controles();
            }
            $('#modalEvaluar').modal('toggle');

        }
    });
    return false;


}


function nivelMadurez() {
    $.ajax({
        //data: datos,
        type: "POST",
        dataType: "json",
        cache: false,
        url: "http://localhost/ciber/index.php/AutoevaluacionCI/madurez",
        success: function (data) {


            if (data[0].madurez === null)
            {
                $('#madurez').text("1");
                $("#circulo").css("background-color", "red");
            }
            if (data[0].madurez > 0 && data[0].madurez < 25)
            {
                $('#madurez').text("1");
                $("#circulo").css("background-color", "red");
            }
            if (data[0].madurez >= 25 && data[0].madurez < 50)
            {
                $('#madurez').text("2");
                $("#circulo").css("background-color", "yellow");
                $("#circulo").css("color", "black");
            }
            if (data[0].madurez >= 50 && data[0].madurez < 75)
            {
                $('#madurez').text("3");
                $("#circulo").css("background-color", "#eab410");
            }
            if (data[0].madurez >= 75 && data[0].madurez <= 100)
            {
                $('#madurez').text("4");
                $("#circulo").css("background-color", "#56bd56");
            }

        }
    });
    return false;


}


function convertDateFormat(string) {
	var info = string.split('-');
	return info[2] + '-' + info[1] + '-' + info[0];
}





