<?php 
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if(empty($_SESSION["email"]) and empty($_SESSION["password"])){
        header('Location: index.php');
    }

    include 'logout.php';