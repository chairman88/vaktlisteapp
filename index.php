<!DOCTYPE html>
<html lang="en">

    <head>

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
        
        <link rel="manifest" href="manifest.json">

    </head>

    <body>
            <?php
				require_once('db.php');					// Create Database.
			?>


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
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Assistenter <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="vakter.html">Vakter</a>
                            </li>


                        </ul>

                        <!--Navbar icons-->
                        <ul class="nav navbar-nav nav-flex-icons">
                            <li class="nav-item">
                                <a class="nav-link" href="profil.html"><i class="fa fa-user fa-2x"></i></a>
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
            <div class="container-fluid">   
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                       <h2>Aktive assistenter</h2>

                        <table id="1" class="table">
                            <thead>
                                <tr>
                                    <th>Fornavn</th>
                                    <th>Etternavn</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Eirik</td>
                                    <td>Bekkemellem</td>
                                    <td>
                                        <a class="blue-text" href="endrebruker.html"><i class="fa fa-pencil"></i></a>
                                        <a class="red-text"><i class="fa fa-arrow-down"></i></a>
                                        <a class="black-text"><i class="fa fa-user-times"></i></a>
                                    </td>
                                </tr>
                                <tr>

                                    <td>Øyvind</td>
                                    <td>Bjerke</td>
                                    <td>
                                        <a class="red-text"><i class="fa fa-arrow-down"></i></a>
                                        <a class="black-text"><i class="fa fa-user-times"></i></a>
                                    </td>
                                </tr>
                                <tr>

                                    <td>Julie</td>
                                    <td>Gulliksen</td>
                                    <td>
                                        <a class="red-text"><i class="fa fa-arrow-down"></i></a>
                                        <a class="black-text"><i class="fa fa-user-times"></i></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                         
                       <h2>Inaktive assistenter</h2>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Fornavn</th>
                                    <th>Etternavn</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Åge</td>
                                    <td>Tangsveen</td>
                                    <td>
                                        <a class="green-text"><i class="fa fa-arrow-up"></i></a>
                                        <a class="black-text"><i class="fa fa-user-times"></i></a>
                                    </td>
                                </tr>
                                <tr>

                                    <td>Ketil</td>
                                    <td>Owren</td>
                                    <td>
                                        <a class="green-text"><i class="fa fa-arrow-up"></i></a>
                                        <a class="black-text"><i class="fa fa-user-times"></i></a>
                                    </td>
                                </tr>
                                <tr>

                                    <td>Thomas</td>
                                    <td>Haug</td>
                                    <td>
                                        <a class="green-text"><i class="fa fa-arrow-up"></i></a>
                                        <a class="black-text"><i class="fa fa-user-times"></i></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
        
                    </div>
                </div>
                
                <hr class="extra-margins">

               
                
         
                
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                       <h2>Admin</h2>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Fornavn</th>
                                    <th>Etternavn</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Snorre</td>
                                    <td>Gjøby</td>
                                    <td>
                                        <a class="blue-text"><i class="fa fa-pencil"></i></a>
                                        <a class="black-text"><i class="fa fa-user-times"></i></a>
                                    </td>
                                </tr>
                        
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                         <h2>Brukere</h2>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Fornavn</th>
                                    <th>Etternavn</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Morten</td>
                                    <td>Kleven</td>
                                    <td>
                                        <a class="blue-text"><i class="fa fa-pencil"></i></a>
                                        <a class="black-text"><i class="fa fa-user-times"></i></a>
                                    </td>
                                </tr>
                        
                            </tbody>
                        </table>
                    </div>

                </div>
                
            <div class="row">
                <div class="col-lg-2 col-sm-2 col-xs-2"><a  class="btn btn-primary" href="nybruker.html"><i class="fa fa-plus "></i></a>
                </div>
                <div class="col-lg-10 col-sm-10 col-xs-10"></div>
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