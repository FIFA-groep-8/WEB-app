<?php
require ('connection/dbconnector.php');
error_reporting(E_ERROR|E_PARSE);

?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        
        
        <div class="top"> 
            <header>
                <h1>FIFA Dev Edition</h1>
              
        
                        <?php
                        $logged_in = $_SESSION['logged_in'];
                        if ($logged_in === '0'){ ?>
                         <button id="myBtn" value="Login" class="login">Login</button>
                        <?php } else{?>
                            <form action="apps/register.php" method="post">
                                <button name="logout" id="logout" value="Logout" class="logout">Logout</button>
                            </form>
                        <?php }?>

        </header> 

                <div class="container">
                    <nav>

                    
                        <a href="index.php">Home</a>
                        <?php
                        $admin = $_SESSION['admin'];
                        if ($admin == '1'){?>
                            <a href="results.php">Resultaten</a>
                            <a href="opstelling.php"><span>Opstelling</span></a>
                        <?php } ?>
                        <a href="speelschema.php">Speelschema</a>
                        <a href="poulestands.php">Poule Standen</a>

                        
                    </nav>
                </div>
                
        </div>

        <div class="page1">
            <div class="container">
                <form action="apps/teams.php" method="post">
                <div class="input_players">
                    <div class="input_1">

                        <h2>1</h2>


                            <p>Naam team</p>
                            <input type="text" name="name_team" placeholder="naam team">
                            <h3>Poule</h3>
                            <select name="poule">
                                <option value="1">Poule 1</option>
                                <option value="2">Poule 2</option>
                            </select>


                        <h3>Teams bekijken</h3>
                        <p>player1</p>
                        <p>Player2</p>

                    </div>

                    <div class="input_2">
                        <h2>2</h2>
                        <p>Selecteer spelers</p>

                            <?php
                            for ($i = 1;$i < 9; $i++){
                            ?>
                                <p>Selecteer speler <?= $i ?></p>
                                <input type="text" name="first_name<?= $i?>" placeholder="First name">
                                <input type="text" name="last_name<?= $i?>" placeholder="Last name">
                                <input type="text" name="student_numb<?= $i?>" placeholder="Student nummer">
                            <?php
                            }
                            ?>
                    </div>

                    <div class="input_3">

                        <h2>3</h2>
                        
                        <input type="submit" name="submit">


                    </div>
                </form>
                </div>
            </div>
        </div>




        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>
