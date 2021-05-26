<?php
    session_start();

    include_once "include/function.php";

    if(!isset($_SESSION["userid"])){
        header("location: ./login.php");
    }

    if(isset($_POST["logout"])){
        logout();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Sports DB System</title>
</head>
<body>
    <div class="header">
        <div>
            <a href="./">
                <img src="image/playme.png" height="60">
            </a>
        </div>
        <div>
            <form action="" method="post">
                <?php echo "<label>Welcome, " . $_SESSION["userid"] ."!</label>" ?>
                <input type="submit" value="Logout" name="logout">
            </form>
        </div>
    </div>
    
