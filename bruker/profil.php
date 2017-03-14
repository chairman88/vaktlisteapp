<?php
    session_start();
    require_once '../user/init.php';
    include_once '../user/user_class.php';
    $user = new USER($DB_con);

    if($user->is_loggedin()):
if($user->is_bruker()):
?>
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
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- Material Design Bootstrap -->
        <link href="../css/mdb.min.css" rel="stylesheet">

        <!-- MDL -->
        <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-red.min.css">
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
       
        <!-- Your custom styles (optional) -->
        <link href="../css/style.css" rel="stylesheet">

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
                                <a class="nav-link" href="brukere.php">Assistenter </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="vakter.php">Vakter</a>
                            </li>


                        </ul>

                        <!--Navbar icons-->
                        <ul class="nav navbar-nav nav-flex-icons">
                            <li class="nav-item active">
                                <a class="nav-link" href="profil.php"><i class="fa fa-user fa-2x"></i><span class="sr-only">(current)</span></a>
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
                   <div class="col-lg-12">
                      
                      
                       

                        <h3>Profil</h3>

                   </div>
                   
               </div>
                      
                    <div class="row">
                        
                        <?php
                            if($user->is_loggedin()) {
                                echo '<div class="col-lg-4 col-xs-4"><a class="btn btn-primary" href="../api/logout.php">Logg ut</a></div>';
                            } else {
                                
                            }
                        ?>
                        
                        <div class="col-lg-8 col-xs-8">
                </div>
                
                
            </div>
        </main>
        <!--/Main layout-->

        <!-- SCRIPTS -->

        <!-- JQuery -->
        <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>

        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="../js/tether.min.js"></script>

        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>

        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="../js/mdb.min.js"></script>
        
        <!-- MDL -->
        <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>



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