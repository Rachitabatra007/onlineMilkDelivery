<?php
    $servername = 'localhost';
    $username = "root";
    $password = "";
    $dbname = "milk_delivery";

    $connection = mysqli_connect($servername, $username, $password, $dbname);
    if(!$connection) {
        die("connection failed : ".mysqli_connect_error());
    }
?>
