$("#subir_archivo").click(function () {

    var formdata = new FormData($("form[name='data_popup']")[0]);

    var mts = $("#userfile").get(0).files[0];

    formdata.append("userfile", mts);

    $.ajax({
        url: "http://localhost/ciber/index.php/AutoevaluacionCI/do_upload",
        method: "post",
        data: formdata,
        processData: false,
        cache: false,
        contentType: false,
        success: function (data) {

            $('#userfile').val('');


            if (data !== 'false') {
                console.log(" en if = " + data);
                var archivo = data.replace(/[ '"]+/g, '');
                if (archivo !== null) {
                    $('#linkfile').attr('href', '../upload/' + archivo);
                    $('#evidenciafile').text(archivo);
                    $("#lst").css("display", "block");
                }
            } else {
                Swal.fire({
                    type: 'warning',
                    title: 'Archivo No Soportado',
                    text: 'Solo se pueden Guardar archivos PDF'
                });                

            }


        }

    });


});
