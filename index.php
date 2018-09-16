<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Welcome | Order Milk Online | easy peasy lemon squesy</title>
        <link rel="stylesheet" href="index.css" type="text/css">
    </head>
    <body>
        <nav>
            <?php
                if(isset($_SESSION['email'])) {
                    ?>
                        <p>Hello <span> <?php echo $_SESSION['first_name']." ".$_SESSION['last_name'] ?> </span>&nbsp; want to <span>logout</span></p>
                    <?php
                } else {
                    ?>
                        <p>Already a customer ? <a href="./signin.php">SIGN IN</a> or <a href="signup.html"><span>SIGN UP</span></a></p>
                    <?php
                }
            ?>
        </nav>
        <div class="main-container">
            <?php if(isset($_SESSION['email'])) { ?>
                <span><div id="main-container-content">shop</div></span>
            <?php } else { ?>
                <span><div id="main-container-content">sign-in to shop</div></span>
            <?php } ?>
        </div>
    </body>
</html>
