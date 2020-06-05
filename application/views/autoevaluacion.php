<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Inicio</title>       
        <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>       
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
    </div








    <!-- Modal -->
    <div class="modal fade" id="modalsubcontrol" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document" style="max-width: 900px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalTitulo"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="itemsub">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Grabar</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="modalEvaluar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document" style="max-width: 900px;">
            <div class="modal-content">
                <div class="modal-header">
                   
                    <h5 class="modal-title" id="pregunta" > </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="">
                    <table class="table table-header-rotated">
                        <thead>
                            <tr>
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
                            <tr>
                               
                                <td class="text-center"><input   name="column[]" type="radio" value="row1-column1"></td>
                                <td class="text-center"><input  name="column[]" type="radio" value="row1-column2"></td>
                                <td class="text-center"><input name="column[]" type="radio" value="row1-column3"></td>
                                <td class="text-center"><input name="column[]" type="radio" value="row1-column4"></td>
                                <td class="text-center"><input name="column[]" type="radio" value="row1-column5"></td>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Grabar</button>
                </div>
            </div>
        </div>
    </div>


    <?php require_once 'component/footer.php'; ?>

    <script src="<?php echo base_url(); ?>public/js/jquery-3.5.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js" type="text/javascript"></script>    
    <script src="<?php echo base_url(); ?>public/js/sistema/autoevaluacion.js" type="text/javascript"></script>

</body>
</html>