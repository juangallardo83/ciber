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
            var archivo = data.replace(/[ '"]+/g,'');
            $('#userfile').val('');
            
            if(archivo !== null){
                $('#linkfile').attr('href','../upload/'+archivo);
                $('#evidenciafile').text(archivo);
                $("#lst").css("display", "block");
            }
            
        }
    
    });


});
