<?php
    session_start();
    if(isset($_GET["pID"])){
        $_SESSION["pID"] = $_GET["pID"];
        header("location: ../player.php");
    }
    else{
        header("location: ../");
    }