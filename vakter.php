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

    </head>

    <body>

    <script id="source" language="javascript" type="text/javascript">
    
                $(function ()
                  {
                
                $.ajax({
                    type:'POST',
                    url: 'api/visVakter.php',
                    success:function(data){
                        var result = $.parseJSON(data);
                        $.each(result, function(key, value){
                        $.each(value, function(k, v){
                        
                        
                            

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
                    <h3>Uke 49</h3>
                     <div class="table-responsive" id="pc">
                      <table class="table table-bordered">
                          <thead class="thead-inverse">
                               <tr>
                                   <th>Assistent</th>
                                   <th>Man 05.12.16 <a class="white-text" href="endrevakt.html"><i class="fa fa-pencil"></i></a></th>
                                   <th>Tir 06.12.16 </th>
                                   <th>Ons 07.12.16 </th>
                                   <th>Tor 08.12.16 </th>
                                   <th>Fre 09.12.16 </th>
                                   <th>Lør 10.12.16 </th>
                                   <th>Søn 11.12.16 </th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <th scope="row">Tom Anders Bakken</th>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                   <td>17.00 - 23.00</td>
                                   <td>17.00 - 24.00</td>
                                   <td>09.00 - 16.00</td>
                               </tr>
                               <tr>
                                   <th scope="row">Øyvind Bjerke</th>
                                   <td></td>
                                   <td>17.00 - 23.00</td>
                                   <td></td>
                                   <td>17.00 - 23.00</td>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                               </tr>
                               <tr>
                                   <th scope="row">Inger Marie Gjøby</th>
                                   <td>04.00 - 10.00</td>
                                   <td>04.00 - 10.00</td>
                                   <td>04.00 - 10.00</td>
                                   <td>04.00 - 10.00</td>
                                   <td>04.00 - 10.00</td>
                                   <td>04.00 - 10.00</td>
                                   <td></td>
                               </tr>
                               <tr>
                                   <th scope="row">Kay-Kjetil Pedersen</th>
                                   <td>17.00 - 23.00</td>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                               </tr>
                               <tr>
                                   <th scope="row">Sindre Løvdahl Tafjord</th>
                                   <td></td>
                                   <td></td>
                                   <td>17.00 - 23.00</td>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                               </tr>
                               <tr>
                                   <th scope="row">Eirik Bekkemellem</th>
                                   <td>09.00 - 16.00</td>
                                   <td>09.00 - 16.00</td>
                                   <td>09.00 - 16.00</td>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                               </tr>
                               <tr>
                                   <th scope="row">Eve Julie Gulliksen</th>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                   <td>09.00 - 16.00</td>
                                   <td>09.00 - 16.00</td>
                                   <td></td>
                                   <td></td>
                               </tr>
                               <tr>
                                   <th scope="row">Ole Andre Slettum</th>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                   <td>09.00 - 16.00</td>
                                   <td>17.00 - 23.00</td>
                               </tr>
                           </tbody>
                        </table>
                        </div>
                    </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">

                    <div class="table-responsive" id="mobile">
                      <table class="table table-bordered">
                          <thead class="thead-inverse">
                               <tr>
                                   <th>Assistent</th>
                                   <th>Man 05.12.16 <a class="white-text" href="endrevakt.html"><i class="fa fa-pencil"></i></a></th>
                                </tr>
                          </thead>
                               <tr>
                                   <th scope="row">Inger Marie Gjøby</th>
                                   <td>04.00 - 10.00</td>
                               </tr>
                               <tr>
                                   <th scope="row">Eirik Bekkemellem</th>
                                   <td>09.00 - 16.00</td>
                               </tr>
                               <tr>
                                   <th scope="row">Kay-Kjetil Pedersen</th>
                                   <td>17.00 - 23.00</td>
                               </tr>
                        <thead class="thead-inverse">
                               <tr>
                                   <th>Assistent</th>
                                   <th>Tir 06.12.16 <a class="white-text"><i class="fa fa-pencil"></i></a></th>
                                </tr>
                        </thead>
                               <tr>
                                   <th scope="row">Inger Marie Gjøby</th>
                                   <td>04.00 - 10.00</td>
                               </tr>
                               <tr>
                                   <th scope="row">Eirik Bekkemellem</th>
                                   <td>09.00 - 16.00</td>
                               </tr>
                               <tr>
                                   <th scope="row">Øyvind Bjerke</th>
                                   <td>17.00 - 23.00</td>
                               </tr>
                        <thead class="thead-inverse">
                               <tr>
                                   <th>Assistent</th>
                                   <th>Ons 07.12.16 <a class="white-text"><i class="fa fa-pencil"></i></a></th>
                                </tr>
                          </thead>
                               <tr>
                                   <th scope="row">Inger Marie Gjøby</th>
                                   <td>04.00 - 10.00</td>
                               </tr>
                               <tr>
                                   <th scope="row">Eirik Bekkemellem</th>
                                   <td>09.00 - 16.00</td>
                               </tr>
                               <tr>
                                   <th scope="row">Sindre Løvdahl Tafjord</th>
                                   <td>17.00 - 23.00</td>
                               </tr>
                        <thead class="thead-inverse">
                               <tr>
                                   <th>Assistent</th>
                                   <th>Tor 08.12.16 <a class="white-text"><i class="fa fa-pencil"></i></a></th>
                                </tr>
                          </thead>
                               <tr>
                                   <th scope="row">Inger Marie Gjøby</th>
                                   <td>04.00 - 10.00</td>
                               </tr>
                               <tr>
                                   <th scope="row">Julie Gulliksen</th>
                                   <td>09.00 - 16.00</td>
                               </tr>
                               <tr>
                                   <th scope="row">Sindre Løvdahl Tafjord</th>
                                   <td>17.00 - 23.00</td>
                               </tr>
                        <thead class="thead-inverse">
                               <tr>
                                   <th>Assistent</th>
                                   <th>Fre 09.12.16 <a class="white-text"><i class="fa fa-pencil"></i></a></th>
                                </tr>
                          </thead>
                               <tr>
                                   <th scope="row">Inger Marie Gjøby</th>
                                   <td>04.00 - 10.00</td>
                               </tr>
                               <tr>
                                   <th scope="row">Julie Gulliksen</th>
                                   <td>09.00 - 16.00</td>
                               </tr>
                               <tr>
                                   <th scope="row">Tom Anders Bakken</th>
                                   <td>17.00 - 23.00</td>
                               </tr>
                        <thead class="thead-inverse">
                               <tr>
                                   <th>Assistent</th>
                                   <th>Lør 10.12.16 <a class="white-text"><i class="fa fa-pencil"></i></a></th>
                                </tr>
                          </thead>
                               <tr>
                                   <th scope="row">Inger Marie Gjøby</th>
                                   <td>04.00 - 10.00</td>
                               </tr>
                               <tr>
                                   <th scope="row">Ole Andre Slettum</th>
                                   <td>09.00 - 16.00</td>
                               </tr>
                               <tr>
                                   <th scope="row">Tom Anders Bakken</th>
                                   <td>17.00 - 24.00</td>
                               </tr>
                        <thead class="thead-inverse">
                               <tr>
                                   <th>Assistent</th>
                                   <th>Søn 11.12.16 <a class="white-text"><i class="fa fa-pencil"></i></a></th>
                                </tr>
                          </thead>
                               <tr>
                                   <th scope="row">Tom Anders Bakken</th>
                                   <td>09.00 - 16.00</td>
                               </tr>
                               <tr>
                                   <th scope="row">Ole Andre Slettum</th>
                                   <td>17.00 - 23.00</td>
                               </tr>
                           </tbody>
                        </table>
                    </div>
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