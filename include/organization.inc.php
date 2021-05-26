<?php
    session_start();
    if(isset($_GET["cID"])){
        $_SESSION["cID"] = $_GET["cID"];
        header("location: ../organizations.php");
    }
    else{
        header("location: ../");
    }