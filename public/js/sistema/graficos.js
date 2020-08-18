$(document).ready(function () {
    Avance();
});
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

function Avance() {
    $.ajax({
//data: datos,
        type: "POST",
        dataType: "json",
        cache: false,
        url: "http://localhost/ciber/index.php/AutoevaluacionCI/control",
        success: function (data) {
            var pendiente = 0;
            var terminadas = 0;
            var iniciadas = 0;
            var progreso = 0;
            nivelMadurez();
            $.each(data, function (key, value) {
                if (value.avance !== null) {
                    progreso += parseInt(value.avance);
                }

                if (parseInt(value.avance) > 0 && parseInt(value.avance) < 100) {
                    iniciadas += 1;
                }
                if (parseInt(value.avance) === 100) {
                    terminadas += 1;
                }
                if (value.avance === null) {
                    pendiente += 1;
                }
            });
            $('#iniciados').text(iniciadas);
            $('#terminados').text(terminadas);
            $('#pendientes').text(pendiente);
            //$('#progreso').val(progreso / data.length);


            $("#test-circle").circliful({
                animation: 1,
                animationStep: 5,
                foregroundBorderWidth: 8,
                backgroundBorderWidth: 8,
                foregroundColor: '#28a745',
                percent: progreso / data.length,
                textSize: 35,
                textStyle: 'font-size: 12px;',
                textColor: '#666',
            });
            controles(data);
        }
    });
    return false;
}

function controles(datos) {

    var control = [];
    var texto = [];
    var avance = [];
    for (var key in datos)
    {
        control[key] = "Control N° " + datos[key].id;
        texto[key] = datos[key][1];
        if (datos[key].avance !== null) {
            avance[key] = parseInt(datos[key].avance);
        } else {
            avance[key] = 0;
        }
    }



    Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Controles '
        },
        subtitle: {
            text: 'CiberMadurez'
        },
        xAxis: {
            categories: control,
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            max: 100,
            title: {
                text: 'Avance (%)',
                align: 'high'
            },
            labels: {
                overflow: 'justify',
                format: "{value}%"
            }

        },
        tooltip: {
            valueSuffix: ''
        },
        plotOptions: {
            series: {
                stickyTracking: false,
                cursor: 'pointer',
                connectNulls: true,
                point: {
                    events: {
                        click: function () {
                            //popUpGraph(this.category,this.y)
                            //alert("'Category: ' + this.category + ', value: '
                            //+ this.y);
                            //subcontrolModal(this.x + 1);
                            desplegar(this.x + 1)
                        },
                        mouseOver: function (event) {
                            $('#capa').css("display", "");
                            tituloControl(this.x + 1);
                            //$capa1.css("display", "");
                            //desplegarOB(this.category, this.y);
                            // $capa1.html('Moused over ' + this.category)
                            //.css('color', 'green');
                        },
                        mouseOut: function (event) {
                            $('#capa').css("display", "none");
                            $('#capa').html("");
                        }
                    }
                }
            }
        },
        legend: {
            enabled: false,
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -50,
            y: 100,
            floating: true,
            borderWidth: 1,
            backgroundColor:
                    Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
                name: 'Avance',
                data: avance

            }]
    }
    );
}


function tituloControl(id) {


    var datos = {
        "idcontrol": id
    };
    $.ajax({
        data: datos,
        type: "POST",
        dataType: "json",
        cache: false,
        url: "http://localhost/ciber/index.php/AutoevaluacionCI/controltit",
        success: function (data) {
            console.log(data);
            $("#capa").html(data[0].control);

        },
        error: function (e) {
            console.log("error.....");
            console.log(e);
        }
    });
}



function desplegar(id) {


    var datos = {
        "idcontrol": id
    };
    $.ajax({
        data: datos,
        type: "POST",
        dataType: "json",
        cache: false,
        url: "http://localhost/ciber/index.php/AutoevaluacionCI/subcontroltit",
        success: function (data) {
            //console.log(data);
            //$("#capa").html("Descripción: " + data[0]);
            subcontroles(data);
            $('#modalsubcontrol').modal("show");
        },
        error: function (e) {
            console.log("error.....");
            console.log(e);
        }
    });
}

function subcontrolModal(cn) {
    subcontroles();
    //$('#control').html(cn);
    $('#modalsubcontrol').modal("show");
    return false;
}

function proceso() {
    Highcharts.chart('container1', {
        chart: {
            type: 'xrange'
        },
        title: {
            text: 'Highcharts X-range'
        },
        accessibility: {
            point: {
                descriptionFormatter: function (point) {
                    var ix = point.index + 1,
                            category = point.yCategory,
                            from = new Date(point.x),
                            to = new Date(point.x2);
                    return ix + '. ' + category + ', ' + from.toDateString() +
                            ' to ' + to.toDateString() + '.';
                }
            }
        },
        xAxis: {
            type: 'datetime'
        },
        yAxis: {
            title: {
                text: ''
            },
            categories: ['Prototyping'],
            reversed: true
        },
        series: [{
                name: 'Project 1',
                // pointPadding: 0,
                // groupPadding: 0,
                borderColor: 'gray',
                pointWidth: 20,
                data: [{
                        x: Date.UTC(2014, 10, 21),
                        x2: Date.UTC(2014, 11, 2),
                        y: 0,
                        partialFill: 0.10

                    }],
                dataLabels: {
                    enabled: true
                }
            }]

    });
}


function subcontroles(datos) {


    var subcontrol = [];
    var titulo = [];
    var estado = [];
    var nom;
    for (var key in datos)
    {

        subcontrol[key] = "Subcontrol N° " + (parseInt(key) + 1);
        //texto[key] = datos[key][1];
        if (datos[key].idestado !== null) {
            if (parseInt(datos[key].idestado) === 1) {
                nom = 'Muy Insuficiente';
            }
            if (parseInt(datos[key].idestado) === 2) {
                nom = 'Insuficiente';
            }
            if (parseInt(datos[key].idestado) === 3) {
                nom = 'Regular';
            }
            if (parseInt(datos[key].idestado) === 4) {
                nom = 'Bueno';
            }
            if (parseInt(datos[key].idestado) === 5) {
                nom = 'Muy Bueno';
            }



            estado[key] = [nom, parseInt(datos[key].idestado)];
        } else {

            estado[key] = ['No Evaluado', 0];
        }
    }


    Highcharts.chart('c3', {
        chart: {
            type: 'bar'
        },
        credits: {
            enabled: true,
            text: "CiberMadurez"
        },
        title: {
            text: 'Proceso calificación Subcontroles'
        },
        xAxis: {
            categories: subcontrol
        },
        yAxis: {
            min: 0,
            max: 5,
            title: {
                text: 'Estado'
            }
        },
        legend: {
            reversed: true,
            enabled: false
        },
        plotOptions: {
            plotOptions: {
                series: {
                    stickyTracking: false,
                    cursor: 'pointer',
                    connectNulls: true,
                    point: {
                        events: {                            
                            mouseOver: function (event) {
                                $('#capasub').css("display", "");
                                //tituloControl(this.x + 1);
                                $('#capasub').html("ggg");
                                //desplegarOB(this.category, this.y);
                                // $capa1.html('Moused over ' + this.category)
                                //.css('color', 'green');
                            },
                            mouseOut: function (event) {
                                $('#capasub').css("display", "none");
                                $('#capasub').html("");
                            }
                        }
                    }
                }
            }
        },
        series: [{
                colors: ['#f0f', '#ff0', '#0ff'],
                data: estado,
                dataLabels: {
                    enabled: true,
                    align: 'right',
                    format: '{point.name}',
                    color: '#353c4e'

                }

            }]
    });
}


