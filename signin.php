<?php require 'ifnotloggedin.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="./login-page.css" rel="stylesheet" type="text/css">
        <title>Milkman</title>
    </head>
    <body>
        <div class="login-main-container">
            <div class="login-container">
                <div class="login-card-top"><p>SIGN IN</p></div>
                <div class="form-container">
                    <form class="sign-in-form">
                        <div class="input-container"><span class="label-u-p">Username  </span><input type="text" id="username" class="input-u-p" placeholder="Enter Username"></div>
                        <div class="input-container"><span class="label-u-p">Password  </span><input type="password" id="password" class="input-u-p" placeholder="Enter Password"></div>
                        <input type="submit" id="submit" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </body>
    <script
			  src="https://code.jquery.com/jquery-3.3.1.js"
			  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
			  crossorigin="anonymous"></script>
    <script type="text/javascript" src="signin.js"></script>
</html>
