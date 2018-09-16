<?php
session_start();
require 'connection.php';

if(!empty($_POST)) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "insert into users (first_name, last_name, email, password) values ('".$firstname."', '".$lastname."', '".$email."', '".$password."')";
    if(mysqli_query($connection, $sql)) {
        echo "true";
    } else {
        echo "false";
    }
}

require 'disconnect.php';
?>
