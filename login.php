<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=5.0">
    <title>Login</title>
</head>
<body>
    <form class="formLogin" action="include/login.inc.php" method="post">
    
        <div>
            <a href="./">
                <img src="image/playme.png" height="65">
            </a>
            <div>
                <input type="text" name="usrnm" placeholder="Username">
            </div>
                
            <div>
                <input type="password" name="psswrd" placeholder="Password">
            </div>
            
            <div>
                <input class="login" type="submit" value="Login" name="login">
                <a href="signup.php">Create an Account</a>
            </div>

            <!-- <p>Invalid Username and/or Passsword.</p> -->

            <?php
                if(!empty($_SESSION["errorMessage"])){
                    echo "<p>" . $_SESSION["errorMessage"] . "</p>";
                    unset($_SESSION["errorMessage"]);
                }
            ?>
        </div>
    </form>
</body>
</html>
