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
<!-- JQuery -->
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    </head>

    <body>
            <?php
				require_once('db.php');					// Create Database.
			?>
			<script id="source" language="javascript" type="text/javascript">
    
                $(function ()
                  {
                
                $.ajax({
                    url: 'functions.php',
                  
                    type:'POST',
                    success:function(data){
                        var result = $.parseJSON(data);
                        $.each(result, function(key, value){
                        $.each(value, function(k, v){
                        var type = value['type']
                        if(type == "assistent"){
                            if(k === "fornavn"){
                                $("#aktivebrukere >tbody:last").append(
                                    $('<tr>').append(
                                        $('<td>').append(v)
                                        .append(
                                            $('</td>').append(
                                                    $('</tr>')
                                            )
                                        )
                                    )
                                );
                        }
                        if(k === "etternavn"){
                            $("#aktivebrukere >tbody >tr:last").append(

                                $('<td>').append(v)
                                .append(
                                    $('</td>')
                                    )
                                );
                        }
                        if(k === "type"){
                            $("#aktivebrukere >tbody >tr:last").append(

                            

                                $('<td>').append('<a class="blue-text"><i class="fa fa-pencil"></i></a><a class="red-text"><i class="fa fa-arrow-down"></i></a><a class="black-text"><i class="fa fa-user-times"></i></a>')
                                .append(
                                    $('</td>')
                                    )
                                    
                                );
                        }    
                        }
                        if(type == "iassistent"){
                            if(k === "fornavn"){
                                $("#inaktivebrukere >tbody:last").append(
                                    $('<tr>').append(
                                        $('<td>').append(v)
                                        .append(
                                            $('</td>').append(
                                                    $('</tr>')
                                            )
                                        )
                                    )
                                );
                        }
                        if(k === "etternavn"){
                            $("#inaktivebrukere >tbody >tr:last").append(

                                $('<td>').append(v)
                                .append(
                                    $('</td>')
                                    )
                                );
                        }
                        if(k === "type"){
                            $("#inaktivebrukere >tbody >tr:last").append(

                            

                                $('<td>').append('<a class="blue-text"><i class="fa fa-pencil"></i></a><a class="green-text"><i class="fa fa-arrow-up"></i></a><a class="black-text"><i class="fa fa-user-times"></i></a>')
                                .append(
                                    $('</td>')
                                    )
                                    
                                );
                        }
                        }
                        if(type == "admin"){
                            if(k === "fornavn"){
                                $("#admin >tbody:last").append(
                                    $('<tr>').append(
                                        $('<td>').append(v)
                                        .append(
                                            $('</td>').append(
                                                    $('</tr>')
                                            )
                                        )
                                    )
                                );
                        }
                        if(k === "etternavn"){
                            $("#admin >tbody >tr:last").append(

                                $('<td>').append(v)
                                .append(
                                    $('</td>')
                                    )
                                );
                        }
                        if(k === "type"){
                            $("#admin >tbody >tr:last").append(

                            

                                $('<td>').append('<a class="blue-text"><i class="fa fa-pencil"></i></a><a class="black-text"><i class="fa fa-user-times"></i></a>')
                                .append(
                                    $('</td>')
                                    )
                                    
                                );
                        }    
                        }
                        if(type == "bruker"){
                            if(k === "fornavn"){
                                $("#bruker >tbody:last").append(
                                    $('<tr>').append(
                                        $('<td>').append(v)
                                        .append(
                                            $('</td>').append(
                                                    $('</tr>')
                                            )
                                        )
                                    )
                                );
                        }
                        if(k === "etternavn"){
                            $("#bruker >tbody >tr:last").append(

                                $('<td>').append(v)
                                .append(
                                    $('</td>')
                                    )
                                );
                        }
                        if(k === "type"){
                            $("#bruker >tbody >tr:last").append(

                            

                                $('<td>').append('<a class="blue-text"><i class="fa fa-pencil"></i></a><a class="black-text"><i class="fa fa-user-times"></i></a>')
                                .append(
                                    $('</td>')
                                    )
                                    
                                );
                        }
                        }
                            

                    });
                });
            }
                });
                });
           </script>


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
                    <div id="brukere" class="col-lg-6 col-sm-12 col-xs-12">
                       <div id="1"></div>
                        <h2>Aktive assistenter</h2>

                        <table id="aktivebrukere" class="table">
                            <thead>
                                <tr>
                                    <th>Fornavn</th>
                                    <th>Etternavn</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                             

                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                         
                       <h2>Inaktive assistenter</h2>

                        <table id="inaktivebrukere" class="table">
                            <thead>
                                <tr>
                                    <th>Fornavn</th>
                                    <th>Etternavn</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                

                            </tbody>
                        </table>
        
                    </div>
                </div>
                
                <hr class="extra-margins">

               
                
         
                
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                       <h2>Admin</h2>

                        <table id="admin" class="table">
                            <thead>
                                <tr>
                                    <th>Fornavn</th>
                                    <th>Etternavn</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                
                        
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                         <h2>Brukere</h2>

                        <table id="bruker" class="table">
                            <thead>
                                <tr>
                                    <th>Fornavn</th>
                                    <th>Etternavn</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                
                        
                            </tbody>
                        </table>
                    </div>

                </div>
                
            <div class="row">
                <div class="col-lg-2 col-sm-2 col-xs-2"><a  class="btn btn-primary" href="nybruker.php"><i class="fa fa-plus "></i></a>
                </div>
                <div class="col-lg-10 col-sm-10 col-xs-10"></div>
            </div>
                      
                    
                
                
            </div>
        </main>
        <!--/Main layout-->

        <!-- SCRIPTS -->

        

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