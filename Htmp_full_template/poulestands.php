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
        			<p>Poule standen</p>
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
        		<div class="left_grid">
        			<div class="result">
        				<p>Invoer Resultaat</p>
        				<div class="invoer_grid">
        					<form action="/action_page.php">
        						<div class="team_a">
        							<select name="team_a">
        								<option value="Team1-a">Team1</option>
        								<option value="Team2-a">Team2</option>
        								<option value="Team3-a">Team3</option>
        								<option value="Team4-a">Team4</option>
        								<option value="Team5-a">Team5</option>
        								<option value="Team6-a">Team6</option>
        								<option value="Team7-a">Team7</option>
        								<option value="Team8-a">Team8</option>
        							</select>
        						</div>


        					</form>
        					<div class="slash">
        						<p>-</p>
        					</div>
        					


        					<form action="/action_page.php">
        						<div class="team_b">
        							<select name="cars">
        								<option value="Team1">Team1</option>
        								<option value="Team2">Team2</option>
        								<option value="Team3">Team3</option>
        								<option value="Team4">Team4</option>
        								<option value="Team5">Team5</option>
        								<option value="Team6">Team6</option>
        								<option value="Team7">Team7</option>
        								<option value="Team8">Team8</option>
        							</select>
        						</div>

        						<br><br>
        					</form>
        				</div>
        				<div class="container">
        					<div class="score_ip">
        						<div class="team_a_score">
        							<input type="number" name="team_a_score">
        						</div>
        						<div class="slash">
        							<p>-</p>
        						</div>
        						
        						<div class="team_b_score">
        							<input type="number" name="team_b_score">
        						</div>
        					</div>
        				</div>

        				<div class="container">
        					<div class="players">
        						<form action="">
        							<select name="p_score_a">
        								<option value="player_1"> player1</option>
        								<option value="player_2"> player2</option>
        								<option value="player_3"> player3</option>
        								<option value="player_4"> player4</option>
        							</select>

        							<input type="submit" name="Add" value="Add">

        							<input type="submit" name="Add" value="Add">

        							<select name="p_score_b">
        								<option value="player_1"> player1</option>
        								<option value="player_2"> player2</option>
        								<option value="player_3"> player3</option>
        								<option value="player_4"> player4</option>
        							</select>

        							<input type="submit">
        						</form>

        						<p>Player name</p> <img src="http://via.placeholder.com/25x25" alt="X">
        						<p>Playername</p> <img src="http://via.placeholder.com/25x25" alt="X">
        					</div>
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
							<p>Naam</p>
							<p>Team</p>
							<h3>Score</h3>
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
