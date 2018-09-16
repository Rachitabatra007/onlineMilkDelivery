<?php require 'ifloggedin.php'; ?>
<?php require 'connection.php'; ?>
<?php require 'imp-functions.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <?php require 'ulkit-css-files.php'; ?>
        <link rel="stylesheet" href="home.css" type="text/css">
    </head>
    <body>
        <nav class="uk-navbar uk-navbar-container uk-margin top-nav">
            <div class="uk-navbar-left">
                <a class="uk-navbar-toggle" href="#offcanvas-slide" uk-toggle>
                    <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Filters</span>
                </a>
            </div>
        </nav>
        <div>
            <div class="uk-background-secondary uk-light uk-padding uk-panel current-items-header">
                <p class="uk-h4">Milk</p>
            </div>
        </div>
        <div id="productArea">
            <div id="result">
                Select Category from filters
            </div>
        </div>
        <div id="offcanvas-slide" uk-offcanvas>
            <div class="uk-offcanvas-bar left-filter-nav">
                <div class="applyFilter" id="apply">
                    apply
                </div>
                <ul class="uk-nav uk-nav-default main-category">
                    <li class="uk-nav-divider border-none">Select category</li>
                    <form class="filter-checkbox-form">
                        <?php
                            $categories = json_decode(getParentCategory($connection));
                            $currentSelected = 0;
                            $i = 0;
                            foreach ($categories as $x) {
                                if($i == 0) {$currentSelected = $x->index;$i++;
                                ?>
                                    <label class"filter-radio-button"><input class="uk-radio" type="radio" name="radio2" value="<?php echo $x->index; ?>" checked> <?php echo $x->product_type_name; ?></label>
                                <?php
                                } else {
                                ?>
                                    <label class"filter-radio-button"><input class="uk-radio" type="radio" name="radio2" value="<?php echo $x->index; ?>"> <?php echo $x->product_type_name; ?></label>
                                <?php
                                }
                            }
                        ?>
                    </form>
                </ul>
                <ul class="uk-nav uk-nav-default subcategory">
                </ul>
            </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <?php require 'ulkit-js-files.php'; ?>
    <script
			  src="https://code.jquery.com/jquery-3.3.1.js"
			  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
			  crossorigin="anonymous"></script>
    <script type="text/javascript" src="home.js"></script>
</html>
<?php require 'disconnect.php'; ?>
