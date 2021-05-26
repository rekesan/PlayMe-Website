<?php
    function logout(){
        session_start();
        session_unset();
        session_destroy();

        header("location: ./login.php");
    }
    
    function empty_input($username, $password){
        return empty($username) || empty($password);
    }