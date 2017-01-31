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
                    type:'POST',
                    url: 'api/visBrukere.php',
                    success:function(data){
                        var result = $.parseJSON(data);
                        $.each(result, function(key, value){
                        $.each(value, function(k, v){
                        var type = value['type'];
                        var personid = value['personid'];
                        if(type == "assistent"){
                            if(k === "fornavn"){
                                $("#assistentoversikt >tbody:last").append(
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
                            $("#assistentoversikt >tbody >tr:last").append(

                                $('<td>').append(v)
                                .append(
                                    $('</td>')
                                    )
                                );
                        }
                            if(k === "telefonnummer"){
                            $("#assistentoversikt >tbody >tr:last").append(

                                $('<td>').append(v)
                                .append(
                                    $('</td>')
                                    )
                                );
                        }
                            if(k === "epostadresse"){
                            $("#assistentoversikt >tbody >tr:last").append(

                                $('<td>').append(v)
                                .append(
                                    $('</td>')
                                    )
                                );
                        }
                            if(k === "postnummer"){
                            $("#assistentoversikt >tbody >tr:last").append(

                                $('<td>').append(v)
                                .append(
                                    $('</td>')
                                    )
                                );
                        }
                            if(k === "poststed"){
                            $("#assistentoversikt >tbody >tr:last").append(

                                $('<td>').append(v)
                                .append(
                                    $('</td>')
                                    )
                                );
                        }
                            if(k === "adresse"){
                            $("#assistentoversikt >tbody >tr:last").append(

                                $('<td>').append(v)
                                .append(
                                    $('</td>')
                                    )
                                );
                        }
                        if(k === "type"){
                            $("#assistentoversikt >tbody >tr:last").append(

                            

                                $('<td>').append('<a href="endrebruker.php?id='+ personid +'" class="blue-text"><i class="fa fa-pencil"></i></a><a class="black-text delete" id="'+ personid +'"  data-toggle="modal" data-target="#myModal"><i class="fa fa-user-times"></i></a>')
                                                    .append(
                                    $('</td>')
                                    )
                                    
                                );
                            $('.delete').on('click', function() {
                                deleteid = $(this).attr("id");
                        
            
                });
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
                    <div id="brukere" class="col-lg-12 col-sm-12 col-xs-12">
                      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Slett bruker</h4>
                              </div>
                              <div class="modal-body">
                                Er du sikker på at du vil slette?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Nei</button>
                                <button type="button" id="slett" class="btn btn-primary">Ja</button>
                              </div>
                            </div>
                          </div>
                        </div>
                       <div id="1"></div>
                        <h2>Assistentoversikt</h2>

                        <table id="assistentoversikt" class="table">
                            <thead>
                                <tr>
                                    <th>Fornavn</th>
                                    <th>Etternavn</th>
                                    <th>Tlf</th>
                                    <th>E-postadresse</th>
                                    <th>Postnummer</th>
                                    <th>Poststed</th>
                                    <th>Adresse</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                             

                            </tbody>
                        </table>
                    </div>
                    
                        </table>
                    

                </div>
                
            
                    
                
                
            </div>
        </main>
        <!--/Main layout-->

        <!-- SCRIPTS -->

        <script>

            
                              
            $("#slett").on("click", function() {
            
                var id = deleteid;
                var dataString = 'id='+ id;
                
            $.ajax({
                    type: 'POST',
                    url: 'api/slettBruker.php',
                    data: dataString,
                    success: function() {
                       
                        location.reload();
                        
                    },
                    error: function(){
                        
                    }
                });
            
                });
        
        
        </script>

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