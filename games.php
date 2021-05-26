<?php
    include_once "header.php";
?>
<div class="content">
    <div class="title">
        Games
    </div>
    <div class="data">
        <?php
            include_once "include/db.php";

            $qry = "SELECT * FROM game";

            $result = $conn->query($qry);

            while($column = mysqli_fetch_assoc($result)){
        ?>
            <div class="pdata">
                <img src="
                    <?php
                        switch($column["gName"]){
                            case "Call of Duty":
                                echo "image/COD.jpg";
                                break;
                            case "League of Legends":
                                echo "image/League.png";
                                break;
                            case "Mobile Legends":
                                echo "image/ML.jpg";
                                break;
                            case "Valorant":
                                echo "image/valorant.png";
                                break;
                            default:
                                echo "image/none.png";
                                break;
                        }
                    ?>
                ">
                <form action="include/game.inc.php?gID=<?php echo $column["gID"];?>" method="POST" class="name"> 
                    <input type="submit" value="<?php echo $column["gName"]; ?>">
                </form>
            </div>
        <?php
            }
        ?>
    </div>

    <div class="details">
        <?php
            if(isset($_SESSION["gID"])){
                $gID = $_SESSION["gID"];
                
                $qry = "SELECT * FROM game WHERE gID='$gID'";

                $GameDataResult = $conn->query($qry);
                
                $column = mysqli_fetch_assoc($GameDataResult);

                echo "<label>Name: </label>" . $column["gName"];
                echo "<br>";
                echo "<label>Description: </label>" . $column["gDescription"];
                echo "<br>";
                echo "<label>Type: </label>" . $column["gType"];
                echo "<br>";
                echo "<label>Release Date: </label>" . $column["gReleaseDate"];
                echo "<br>";

                unset($_SESSION["gID"]);
            }
        ?>
    </div>
</div>
