<?php
session_start();
require ('connection/dbconnector.php');
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

        <header>
            <div class="container">
                <div class="titel">
                    <h1>FIFA Dev Edition</h1>
                    <p>Speelschema</p>
                </div>
            </div>
            
        </header>

        <div class="page1">
            <div class="container">
                <nav>
                    <a href="home.php">Home</a>
                    <a href="results.php">Resultaten</a>
                    <a href="opstelling.php">Opstelling</a>
                    <a href="speelschema.php">Speelschema</a>
                    <a href="poulestands.php">Poule Standen</a>
                </nav>
            </div>
        </div>

        <div class="schema">
            <h1>Voetbal Game</h1>
<main id="tournament">
    <form action="apps/teamviewer.php" method="post">
<?php
$type =  $_SESSION['admin'];
if($type == '1'){
?>
        <ul class="round round-1">
            <select class="game game-top" name="team_1">
                <option value="selected">Choose one</option>
                <?php
                include_once ('apps/Teamviewers.php');
                foreach($team as $name) { ?>
                    <option value="<?= $name['id'] ?>"><?= $name['name'] ?></option>
                    <?php
                } ?>
            </select>

            <li class="game game-spacer">&nbsp;</li>
            <select class="game game-bottom" name="team_2">
                <option value="">Choose one<?php
                    foreach($team as $name) { ?>
                <option value="<?= $name['id'] ?>"><?= $name['name'] ?></option>
                <?php
                } ?>
                </option>
            </select>

            <li class="spacer">&nbsp;</li>

            <select class="game game-top winner" name="team_3" id="">
                <option value="">Choose one<?php
                    foreach($team as $name) { ?>
                <option value="<?= $name['id'] ?>"><?= $name['name'] ?></option>
                <?php
                } ?>
                </option>
            </select>
            <li class="game game-spacer">&nbsp;</li>

            <select class="game game-bottom" name="team_4" id="">
                <option value="">Choose one<?php
                    foreach($team as $name) { ?>
                <option value="<?= $name['id'] ?>"><?= $name['name'] ?></option>
                <?php
                } ?>
                </option>
            </select>

            <li class="spacer">&nbsp;</li>

            <select class="game game-top" name="team_5" id="">
                <option value="">Choose one<?php
                    foreach($team as $name) { ?>
                <option value="<?= $name['id'] ?>"><?= $name['name'] ?></option>
                <?php
                } ?>
                </option>
            </select>
            <li class="game game-spacer">&nbsp;</li>

            <select class="game game-bottom winner" name="team_6" id="">
                <option value="">Choose one<?php
                    foreach($team as $name) { ?>
                <option value="<?= $name['id'] ?>"><?= $name['name'] ?></option>
                <?php
                } ?>
                </option>
            </select>

            <li class="spacer">&nbsp;</li>

            <select class="game game-top winner" name="team_7" id="">
                <option value="">Choose one<?php
                    foreach($team as $name) { ?>
                <option value="<?= $name['id'] ?>"><?= $name['name'] ?></option>
                <?php
                } ?>
                </option>
            </select>
            <li class="game game-spacer">&nbsp;</li>

            <select class="game game-bottom " name="team_8" id="">
                <option value="">Choose one<?php
                    foreach($team as $name) { ?>
                <option value="<?= $name['id'] ?>"><?= $name['name'] ?></option>
                <?php
                } ?>
                </option>
            </select>

            <li class="spacer">&nbsp;</li>

            <input type="submit">

    </form>

    </ul>
    <ul class="round round-2">

        <li class="spacer">&nbsp;</li>

        <li class="game game-top winner"><span></span></li>
        <li class="game game-spacer">&nbsp;</li>
        <li class="game game-bottom "><span></span></li>

        <li class="spacer">&nbsp;</li>

        <li class="spacer">&nbsp;</li>

        <li class="game game-top winner"><span></span></li>
        <li class="game game-spacer">&nbsp;</li>
        <li class="game game-bottom "><span></span></li>

        <li class="spacer">&nbsp;</li>

    </ul>
    <ul class="round round-3">
        <li class="spacer">&nbsp;</li>

        <li class="game game-top winner"><span></span></li>
        <li class="game game-spacer">&nbsp;</li>
        <li class="game game-bottom winner"><span></span></li>

        <li class="spacer">&nbsp;</li>
    </ul>


</main>
        </div>
<?php
        }
?>






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
