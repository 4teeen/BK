<?php
    require_once "assets/includes/db.php";

    unset($_SESSION['logged_user']);
    header('Location: registration.php');
?>