<?php

require_once 'database.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Webshop</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">


    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets\img\logos\DATA_IT.PNG" alt="" /></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ml-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item"><a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#about">Böcker</a></li>
                    <li class="nav-item"><a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#team">Kundvagn</a></li>
                    <li class="nav-item"><a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#contact">Kontakta oss</a></li>

                </ul>
            </div>
        </div>
    </nav>



    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Välkommen Till Vår Bokhandel!</div>
            <div class="masthead-heading text-uppercase">duktiga programmerare</div>
        </div>
    </header>
    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Topplistan Data & IT</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
            <?php

            require("read.php");
            ?>

        </div>
    </section>



    <!-- Kundvagn-->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Din kundvagn är tom</h2>
                <br>
                <br>
                <br>
                <br>
            </div>

        </div>
        </div>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Kontakta oss</h2>
                </div>

                <?php

                require("create.php");
                ?>

            </div>
        </section>

        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/Denitsa.jpg" alt="" />
                            <h4>Denitsa Dencheva</h4>
                            <p class="text-muted">Denitsa.Dencheva@yh.nackademin.se</p>
                            
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/Vera.jpg" alt="" />
                            <h4>Vera Stepanova</h4>
                            <p class="text-muted">Vera.Stepanova@yh.nackademin.se</p>
                            
                        </div>
                    </div>
                    
                </div> 
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted"></p></div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 text-lg-left">Copyright © Denitsa Dencheva & Vera Stepanova 2021</div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3" href="#!">Privacy Policy</a>
                        <a href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
</body>

</html>