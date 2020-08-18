<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Inicio</title>       
        <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/> 
        <link href="<?php echo base_url(); ?>public/css/highcharts.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>public/icon/feather/css/feather.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>public/css/chartist.css" rel="stylesheet"  type="text/css" media="all"/>
        <link href="<?php echo base_url(); ?>public/css/css1/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>public/css/style.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <?php require_once 'component/navbar.php'; ?>
        <div class="container-fluid m-t-25">
            <div class="row m-r-50 m-l-50">
                <div class="col-3">
                    <div class="col-md-10">

                        <div class="card user-card2">
                            <div class="card-block text-center">
                                <h6 class="">Progreso Controles</h6>
                                <div class="estilo_div" id="test-circle"></div>



                            </div>

                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="card widget-card-1">
                            <div class="card-block-small">
                                <i class="feather icon-pie-chart bg-c-blue card1-icon"></i>
                                <span class="text-c-blue f-w-600">En Ejecución</span>
                                <h4 id="iniciados">0</h4>
                                <div>
                                    <span class="f-left m-t-10 text-muted">
                                        <i class="text-c-blue f-16 feather icon-alert-triangle m-r-10"></i>Controles iniciados
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-10">
                        <div class="card widget-card-1">
                            <div class="card-block-small">
                                <i class="feather icon-home bg-c-pink card1-icon"></i>
                                <span class="text-c-pink f-w-600">Completados</span>
                                <h4 id="terminados">0</h4>
                                <div>
                                    <span class="f-left m-t-10 text-muted">
                                        <i class="text-c-pink f-16 feather icon-calendar m-r-10"></i>Controles Finalizados
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="card widget-card-1">
                            <div class="card-block-small">
                                <i class="feather icon-alert-triangle bg-c-green card1-icon"></i>
                                <span class="text-c-green f-w-600">Pendientes</span>
                                <h4 id="pendientes">0</h4>
                                <div>
                                    <span class="f-left m-t-10 text-muted">
                                        <i class="text-c-green f-16 feather icon-tag m-r-10"></i>Controles No Ejecutados
                                    </span>
                                </div>
                            </div>

                        </div>

                    </div>




                </div>

                <div class="col-9">
                    <div id="container" class="m-r-50" style="height: 600px;"  ></div>                   
                    <div id="capa" class="alert alert-primary m-r-50" role="alert" ></div>                    
                    <div id="container1" class="m-r-50"></div>
                </div>

            </div>



        </div>

        <div class="modal fade" id="modalsubcontrol" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document" style="max-width: 650px;;margin-top: 150px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="ModalTitulo">  </h6>
                        <input type="hidden" id="idcontrol" value="" >
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="itemsub">
                        <div id="c3"></div>
                         <div id="capasub" class="alert alert-primary " role="alert" ></div>    
                        

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                    </div>
                </div>
            </div>
        </div>













        <script src="<?php echo base_url(); ?>public/js/jquery-3.5.1.min.js" type="text/javascript"></script>       
        <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="<?php echo base_url(); ?>public/js/highcharts.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/js/jquery.knob.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/js/knob-custom-chart.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/js/jquery.circliful.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/js/jquery.circliful.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/js/xrange.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/js/script.js" type="text/javascript"></script>       
        <script src="<?php echo base_url(); ?>public/js/sistema/graficos.js" type="text/javascript"></script>




    </body>
</html>