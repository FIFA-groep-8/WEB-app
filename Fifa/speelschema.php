<?php

session_start();
error_reporting(E_ERROR|E_PARSE);

require ('connection/dbconnector.php');
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Speelschema</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

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
                            <a href="opstelling.php">Opstelling</a>
                        <?php } ?>
                        <a href="speelschema.php"><span>Speelschema</span></a>
                        <a href="poulestands.php">Poule Standen</a>

                        
                    </nav>
                </div>
                
        </div>

<div class="page1">
    <div class="container">
        <div class="schema">
    <h1>Voetbal Game</h1>
    <main id="tournament">
        <form action="teamviewer.php" method="post">
            <?php
            include_once 'teamviewer.php';
            $admin =  $_SESSION["admin"];
            if($admin == '1'){
            ?>
            <ul class="round round-1">
                <select class="game game-top" name="team_name_1">
                    <option value="selected">Choose one</option>
                    <?php
                    include_once ('teamviewer.php');
                    foreach($team as $name) { ?>
                        <option value="<?= $name['id'] ?>"><?= $name['name'] ?></option>
                        <?php
                    } ?>
                </select>

                <li class="game game-spacer">&nbsp;</li>
                <select class="game game-bottom" name="team_name_2">
                    <option value="">Choose one<?php
                        foreach($team as $name) { ?>
                    <option value="<?= $name['id'] ?>"><?= $name['name'] ?></option>
                    <?php
                    } ?>
                    </option>
                </select>

                <li class="spacer">&nbsp;</li>

                <select class="game game-top winner" name="team_name_3" id="">
                    <option value="">Choose one<?php
                        foreach($team as $name) { ?>
                    <option value="<?= $name['id'] ?>"><?= $name['name'] ?></option>
                    <?php
                    } ?>
                    </option>
                </select>
                <li class="game game-spacer">&nbsp;</li>

                <select class="game game-bottom" name="team_name_4" id="">
                    <option value="">Choose one<?php
                        foreach($team as $name) { ?>
                    <option value="<?= $name['id'] ?>"><?= $name['name'] ?></option>
                    <?php
                    } ?>
                    </option>
                </select>

                <li class="spacer">&nbsp;</li>

                <select class="game game-top" name="team_name_5" id="">
                    <option value="">Choose one<?php
                        foreach($team as $name) { ?>
                    <option value="<?= $name['id'] ?>"><?= $name['name'] ?></option>
                    <?php
                    } ?>
                    </option>
                </select>
                <li class="game game-spacer">&nbsp;</li>

                <select class="game game-bottom winner" name="team_name_6" id="">
                    <option value="">Choose one<?php
                        foreach($team as $name) { ?>
                    <option value="<?= $name['id'] ?>"><?= $name['name'] ?></option>
                    <?php
                    } ?>
                    </option>
                </select>

                <li class="spacer">&nbsp;</li>

                <select class="game game-top winner" name="team_name_7" id="">
                    <option value="">Choose one<?php
                        foreach($team as $name) { ?>
                    <option value="<?= $name['id'] ?>"><?= $name['name'] ?></option>
                    <?php
                    } ?>
                    </option>
                </select>
                <li class="game game-spacer">&nbsp;</li>

                <select class="game game-bottom " name="team_name_8" id="">
                    <option value="">Choose one<?php
                        foreach($team as $name) { ?>
                    <option value="<?= $name['id'] ?>"><?= $name['name'] ?></option>
                    <?php
                    } ?>
                    </option>
                </select>

                <li class="spacer">&nbsp;</li>

                <input type="submit" name="submit">

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
} else{
    session_start();
//    include_once ('teamviewer.php');
    ?>
    <ul class="round round-1">
            <li class="game game-top"><?= $team_name_a_match_1 . " - "  . $score_id_1_a ?></li>

            <li class="game game-spacer">&nbsp;</li>
            <li class="game game-bottom"><?= $team_name_b_match_1 . " - "  . $score_id_1_b?></li>


            <li class="spacer">&nbsp;</li>

            <li class="game game-top"><?= $team_name_a_match_2 . " - "  . $score_id_2_a?></li>

            <li class="game game-spacer"></li>

            <li class="game game-bottom"><?= $team_name_b_match_2 . " - "  . $score_id_2_b?></li>


            <li class="spacer">&nbsp;</li>

            <li class="game game-top"><?= $team_name_a_match_3 . " - "  . $score_id_3_a?></li>

            <li class="game game-spacer">&nbsp;</li>

            <li class="game game-bottom"><?= $team_name_b_match_3 . " - "  . $score_id_3_b?></li>

            <!--        <li class="spacer">&nbsp;</li>-->

            <li class="game game-top"><?= $team_name_a_match_4 . " - "  . $score_id_4_a?></li>

            <li class="game game-spacer">&nbsp;</li>

            <li class="game game-bottom"><?= $team_name_b_match_4 . " - "  . $score_id_4_b?></li>

            <li class="spacer">&nbsp;</li>

        </form>

    </ul>
    <ul class="round round-2">

        <li class="spacer">&nbsp;</li>

        <li class="game game-top winner"><?php echo $winner_match_1 . " - "  . $score_id_5_a?></li>
        <li class="game game-spacer">&nbsp;</li>
        <li class="game game-bottom "><?php echo $winner_match_2 . " - "  . $score_id_5_b?></li>

        <li class="spacer">&nbsp;</li>

        <li class="spacer">&nbsp;</li>

        <li class="game game-top winner"><?php echo $winner_match_3 . " - "  . $score_id_6_a?></li>
        <li class="game game-spacer">&nbsp;</li>
        <li class="game game-bottom "><?php echo $winner_match_4 . " - "  . $score_id_6_b?></li>

        <li class="spacer">&nbsp;</li>

    </ul>
    <ul class="round round-3">
        <li class="spacer">&nbsp;</li>

        <li class="game game-top winner"><?php echo $winner_match_5 . " - "  . $score_id_7_a?></li>
        <li class="game game-spacer">&nbsp;</li>
        <li class="game game-bottom winner"><?php echo $winner_match_6 . " - "  . $score_id_7_b?></li>

        <li class="spacer">&nbsp;</li>
    </ul>
    <ul class="round round-4">
        <li class="spacer">&nbsp;</li>

        <li><?php echo $champion ?></li>

        <li class="spacer">&nbsp;</li>
    </ul>


    </main>
    </div>
    <?php
}
?>
    </div>
</div>

<div class="container">
    <div id="myModal" class="modal">

        <div class="modal-content">

            <div class="login2">
                <form action="apps/register.php" method="POST">
                    <div>
                        <h2>Login</h2>
                        <p>Username</p><input type="text" name="username" id="username" required>
                        <p>Password</p><input type="password" name="password" id="password" min="7" required>
                        <?php
                        if ($_GET['message'] == "Enter"){
                            echo "Please enter your username or password";
                        }
                        ?>
                    </div>

                    <div>
                        <input type="submit" name="log_button" id="log_button">
                    </div>
                    <?php
                    if ($_GET['message'] == "Doesnt exists"){
                        echo "Username or password is incorrect";
                    }

                    if ($_GET['message'] == "Logged In"){
                        echo "You are logged in";
                    }
                    ?>
                </form>
            </div>


            <div class="register">
                <form action="apps/register.php" method="post">
                    <div>
                        <h2>Register</h2>
                        <p>Username</p><input type="text" name="reg_username" id="reg_username" required>
                        <p>Email</p><input type="email" name="reg_email" id="reg_email" required>
                        <p>Password</p><input type="password" name="reg_password" id="reg_password" min="7" required>
                        <?php
                        if ($_GET['message'] == "Fill In"){
                            echo "Please enter your username or password";
                        }

                        if ($_GET['message'] == "Incorrect"){
                            echo "Please enter a password following the conditions";
                        }

                        if ($_GET['message'] == "Already exists"){
                            echo "The username or email is already in use ";
                        }
                        ?>
                    </div>

                    <div>
                        <input type="submit" name="reg_button" id="reg_button">

                    </div>
                </form>
            </div>

            <div class="close">
                <span class="close">&times;</span>
            </div>

        </div>
        <?php
        if ($_GET['message'] == "Created"){
            echo "You have created an account";
        } ?>
    </div>
</div>

<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>


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