<?php require 'ifnotloggedin.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>signup</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="./signup-page.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/sign-up-page-image.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Sign Up</h5>
          </div>
          <div class="card-body signup-form-container">
              <form class="signup-form">
                  <label for="first-name">first name</label>
                  <input type="text" class="form-control" id="first-name">
                  <label for="last-name">last name</label>
                  <input type="text" class="form-control" id="last-name">
                  <label for="email">email</label>
                  <input type="email" class="form-control" id="email">
                  <label for="password">password</label>
                  <input type="password" class="form-control" id="password">
                  <label for="confirm-password">confirm email</label>
                  <input type="password" class="form-control" id="confirm-password">
                  <div class="text-center">
                      <input type="submit" class="btn btn-warning submit-button" value="good to go">
                  </div>
              </form>
          </div>
        </div>
    </body>
    <script
			  src="https://code.jquery.com/jquery-3.3.1.js"
			  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
			  crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./signup.js"></script>
</html>
