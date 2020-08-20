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
        <!--<?php require_once 'component/navbar.php'; ?>-->

        <div class="container">
            <div id="login">
                <h3 class="text-center text-white pt-5">Login </h3>
                <div class="container">
                    <div id="login-row" class="row justify-content-center align-items-center">
                        <div id="login-column" class="col-md-6">
                            <div id="login-box" class="col-md-12">
                                <form id="login-form" class="form" action="" method="post">
                                    <h3 class="text-center text-info">Login</h3>
                                    <div class="form-group">
                                        <label for="username" class="text-info">Email:</label><br>
                                        <input type="text" name="email" id="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="text-info">Password:</label><br>
                                        <input type="password" name="password" id="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="remember-me" class="text-info"><span>Recordar</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                        <input type="button" name="btn_login" id="btn_login" class="btn btn-info btn-md btn-block" value="Acceder">
                                    </div>
                                    <div id="register-link" class="text-right">
                                        <a href="#modalregistro" data-toggle="modal">Registrarse</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="modalregistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document" style="max-width: 500px;;margin-top: 150px;">
                <div class="modal-content">
                    <form id="registrarse">
                        <div class="modal-header">
                            <h6 class="modal-title" ><i class="fa fa-user-plus" aria-hidden="true"></i>    Resgistrarse </h6>
                            <input type="hidden" id="idcontrol" value="" >
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <form id="registrouser" class="needs-validation" novalidate>
                        <div class="modal-body">
                            
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Nombre</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nombre" required>                                        
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-4 col-form-label">Apellido</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="paterno" required>                                        
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-4 col-form-label">Nombre Empresa (Opcional)</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nom_emp">                                        
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-4 col-form-label">Email</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="mail" required>                                        
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="pass" required>                                        
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-4 col-form-label">Nivel Empresa</label>
                                    <div class="col-sm-8">
                                        <select name="empresa" class="form-control" id="empresa" required="">
                                            <option value="" selected>Seleccionar</option>
                                            <option value="1">Micro Empresa</option>
                                            <option value="2">Pequeña Empresa</option>
                                            <option value="3">Mediana Empresa</option>

                                        </select>
                                    </div>
                                </div>
                              <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-4 col-form-label">Región Empresa (Opcional)</label>
                                    <div class="col-sm-8">
                                        <select name="region" class="form-control" id="region">
                                            <option value="no registra" selected>Seleccionar</option>
                                            <option value="1">I Región de Tarapacá</option>
                                            <option value="2">II Región de Antofagasta</option>
                                            <option value="3">III Región de Atacama</option>
                                            <option value="4">IV Región de Coquimbo</option>
                                            <option value="5">V Región de Valparaíso</option>
                                            <option value="6">VI Región del Libertador General Bernardo O’Higgins</option>
                                            <option value="7">VII Región del Maule</option>
                                            <option value="8">VIII Región del Biobío</option>
                                            <option value="9">IX Región de La Araucanía</option>
                                            <option value="10">X Región de Los Lagos</option>
                                            <option value="11">XI Región Aysén del General Carlos Ibáñez del Campo</option>
                                            <option value="12">XII Región de Magallanes y Antártica Chilena</option>
                                            <option value="13">Región Metropolitana de Santiago</option>
                                            <option value="14">XIV Región de Los Ríos</option>
                                            <option value="15">XV Región de Arica y Parinacota</option>
                                            <option value="16">XVI Región de Ñuble</option>
                                                                         
                                            
                                                                                  
                                                                                   
                                        </select>
                                    </div>
                                </div>
                           

                        </div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times-circle-o" aria-hidden="true"></i>  Cerrar</button>
                            <button type="submit" class="btn btn-success" id="btn_registro" ><i class="fa fa-check-circle-o" aria-hidden="true"></i>   Guardar</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- <?php require_once 'component/footer.php'; ?> -->

        <script src="<?php echo base_url(); ?>public/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/js/sistema/login.js" type="text/javascript"></script>

    </body>
</html>