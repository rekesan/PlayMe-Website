<?php
    include_once "header.php";
?>
<div class="content">
    <div class="title">
        Players
    </div>
    <div class="data">
        <?php
            include_once "include/db.php";

            $qry = "SELECT * FROM game";

            $result = $conn->query($qry);

            while($column = mysqli_fetch_assoc($result)){
        ?>
            <div class="pdata">
                <img src="image/player-image.png">
                <form action="include/player.inc.php?pID=<?php echo $column["pID"];?>" method="POST" class="name"> 
                    <input type="submit" value="<?php echo $column["pName"]; ?>">
                </form>
            </div>
        <?php
            }
        ?>
    </div>

    <div class="details">
        <?php
            if(isset($_SESSION["pID"])){
                $pID = $_SESSION["pID"];
                
                $qry = "SELECT * FROM player WHERE pID='$pID'";

                $PlayerDataResult = $conn->query($qry);
                
                $column = mysqli_fetch_assoc($PlayerDataResult);

                echo "<label>Name: </label>" . $column["pName"];
                echo "<br>";
                echo "<label>Start of Pro Career: </label>" . $column["pStartDate"];
                echo "<br>";
                echo "<label>Nationality: </label>" . $column["pNationality"];
                echo "<br>";
                echo "<label>Coach: </label>" . $column["pCoach"];
                echo "<br>";
                echo "<label>Birth Date: </label>" . $column["pBDate"];
                echo "<br>";

                unset($_SESSION["pID"]);
            }
        ?>
    </div>
</div>
