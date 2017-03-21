<?php
    session_start();
    require_once '../user/init.php';
    include_once '../user/user_class.php';
    $user = new USER($DB_con);

    if($user->is_loggedin()):
if($user->is_admin()):
?>
<!DOCTYPE html>
<html lang="en">

    <head>
    <?php

        
        
 	require_once '../db.php';
	

 	?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>@Work</title>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

        <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- Material Design Bootstrap -->
        <link href="../css/mdb.min.css" rel="stylesheet">

        <!-- MDL -->
        <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-red.min.css">
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
       
        <!-- Your custom styles (optional) -->
        <link href="../css/style.css" rel="stylesheet">
                <!-- JQuery -->
        <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
        
        


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
                        <a class="navbar-brand" href="brukere.php">@Work - Admin</a>
                        <!--Links-->
                        <ul class="nav navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="brukere.php">Assistenter <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="vakter.php">Vakter</a>
                            </li>


                        </ul>

                        <!--Navbar icons-->
                        <ul class="nav navbar-nav nav-flex-icons">
                            <li class="nav-item">
                                <a class="nav-link" href="profil.php"><i class="fa fa-user fa-2x"></i></a>
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
                     
                       <h4>Endre bruker</h4>
                      
                        <form class="form" id="edituser" action="" method="get">

                            
                            <div class="md-form form-group">
                               
                                <input type="text" id="fn" name="fn" class="form-control validate">
                                <label for="fn" class="active">Fornavn</label>
                                
                            </div>
                            <div class="md-form form-group">
                               
                                <input type="text" id="ln" name="ln" class="form-control validate">
                                <label for="ln" class="active">Etternavn</label>
                                
                            </div>
                            <div class="md-form form-group">
                               
                                <input type="number" id="tlf" name="tlf" class="form-control validate">
                                <label for="tlf" class="active">Tlf</label>
                                
                            </div>
                            <div class="md-form form-group">
                               
                                <input type="email" id="epost" name="epost" class="form-control validate">
                                <label for="epost" class="active">E-postadresse</label>
                                
                            </div>
                            <div class="md-form form-group">
                               
                                <input type="number" id="postnummer" name="postnummer" min="0000" max="9999" class="form-control validate">
                                <label for="postnummer" class="active">Postnummer</label>
                                
                            </div>
                            <div class="md-form form-group">
                               
                                <input type="text" id="poststed" name="poststed" class="form-control validate">
                                <label for="poststed" class="active">Poststed</label>
                                
                            </div>
                            <div class="md-form form-group">
                               
                                <input type="text" id="adresse" name="adresse" class="form-control validate">
                                <label for="adresse" class="active">Adresse</label>
                                
                            </div>
                            <div class="form-group">
                               
                               Type
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1" id="opt1">
                                <input type="radio" id="option-1" class="mdl-radio__button" id="type" name="type" value="admin">
                                <span class="mdl-radio__label">Admin</span>
                            </label>
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2" id="opt2">
                                <input type="radio" id="option-2" class="mdl-radio__button" id="type" name="type" value="assistent">
                                <span class="mdl-radio__label">Assistent</span>
                            </label>
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3" id="opt3">
                                <input type="radio" id="option-3" class="mdl-radio__button" id="type" name="type" value="iassistent" >
                                <span class="mdl-radio__label">Inaktiv Assistent</span>
                            </label>
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-4" id="opt4">
                                <input type="radio" id="option-4" class="mdl-radio__button" id="type" name="type" value="bruker" >
                                <span class="mdl-radio__label">Bruker</span>
                            </label>

                                
                            </div>
                            <div class="md-form form-group">
                               
                                <input type="text" id="brukernavn" name="brukernavn" class="form-control validate">
                                <label for="brukernavn" class="active">Brukernavn</label>
                                
                            </div>
                            
                            <div class="md-form form-group">
                               
                                <input type="password" id="passord" name="passord" class="form-control validate">
                                <label for="passord" class="active">Passord</label>
                                <h1 class="1"></h1>

                            </div>
                            <button class="btn btn-primary">Lagre</button>
                            
                            </form>
                    </div>
                    
                    
                </div>
            </div>
        </main>
        <!--/Main layout-->

        <!-- SCRIPTS -->
        

        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="../js/tether.min.js"></script>

        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>

        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="../js/mdb.min.js"></script>
        
        <!-- MDL -->
        <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
        
        <script>
    
                $(function ()
                  {
                var id ="<?php echo $_GET['id']; ?>";
                
                $.ajax({
                    type:'GET',
                    url: '../api/hentBruker.php?id='+ id,
                    
                    
                    success:function(data){
                        var result = $.parseJSON(data);
                        $.each(result, function(key, value){
                        $.each(value, function(k, v){
                        var type = value['type'];
                        var personid = value['personid'];
                        var fornavn = value['fornavn'];
                        var etternavn = value['etternavn'];
                        var telefonnummer = value['telefonnummer'];
                        var epostadresse = value['epostadresse'];
                        var postnummer = value['postnummer'];
                        var poststed = value['poststed'];
                        var adresse = value['adresse'];
                        var brukernavn = value['brukernavn'];
                        var passord = value['passord'];
                        
                            if(k === "fornavn"){
                                $("#edituser").find('[name="fn"]').val(fornavn).change();
                            }
                            if(k === "etternavn"){
                                $("#edituser").find('[name="ln"]').val(etternavn).change();       
                            }
                            if(k === "telefonnummer"){
                                $("#edituser").find('[name="tlf"]').val(telefonnummer).change();       
                            }
                            if(k === "epostadresse"){
                                $("#edituser").find('[name="epost"]').val(epostadresse).change();       
                            }
                            if(k === "postnummer"){
                                $("#edituser").find('[name="postnummer"]').val(postnummer).change();       
                            }
                            if(k === "poststed"){
                                $("#edituser").find('[name="poststed"]').val(poststed).change();       
                            }
                            if(k === "adresse"){
                                $("#edituser").find('[name="adresse"]').val(adresse).change();       
                            }
                            if(type == "admin"){
                                $("#opt1").addClass("is-checked").prop("checked", true);
                                $("#option-1").prop("checked", true);
                            }
                            if(type == "assistent"){
                                $("#opt2").addClass("is-checked");
                                $("#option-2").prop("checked", true);
                            }
                            if(type == "iassistent"){
                                $("#opt3").addClass("is-checked");
                                $("#option-3").prop("checked", true);
                            }
                            if(type == "bruker"){
                                $("#opt4").addClass("is-checked");
                                $("#option-4").prop("checked", true);
                            }
                            if(k === "brukernavn"){
                                $("#edituser").find('[name="brukernavn"]').val(brukernavn).change();       
                            }
                            if(k === "passord"){
                                $("#edituser").find('[name="passord"]').val(passord).change();       
                            }
                        
                        });
                            

                    });
                
    
                     
                
            },
                    error: function(){
                        
                    }
                });
                });
           </script>


        <script>
            $('#edituser button').on("click", function() {
            
            var id ="<?php echo $_GET['id']; ?>"; 
                
            var fn = $("#fn").val();
            
            var ln = $("#ln").val();
            var tlf = $("#tlf").val();
            var epost = $("#epost").val();
            var postnummer = $("#postnummer").val();
            var poststed = $("#poststed").val();
            var adresse = $("#adresse").val();
            var type = $("input[name=type]:checked").val();
            
            var brukernavn = $("#brukernavn").val();
            var passord = $("#passord").val();
                

            // Returns successful data submission message when the entered information is stored in database.
            var dataString = 'id='+ id + '&fn='+ fn + '&ln='+ ln + '&tlf='+ tlf + '&epost='+ epost + '&postnummer='+ postnummer + '&poststed='+ poststed + '&adresse='+ adresse + '&type='+ type + '&brukernavn='+ brukernavn + '&passord='+ passord;            if(fn==''||ln==''||tlf==''||epost==''||postnummer==''||poststed==''||adresse==''||type==''||brukernavn==''||passord=='')
            {
                alert("Please Fill All Fields");
            }
            else
            { 
                $.ajax({
                    type: 'GET',
                    url: '../api/endreBruker.php',
                    data: dataString,
                    cache: false,
                    success: function() {
                        $( '.1' ).append( '<div class="alert alert-success" role="alert">Bruker endret</div>').fadeOut( 3000 );
                        window.location = "brukere.php";
                        
                    },
                    error: function(){
                        alert('failure');
                    }
                });
            }
                return false;
            });
           </script>

    </body>

</html>
<?php
    else:
        echo 'Du er ikke logget inn';
        exit;
    endif;
    else:
        echo 'Du har ikke tilgang her';
        exit;
    endif;
?>