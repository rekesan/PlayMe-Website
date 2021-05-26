<?php
    $server = "localhost";
    $User = "root";
    $passw = "";
    $db = "esports team data management system";

    $conn = mysqli_connect($server,$User,$passw,$db);

    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }