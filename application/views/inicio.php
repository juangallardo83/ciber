<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Inicio</title>       
        <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>public/css/inicio/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <header>
            <!-- Header Start -->
            <div class="header-area header-transparent">
                <div class="main-header header-sticky">
                    <div class="container-fluid">
                        <div class="menu-wrapper d-flex align-items-center justify-content-between" style="
                             padding: 15px;">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.html"><img src="<?php echo base_url(); ?>public/images/logo_1.png" alt=""></a>
                            </div>


                            <div class="header-btns d-none d-lg-block f-right">
                                <a href="#" class="btn header-btn">Inicio</a>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
        </header>
        <section>
            <div class="row">
                 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
            </div>
           
        </section>
        


        <script src="<?php echo base_url(); ?>public/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js" type="text/javascript"></script>


    </body>
</html>