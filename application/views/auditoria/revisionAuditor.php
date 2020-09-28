<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Inicio</title>       
        <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/> 
        <link href="<?php echo base_url(); ?>public/iCheck/icheck-bootstrap.min.css" rel="stylesheet" type="text/css"/>   
        <link href="<?php echo base_url(); ?>public/css/sweetalert2.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>public/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        if (empty($this->session->userdata('idauditor'))) {
            return redirect('Auditor', 'refresh');
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
                            <li> <a href="../Welcome"   id="btn_logout" class="btn btn-gris btn-sm pull-right"><i class="fa fa-sign-out" aria-hidden="true"></i>   Salir</a></li>

                            <li class="nav-item">
                                <a class="btn btn-gris btn-sm pull-right"  data-toggle="modal" data-target="#modalmanual"> <i class="fa fa-book" aria-hidden="true"></i> Manual de Usuario</a>
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
                
                <div class="my-2 my-sm-0 form-inline nivel" >

                    <input type="hidden" id="iduser" value="<?= $this->session->userdata('user'); ?>" >

                </div>
               

        </nav>
        <div class="card-footer madurez "> 
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="datos"><i class="fa fa-home" aria-hidden="true"></i> Inicio <span class="sr-only">(current)</span></a>
                        </li>



                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <div class="m-r-50">
                            <img src="<?php echo base_url(); ?>public/images/avatar.png" alt="" width="24px"/>
                            <small ><?= $this->session->userdata('nomcompleto'); ?></small>
                        </div>

                      
                    </form>
                </div>
            </nav>


        </div>



        <div class="container mt-5">

            <div class="card" >                
                <div class="card-body">
                    <ul class="list-group"id="controles">
                    </ul>
                </div>
            </div>
        </div>









        <!-- Modal -->
        <div class="modal fade" id="modalsubcontrol" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document" style="max-width: 1100px;;margin-top: 150px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="ModalTitulo">  </h6>
                        <input type="hidden" id="idcontrol" value="" >
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="detallesub">


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                    </div>
                </div>
            </div>
        </div>



        <div class="modal fade" id="modalAuditor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document" style="max-width: 600px;;margin-top: 200px;">
                <div class="modal-content">
                    <div class="modal-header-auditor">
                        <h6 class="modal-title" id="ModalTitulo"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Observaciones del Auditor  </h6>
                        <input type="hidden" id="idcontrol" value="" >
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" >
                        <textarea id="obs_auditor"style="margin-top: 0px;margin-bottom: 0px;height: 120px;width: 100%;"></textarea>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="modalEvaluar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document" style="max-width: 1100px;margin-top: 190px;">
                <form id="formEvaluar">
                    <div class="modal-content">
                        <div class="modal-header">

                            <h6 class="modal-title" id="pregunta" > </h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <input type="hidden" id="idpregunta" value="" > 
                        <input type="hidden" id="iddetalle" value="" > 
                        <div class="modal-body" id=""> 
                            <div class="row">
                                <div class="col-3">
                                    <div class="card text-white bg-secondary mb-3">
                                        <div class="card-header">Estado</div>
                                        <div class="card-body text-center">
                                            <img id="img_estado" src="<?php echo base_url(); ?>public/images/chech.png" width="140px" >
                                            <p id="estado" class="card-text">Insuficiente</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card text-white bg-success mb-3" >
                                        <div class="card-header">Comentario</div>
                                        <div id="cardComentario"  class="card-body ">
                                            <p id="addtexto"></p>
                                            <img id="img_comentario" src="<?php echo base_url(); ?>public/images/comentario.png" width="140px" >
                                            <p id="observacion"  class="card-text">No Registra</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                                        <div class="card-header">Evidencia</div>
                                        <div class="card-body text-center">
                                            <a href="" id="file_evidencia" target="_blank"><img id="img_evidencia" src="<?php echo base_url(); ?>public/images/auditar.png" width="140px" ></a>
                                            <p id="texto_evidencia" class="card-text"></p>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                            <div class="card text-white bg-dark mb-3">
                                <div class="card-header">Recomendaciones del Auditor</div>
                                <div class="card-body">
                                    <textarea style="margin-top: 0px;margin-bottom: 0px;height: 200px;width: 100%;"></textarea>
                                    <div class="text-center">
                                        <button type="button" class="btn btn-secondary" >Guardar</button>  
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>                            
                        </div>
                    </div>
                </form>
            </div>
        </div>




        <script src="<?php echo base_url(); ?>public/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js" type="text/javascript"></script>         
        <script src="<?php echo base_url(); ?>public/js/sistema/auditor.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/js/sweetalert2.all.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/js/sistema/upload.js" type="text/javascript"></script>

    </body>
</html>