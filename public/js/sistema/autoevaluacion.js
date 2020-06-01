$(document).ready(function () {
    datos();
    controles();
});
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

            $('#controles').html("");
            $.each(data, function (key, value) {
                $('#controles').append(
                        "<li class='list-group-item d-flex justify-content-between align-items-center'>"
                        + "<button class='btn btn-link' onclick='subcontrol("+ value.id +",\"" + value.nomcuest + "\")' id='nomcontrol' type='button' data-toggle='collapse' data-target='#collapseOne' aria-expanded='true' aria-controls='collapseOne'>"
                        + value.nomcuest
                        + "</button>"
                        + "<h5><span class='badge badge-success badge-pill'>100%</span></h5>"
                        + "</li>"

                        );
            });

        }
    });
    return false;
}


function subcontrol($id,$titulo) {
    
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


            $('#itemsub').html("");
            $('#ModalTitulo').text($titulo);
            $.each(data, function (key, value) {
                $('#itemsub').append(
                        "<div class='media text-muted pt-3'>"
                        + "<svg class='bd-placeholder-img mr-2 rounded' width='32' height='32'  preserveAspectRatio='xMidYMid slice' focusable='false' role='img' aria-label='Placeholder: 32x32'>"
                        + "<title>Placeholder</title>"
                        + "<rect width='100%' height='100%' fill='#007bff'></rect>"
                        + "<text x='50%' y='50%' fill='#007bff' dy='.3em'>32x32</text></svg>"
                        + "<p class='media-body pb-3 mb-0 small lh-125 border-bottom border-gray'>"
                        + "<strong class='d-block text-gray-dark'>"
                        + value.titulo
                        + "</strong>"
                        + value.descripcion
                        + "</p>"
                        + "</div>"
                        );
            });
            $('#modalsubcontrol').modal('show');
        }
    });
    return false;

}



