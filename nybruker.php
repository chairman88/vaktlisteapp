<!DOCTYPE html>
<html lang="en">

    <head>
    <?php

 	require_once 'db.php';
    require_once 'functions.php';
	

 	?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>@Work</title>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">

        <!-- MDL -->
        <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-red.min.css">
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
       
        <!-- Your custom styles (optional) -->
        <link href="css/style.css" rel="stylesheet">

    </head>

    <body>



        <!--Navigation-->
        <header>

            <!--Navbar-->
            <nav class="navbar navbar-dark navbar-fixed-top scrolling-navbar primary-color">

                <!-- Collapse button-->
                <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx">
                <i class="fa fa-bars"></i></button>

                <div class="container">
                  <!--Collapse content-->
                    <div class="collapse navbar-toggleable-xs" id="collapseEx">
                        <!--Navbar Brand-->
                        <a class="navbar-brand" href="index.html">@Work - Admin</a>
                        <!--Links-->
                        <ul class="nav navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Assistenter <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="vakter.html">Vakter</a>
                            </li>


                        </ul>

                        <!--Navbar icons-->
                        <ul class="nav navbar-nav nav-flex-icons">
                            <li class="nav-item">
                                <a class="nav-link"><i class="fa fa-user fa-2x"></i></a>
                            </li>

                        </ul>

                    </div>
                    <!--/.Collapse content-->
               </div>
            </nav>
            <!--/.Navbar-->

        </header>
        <!--/Navigation-->

        <!--Main layout-->
        <main class="p-t-6">
           <script>
            $('form').on("submit", function(event) {
                    event.preventDefault();
                    var formData = $("#newuser").serialize();
                $.ajax({
                    type: 'POST',
                    url: 'functions.php',
                    data: formData,
                    dataType: 'json',
                    
                });
           </script>
            <div class="container-fluid">   
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                     
                       <h2>Ny bruker</h2>
                      
                        <form class="form" id="newuser" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                            
                            <div class="md-form form-group">
                               
                                <input type="text" name="fname" class="form-control validate">
                                <label for="fname">Fornavn</label>
                                
                            </div>
                            <div class="md-form form-group">
                               
                                <input type="text" name="lname" class="form-control validate">
                                <label for="lname">Etternavn</label>
                                
                            </div>
                            <div class="md-form form-group">
                               
                                <input type="text" name="tlf" class="form-control validate">
                                <label for="tlf">Tlf</label>
                                
                            </div>
                            <div class="md-form form-group">
                               
                                <input type="text" name="epost" class="form-control validate">
                                <label for="epost">E-postadressse</label>
                                
                            </div>
                            <div class="md-form form-group">
                               
                                <input type="text" name="adresse" class="form-control validate">
                                <label for="adresse">Adresse</label>
                                
                            </div>
                            <div class="form-group" name="type">
                               
                               Type
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                <span class="mdl-radio__label">Admin</span>
                            </label>
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                                <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2" >
                                <span class="mdl-radio__label">Assistent</span>
                            </label>
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
                                <input type="radio" id="option-3" class="mdl-radio__button" name="options" value="3" >
                                <span class="mdl-radio__label">Bruker</span>
                            </label>

                                
                            </div>
                            <div class="md-form form-group">
                               
                                <input type="text" name="brukernavn" class="form-control validate">
                                <label for="brukernavn">Brukernavn</label>
                                
                            </div>
                            
                            <div class="md-form form-group">
                               
                                <input type="password" name="passord" class="form-control validate">
                                <label for="passord">Passord</label>
                                
                            </div>
                            <button type="submit" class="btn btn-primary">Lagre</button>
                            </form>
                    </div>
                    
                    
                </div>
            </div>
        </main>
        <!--/Main layout-->

        <!-- SCRIPTS -->

        <!-- JQuery -->
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/tether.min.js"></script>

        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>
        
        <!-- MDL -->
        <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>



    </body>

</html>