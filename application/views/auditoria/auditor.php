<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Inicio</title>       
        <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>public/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        if (empty($this->session->userdata('idauditor'))) {
            return redirect('/', 'refresh');
        }
        ?>

        <nav class="navbar nav-color">
            <span class="navbar-brand mb-0 h1 fuente">
                <img src="<?php echo base_url(); ?>public/images/logo.png" width="48px" >    CIBERMADUREZ
            </span>

            <div class="card-footer madurez "> 
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">

                            <li class="nav-item">
                                <a class="nav-link" href="Welcome" data-toggle="modal" data-target="#modalmanual"> <i class="fa fa-book" aria-hidden="true"></i> Manual de Usuario</a>
                            </li>  


                    </div>


                    <div class="modal fade" id="modalmanual" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document" style="max-width: 850px;;margin-top: 150px;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="Modalmanual">Manual de Usuario  </h6>

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="itemsub">
                                    <   <iframe src="<?php echo base_url(); ?>public/pdf/manual.pdf"                              
                                                style="width:830px; height:600px;" frameborder="0"></iframe>

                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </nav>


            </div>






        </nav>

        <div class="container">
           <div class="fuente h1 text-center" style="margin-top: 25px;">Empresa Auditar</div>
            <div class="row  justify-content-center align-items-center" >                
               
                <div class="card mb-3 border-success " style="max-width: 840px;margin-top: 100px;">
                    <div class="row no-gutters">
                        <div class="col-md-2" style=" margin-top:15px;padding: 10px;">
                            <img src="<?php echo base_url(); ?>public/images/auditar.png" width="80px" class="card-img" alt="...">
                        </div>
                        <div class="col-md-10">
                            <div class="card-body">
                               
                                <h5 class="card-title">Empresa : <label id="empresa"></label></h5>
                                <p class="card-text"><small class="text-muted">Nivel : <label id="nivel"></label></small></p>
                                <p class="card-text"><small class="text-muted">Usuario : <label id="user"></label></small></p>
                                 <p class="card-text"><small class="text-muted">Email : <label id="email"></label></small></p>
                                <p class="card-text"><small class="text-muted">fecha Asignación : <label id="fecha"></label></small></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-success">
                        <a href="revision" class="btn btn-success btn-block">Acceder</a>
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
        <script src="<?php echo base_url(); ?>public/js/sistema/auditor.js" type="text/javascript"></script>       



    </body>
</html>