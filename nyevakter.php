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
        
        <!-- JQuery -->
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

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
                        <a class="navbar-brand" href="index.php">@Work - Admin</a>
                        <!--Links-->
                        <ul class="nav navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Assistenter <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="vakter.php">Vakter</a>
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
                    <div class="col-lg-12 col-sm-12">
                       <h2>Legg til vakter</h2>
                       
                       
                       
                        <form  class="form-inline" id="nyvakt" action="" method="post">

                            <div class="md-form form-group">Dato
                                <input type="date" id="dato" class="form-control validate">
                                <label for="dato"></label>
                            </div>
                            <div class="md-form form-group">Fra
                                <input type="time" id="fra" class="form-control validate">
                                <label for="fra"></label>
                            </div>
                            <div class="md-form form-group">Til
                               
                                <input type="time" id="til" class="form-control validate">
                                <label for="til"></label>
                            </div>
                            <div class="md-form form-group">Assistent
                               
                                <select id="assistent" class="form-control validate">
                                </select>
                                
                            </div>
                            
                            <button class="btn btn-primary">Lagre</button>
                            
                        </form>
                          <div class="1"></div>
                           
                     
                    </div>
                
                
            
            </div>
        </main>
        <!--/Main layout-->

        <!-- SCRIPTS -->
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
                        var fornavn = value['fornavn'];
                        var etternavn = value['etternavn'];
                        var type = value['type'];
                        var personid = value['personid'];
                        if(type == "assistent"){
                            if(k === "fornavn"){
                            $('#assistent:last').append('<option value="'+ personid +'">'+ fornavn +' ' + etternavn +'</option>');
                            }
                        }
                            

                    });
                });
            }
                });
                });
           </script>
           
        <script>
            
            $('#nyvakt button').on("click", function() {
                   
            var dato = $("#dato").val();
            var fra = $("#fra").val();
            var til = $("#til").val();
            var assistent = $("#assistent").val();
                
            

            // Returns successful data submission message when the entered information is stored in database.
            var dataString = 'dato='+ dato + '&fra='+ fra + '&til='+ til + '&assistent='+ assistent;            
            if(dato==''||fra==''||til==''||assistent=='')
            {
                alert("Please Fill All Fields");
            }
            else
            { 
                $.ajax({
                    type: 'POST',
                    url: 'api/leggTilNyVakt.php',
                    data: dataString,
                    cache: false,
                    success: function() {
                        $( '.1' ).append( '<div class="alert alert-success" role="alert">Vakt lagt inn i databasen</div>').fadeOut( 3000 );
                        
                    },
                    error: function(){
                        alert('failure');
                    }
                });
            }
                return false;
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