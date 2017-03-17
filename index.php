<?php
    session_start();
    require_once 'db.php';
    require_once 'user/init.php';
    include_once 'user/user_class.php';
    $user = new USER($DB_con);

    // if($user->is_loggedin()):
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
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">
        
        <!-- MDL -->
        <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-red.min.css">
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">



        
        
        <link rel="manifest" href="manifest.json">
        
        <!-- JQuery -->
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    </head>

    <body>
            
        <header>


        </header>
        <!--/Navigation-->

        <!--Main layout-->
        <main class="p-t-6">
            <div class="container-fluid">   
                <div class="row">
                
<!--Form with header-->
<div class="card">
    <div class="card-block">
        <form name="input" action="api/login.php" method="POST" id="loginForm">
        <!--Header-->
        <div class="text-xs-center">
            <h3><i class="fa fa-lock"></i> Innlogging @Work:</h3>
            <hr class="mt-2 mb-2">
        </div>

        <!--Body-->
        <div class="md-form">
            <i class="fa fa-envelope prefix"></i>
            <input type="text" id="username" name="txt_username" class="form-control username" placeholder="username">
            <label for="username"></label>
        </div>

        <div class="md-form">
            <i class="fa fa-lock prefix"></i>
            <input type="password" id="password" name="txt_password" class="form-control password" placeholder="password">
            <label for="password"></label>
        </div>

        <div class="text-center">
            <button class="btn btn-primary">Logg inn</button>
        </div>
        </form>
    </div>

    <!--Footer-->
    

</div>
<!--/Form with header-->

                     
                </div>
                      
                    
                
                
            </div>
        </main>            

        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/tether.min.js"></script>

        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

        
        
        <!-- MDL -->
        <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>



    </body>

</html>