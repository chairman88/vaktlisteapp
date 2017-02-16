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
                        <a class="navbar-brand" href="index.html">@Work - Admin</a>
                        <!--Links-->
                        <ul class="nav navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Assistenter </a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="vakter.html">Vakter<span class="sr-only">(current)</span></a>
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
                   <div class="col-lg-12">
                    <h2>Vakter</h2>
                       <a href="nyevakter.php"><i class="fa fa-calendar-plus-o fa-4x"></i> </a>

                     <div class="table-responsive" id="pc">
                      <table class="table table-bordered">
                          <thead class="thead-inverse">
                                <?php
                                // Hentet fra http://stackoverflow.com/questions/4439722/finding-first-day-of-week-via-php
                                function week_start_date($wk_num, $yr, $addDays)
                                {
                                  $wk_ts  = strtotime('+' . $wk_num . ' weeks', strtotime($yr . '0101'));
                                  $mon_ts = strtotime('-' . date('w', $wk_ts) + $addDays + 1 . ' days', $wk_ts);
                                  return $mon_ts;
                                } // Hentet fra http://stackoverflow.com/questions/4439722/finding-first-day-of-week-via-php
                                ?>

                               <tr>
                                   <th>Assistent</th>
                                   <?php
                                   // Skriv ut heading
                                   $weekdays = ['Søn','Man','Tir','Ons','Tor','Fre','Lør'];

                                   for ($i=0; $i<7; $i++) {
                                       echo "<th>";
                                       echo $weekdays[date('w', week_start_date(5, 2017, $i))].' '.date('j.n.Y', week_start_date(5, 2017, $i));
                                       echo "</th>";
                                   }



                                   ?>

                               </tr>
                           </thead>
                           <tbody>
                            <?php

                            include 'api/visVaktertab.php';

                               ?>
                           </tbody>
                        </table>
                        </div>
                    </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">

                    <div class="table-responsive" id="mobile">
                      <table class="table table-bordered">
                         <tbody>
                           <thead class="thead-inverse">

                          </thead>

                        <thead class="thead-inverse">

                        </thead>

                        <thead class="thead-inverse">

                          </thead>

                        <thead class="thead-inverse">

                          </thead>

                        <thead class="thead-inverse">

                          </thead>

                        <thead class="thead-inverse">

                          </thead>

                        <thead class="thead-inverse">

                          </thead>

                           </tbody>
                        </table>
                    </div>
                  </div>
               </div>


               </div>

        </main>
        <!--/Main layout-->

        <!-- SCRIPTS -->
        <script id="source">

                $(function ()
                  {

                $.ajax({
                    type:'POST',
                    url: 'api/visVakter.php',
                    success:function(data){
                        //var result = $.parseJSON(data);
                        $.each (data, function (key, value) {
                          $('#assistent_'+value['personid']+
                            ' td[data-day-of-week="'+value['dag']+'"]').html(
                                                value['fra']+"-"+value['til']);
                        });
                        /*
                        $.each(result, function(key, value){
                        $.each(value, function(k, v){
                        var dato = value['dato'];
                        var pid = value['pid'];
                        var vaktlisteid = value['vaktlisteid'];
                        var fra = value['fra'];
                        var til = value['til'];
                        var fornavn = value['fornavn'];
                        var etternavn = value['etternavn'];
                            $(fornavn + etternavn).appendTo("#assistent");
                        */


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
