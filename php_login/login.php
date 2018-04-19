<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<button id="myBtn">Register</button>

<div id="myModal" class="modal">

    <div class="modal-content">

        <form action="Register.php" method="POST">
            <div>
                <h2>Login</h2>
                <p>Username</p><input type="text" name="username" id="username" required>
                <p>Password</p><input type="password" name="password" id="password" min="7" required>
            </div>

            <div>
                <input type="submit" name="log_button" id="log_button">
            </div>
        </form>

        <form action="Register.php" method="post">
            <div>
                <h2>Register</h2>
                <p>Username</p><input type="text" name="reg_username" id="reg_username"required>
                <p>Email</p><input type="email" name="reg_email" id="reg_email"required>
                <p>Password</p><input type="password" name="reg_password" id="reg_password" min="7" required>

            </div>

            <div>
                <input type="submit" name="reg_button" id="reg_button">

            </div>
        </form>
        <span class="close">&times;</span>
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
</body>
</html>