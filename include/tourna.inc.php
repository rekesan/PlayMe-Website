<?php
    session_start();
    if(isset($_GET["No"])){
        $_SESSION["No"] = $_GET["No"];
        header("location: ../tournament.php");
    }
    else{
        header("location: ../");
    }