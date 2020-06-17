<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Inicio</title>       
        <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/> 
        <link href="<?php echo base_url(); ?>public/iCheck/icheck-bootstrap.min.css" rel="stylesheet" type="text/css"/>   
        <link href="<?php echo base_url(); ?>public/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <?php require_once 'component/navbar.php'; ?>
        <div class="container">

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
                    <div class="modal-body" id="itemsub">


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
                        <div class="modal-body" id="">                                        



                            <div class="card border-primary mb-3" >
                                <div class="card-header">1. Seleccione la alternativa que más se acerque a su realidad (MANDATORIA)</div>
                                <div class="card-body text-primary">
                                    <table class="table table-header-rotated">
                                        <thead>
                                            <tr style="background-color: lightslategrey;color: navajowhite;">
                                                <!-- First column header is not rotated -->

                                                <!-- Following headers are rotated -->
                                                <th class="rotate text-center"><div><span>Muy Insuficiente</span></div></th>
                                                <th class="rotate text-center"><div><span>Insuficiente</span></div></th>
                                                <th class="rotate text-center"><div><span>Regular</span></div></th>
                                                <th class="rotate text-center"><div><span>Bueno</span></div></th>
                                                <th class="rotate text-center"><div><span>Muy Bueno</span></div></th>

                                            </tr> 
                                        </thead>

                                        <tbody>
                                            <tr >
                                                <td class="text-center">
                                                    <div class="radio icheck-success">
                                                        <input type="radio" id="opcion1" name="opcion" value="1" />
                                                        <label for="opcion1"></label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="radio icheck-success">
                                                        <input type="radio" id="opcion2" name="opcion" value="2" />
                                                        <label for="opcion2"></label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="radio icheck-success">
                                                        <input type="radio" id="opcion3" name="opcion" value="3" />
                                                        <label for="opcion3"></label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="radio icheck-success">
                                                        <input type="radio" id="opcion4" name="opcion" value="4" />
                                                        <label for="opcion4"></label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="radio icheck-success">
                                                        <input type="radio" id="opcion5" name="opcion" value="5" />
                                                        <label for="opcion5"></label>
                                                    </div>
                                                </td>


                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="card border-primary  mb-3" >
                                <div class="card-header">2. Comente como realiza este proceso (OPCIONAL)</div>
                                <div class="card-body text-primary">
                                    <textarea class="form-control" style="margin-top: 5px;" id="comentario" rows="2" placeholder="descripción"></textarea>
                                </div>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" onclick="insertarDetalle();" class="btn btn-success">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>



        <!--<?php require_once 'component/footer.php'; ?> -->
        <script src="<?php echo base_url(); ?>public/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js" type="text/javascript"></script>    
        <script src="<?php echo base_url(); ?>public/js/sistema/autoevaluacion.js" type="text/javascript"></script>

    </body>
</html>