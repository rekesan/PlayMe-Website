<?php
    session_start();
    if(isset($_GET["gID"])){
        $_SESSION["gID"] = $_GET["gID"];
        header("location: ../games.php");
    }
    else{
        header("location: ../");
    }