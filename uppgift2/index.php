<?php

include_once 'api/App.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency - Start Bootstrap Theme</title>
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
                       App::main();
                       ?>               
            </div>
        </section> 
          <!-- Team-->

          <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Fråga oss</h2>
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/pic_Vera.jpg" alt="" />
                            <h4>Vera Stepanova</h4>
                            <p class="text-muted">Vera.Stepanova@yh.nackademin.se</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/Denitsa.jpg" alt="" />
                            <h4>Denitsa Dencheva</h4>
                            <p class="text-muted">Denitsa.Dencheva@yh.nackademin.se
</p>
                        </div>
                    </div>
         
        
        
    </body>
</html>
