<nav class="navbar nav-color">
    <span class="navbar-brand mb-0 h1 fuente">
        <img src="<?php echo base_url(); ?>public/images/logo.png" width="48px" >    CIBERMADUREZ
    </span>
    <div class="my-2 my-sm-0 form-inline nivel" >
        <label class="fuente" >Nivel de Madurez </label>
        <input type="hidden" id="iduser" value="<?= $this->session->userdata('user'); ?>" >
        <div id="circulo" class="circle">
            <label id="madurez" class="posicion"></label>
        </div>
    </div>

</nav>
<div class="card-footer madurez "> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="Dashboard"><i class="fa fa-home" aria-hidden="true"></i> Inicio <span class="sr-only">(current)</span></a>
                </li>
                
                           

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <div class="m-r-50">
                    <img src="<?php echo base_url(); ?>public/images/avatar.png" alt="" width="24px"/>
                    <small ><?= $this->session->userdata('nomauditor'); ?></small>
                </div>

                <a href="Welcome"   id="btn_logout" class="btn btn-gris btn-sm pull-right"><i class="fa fa-sign-out" aria-hidden="true"></i>   Salir</a>
            </form>
        </div>
    </nav>


</div>


