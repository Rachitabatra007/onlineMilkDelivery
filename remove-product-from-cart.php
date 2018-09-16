<?php require 'ifloggedin.php' ?>
<?php
    if(!isset($_GET['real_product_id'])) {
        exit();
    }
    if(isset($_SESSION['cart'])) {
        $real_product_id = $_GET['real_product_id'];
        if(isset($_SESSION['cart'][''.$real_product_id]) && $_SESSION['cart'][''.$real_product_id] > 1) $_SESSION['cart'][''.$real_product_id]--;
        else unset($_SESSION['cart'][''.$real_product_id]);
        echo json_encode($_SESSION['cart']);
    }
 ?>
