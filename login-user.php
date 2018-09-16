<?php
    session_start();
    require 'connection.php';
?>

<?php
    if(!empty($_POST)) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "select * from users where email='".$username."' and password = '".$password."'";
        $result = mysqli_query($connection, $sql);
        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['email'] = $row['email'];
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];
            echo "true";
        } else echo "false";
    }
?>

<?php require 'disconnect.php'; ?>
