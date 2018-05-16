<?php
error_reporting(E_ERROR|E_PARSE);
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home</title>
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
        			<h1>FIFA Dev Edition</h1>
        			<p>Home</p>
        	</div>
        </header>

        <div class="container">
                <nav>
                    <button id="myBtn">Register</button>
                    <a href="home.php">Home</a>
                    <a href="results.php">Resultaten</a>
                    <a href="opstelling.php">Opstelling</a>
                    <a href="speelschema.php">Speelschema</a>
                    <a href="home.php">Poule Standen</a>
                </nav>
        <div class="container">
            <div id="myModal" class="modal">

                <div class="modal-content">



					<div class="login">
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
        <div class="container">
            <img src="http://via.placeholder.com/350x150">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consequuntur ea, eveniet fugit illo maiores nemo quo voluptate. Animi architecto ducimus eos excepturi magni nesciunt quod. Laudantium libero necessitatibus possimus?</p>
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
