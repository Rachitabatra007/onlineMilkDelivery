<?php require 'ifloggedin.php' ?>
<?php require 'connection.php' ?>
<?php require 'imp-functions.php' ?>
<?php
    if(isset($_GET)) {
        if(isset($_GET['subCategory'])) {
            echo getProducts($connection, $_GET['subCategory']);
        } else {
            echo getProducts($connection, $_GET['category']);
        }
    }
?>
<?php require 'disconnect.php'; ?>
