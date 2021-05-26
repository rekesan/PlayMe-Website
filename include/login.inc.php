<?php
    session_start();
    if(isset($_POST["login"])){
        $username = $_POST["usrnm"];
        $password = $_POST["psswrd"];

        require_once "db.php";
        require_once "function.php";

        if(empty_input($username, $password)){
            $_SESSION["errorMessage"] = "Please fill the fields.";
            header("location: ../login.php");
            //header("location: ../login.php?error=empty");
            exit();
        }
        
        if($username == "admin" & $password == "password"){
            $_SESSION["userid"] = $username;
            header("location: ../");
        }
        else{
            // header("location: ../login.php?error=wronginput");
            $_SESSION["errorMessage"] = "Invalid Username and/or Passsword.";
            header("location: ../login.php");
        }
    }