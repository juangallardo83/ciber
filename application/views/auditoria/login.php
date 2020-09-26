<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login </title>       
        <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/> 
        <link href="<?php echo base_url(); ?>public/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

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
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </nav>


            </div>






        </nav>

       

        <div class="container">
            <div id="login_auditor">
                <h3 class="text-center text-white pt-5">Login </h3>
                <div class="container">
                    <div id="login-row" class="row justify-content-center align-items-center">
                        <div id="login-column" class="col-md-6">
                            <div id="login-box" class="col-md-12">
                                <form id="login-form" class="form" action="" method="post">
                                    <h3 class="text-center text-info">Login</h3>
                                    <div class="form-group">
                                        <label for="username" class="text-info">Email:</label><br>
                                        <input type="email" name="email_auditor" id="email_auditor" class="form-control" placeholder="auditor@mail.com">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="text-info">Password:</label><br>
                                        <input type="password" name="password_auditor" id="password_auditor" class="form-control" placeholder="********">
                                    </div>
                                    <div class="form-group">

                                        <input type="button" name="btn_login" id="btn_login_auditor" class="btn btn-info btn-md btn-block" value="Acceder">
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        

       

        <script src="<?php echo base_url(); ?>public/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/js/sistema/login.js" type="text/javascript"></script>

    </body>
</html>