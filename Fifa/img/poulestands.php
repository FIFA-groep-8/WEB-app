<?php
include ('teamlistview.php');
include ('matches.php');
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
            <p>Invoer resultaten</p>
        </div>
    </div>

</header>

<div class="page1">
    <div class="container">
        <nav>
            <a href="404.html">Home</a>
            <a href="results.php">Resultaten</a>
            <a href="opstelling.php">Opstelling</a>
            <a href="speelschema.php">Speelschema</a>
            <a href="home.php">Poule Standen</a>
        </nav>
        <div class="left_grid">
            <div class="result">

                <div class="invoer_grid">
                    <p><?php if (isset($team_id_1)){ echo $team_name_1_show['name'] . " " . $show_score_1['score_team_a'] . " - " .  $show_score_1['score_team_a'] . " " .  $team_name_2_show['name'];}?></p>
                    <p><?php if (isset($team_id_3)){ echo $team_name_3_show['name'] . " " . $show_score_2['score_team_a'] . " - " .  $show_score_2['score_team_a'] . " " . $team_name_4_show['name'];}?></p>
                    <p><?php if (isset($team_id_5)){ echo $team_name_5_show['name'] . " " . $show_score_3['score_team_a'] . " - " .  $show_score_3['score_team_a'] . " " . $team_name_6_show['name'];}?></p>
                    <p><?php if (isset($team_id_7)){ echo $team_name_7_show['name'] . " " . $show_score_4['score_team_a'] . " - " .  $show_score_4['score_team_a'] . " " . $team_name_8_show['name'];}?></p>
                    <p><?php if (isset($team_id_9)) {echo $team_name_9_show['name'] . " " . $show_score_5['score_team_a'] . " - " . $show_score_5['score_team_a'] . " " . $team_name_10_show['name'];}?></p>
                    <p><?php if (isset($team_id_11)) { echo $team_name_11_show['name'] . " " . $show_score_6['score_team_a'] . " - " . $show_score_6['score_team_a'] . " " . $team_name_12_show['name'];}?></p>
                    <p><?php if (isset($team_id_13)) { echo $team_name_13_show['name'] . " " . $show_score_7['score_team_a'] . " - " .  $show_score_7['score_team_a'] . " " . $team_name_14_show['name'];}?></p>
                </div>
            </div>

            <div class="times">
                <h2> Tijd Schema</h2>

                <table style="width:100%">
                    <tr>
                        <th>Team_a</th>
                        <th>Team_b</th>
                        <th>Time</th>
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
            <?php



            ?>
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
                        echo $top_scorer_show ['first_name'] . " " . $top_scorer_show['last_name'];
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
