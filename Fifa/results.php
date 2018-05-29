<?php
include ('teamlistview.php');

session_start();

if (isset($_GET['player_id'], $_GET['player_id_2']))
{
    $player_1_var = $_GET['player_id'];
    $player_2_var = $_GET['player_id_2'];
    $player_1 = $conn->prepare("SELECT `first_name`, `last_name` FROM tbl_players WHERE id = $player_1_var");
    $player_2 = $conn->prepare("SELECT `first_name`, `last_name` FROM tbl_players WHERE id = $player_2_var");
    $player_1->execute();
    $show_player_1 = $player_1->fetch(PDO::FETCH_ASSOC);
    $player_2->execute();
    $show_player_2 = $player_2->fetch(PDO::FETCH_ASSOC);
}

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
                            <a href="results.php"><span>Resultaten</span></a>
                            <a href="opstelling.php">Opstelling</a>
                        <?php } ?>
                        <a href="speelschema.php">Speelschema</a>
                        <a href="poulestands.php">Poule Standen</a>

                        
                    </nav>
                </div>
                
        </div>

<div class="page1">
    <div class="container">
        <div class="left_grid">
            <div class="result">
                <form action="apps/inputresultscont.php" method="post">
                    <p>Invoer Resultaat</p>
                    <div class="invoer_grid2">
                        <label for="team_list_1">
                            <select name="team_list_1" id="team_list_1">
                                <option selected="selected">Kies de team</option>
                                <?php
                                foreach($team_list as $name) { ?>
                                    <option value="<?= $name['id'] ?>"><?= $name['name'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </label>
                        <div class="slash">
                            <p>-</p>
                        </div>

                        <div class="team_b">
                            <label for="team_list_2">
                                <select name="team_list_2" id="team_list_2">
                                    <option selected="selected">Kies de team</option>
                                    <?php
                                    foreach($team_list as $name) { ?>
                                        <option value="<?= $name['id'] ?>"><?= $name['name'] ?></option>
                                        <?php
                                    } ?>
                                </select>
                            </label>
                            

                        </div>

                        <div class="team_a_score">
                                <label for="team_a_score">
                                    <input type="number" name="team_a_score">
                                </label>
                            </div>
                            <div class="slash">
                                <p>-</p>
                            </div>

                            <div class="team_b_score">
                                <label for="team_b_score">
                                    <input type="number" name="team_b_score">
                                </label>
                            </div>

                        <br><br>


                    </div>

                    <div class="container">
                        <div class="score_ip">
                            
                        </div>
                    <input type="submit">
                 </form>
                    

                    <div class="container">
                        <div class="players">
                            <form action="apps/playerscorecont.php" method="post">
                            <div class="p_score_1">
                                <label for="p_score_1">
                                    <select name="p_score_1" id="p_score_1">
                                        <option selected="selected">Kies een speler</option>
                                        <?php
                                        foreach($player_list as $player) { ?>
                                            <option value="<?= $player['id'] ?>"><?= $player['first_name'] . " " .  $player['last_name'] ?></option>
                                            <?php
                                        } ?>
                                    </select>
                                </label>
                            </div>
                                 <input type="submit" name="players" id="players">
                            </form>

                <p>Player name:</p> <?php if (isset($_GET['player_id']))
                            { echo $show_player_1['first_name'] . " " .  $show_player_1 ['last_name']; ?> <form action="apps/delete_player.php" method="post"> <input type = "hidden" name="player_delete" value="<?php echo $_GET['player_id']; ?>"> <input type="image" name="delete_bt" src="img/delete.png" value="Submit" width="10px" height="10px">   </form>    <?php }  ?>

                        </div>
                        <?php
                        $admin = $_SESSION['admin'];
                        if ($admin == '1'){?>


                            <p>Matches:</p>
                            <div class="button">
                                <form action="apps/matches_data.php">
                                    <button type="submit">Download matches data</button>
                                </form>
                            </div>

                            <p>Teams:</p>
                            <div class="button">
                                <form action="apps/teams_data.php">
                                    <button type="submit">Download teams data</button>
                                </form>
                            </div>

                            <!-- <p>Players:</p>
                            <div class="button">
                                <form action="apps/players_data.php">
                                    <button type="submit">Download players data</button>
                                </form>
                            </div> -->

                        <?php } ?>
                    </div>
            </div>
        </div>
    </div>
    <div class="times">
        <h2> Tijd Schema</h2>

        <table style="width:100%">
            <tr>
                <th>Team_a</th>
                <th>Team_b</th>
                <th>Time</th
            </tr>
            <tr>
                <td>Team A</td>
                <td>Team B</td>
                <td>12:30</td>
            </tr>
            <tr>
                <td>Team C</td>
                <td>Team D</td>
                <td> 13:00</td>
            </tr>
            <tr>
                <td>Team E</td>
                <td>Team F</td>
                <td>13:30</td>
            </tr>
        </table>
    </div>

    <div class="poule">
        <h2>Poule standen</h2>

        <p>Poule a</p>

        <table style="width:100%">
            <tr>
                <th>Team</th>
                <th>Score</th>
            </tr>
            <tr>
                <td>Team A</td>
                <td>10</td>
            </tr>
            <tr>
                <td>Team B</td>
                <td>12</td>
            </tr>
            <tr>
                <td>Team D</td>
                <td>3</td>
            </tr>
        </table>

        <div class="topscore">
            <h2>Top scorer:</h2>
            <p>Naam: <?php
                echo $top_scorer_show ['first_name'] . $top_scorer_show['last_name'];
                ?></p>
            <p>Team: <?php
            echo $top_scorer_team_show ['name'];
            ?></p>
            <h3>Score: <?php
                echo $top_score_show['top_score'];
                ?></h3>

        </div>

    </div>

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
