<?php
    include_once "header.php";
?>

<div class="content">
    <div class="title">
        Tournaments
    </div>
    <div class="data">
        <?php
            include_once "include/db.php";

            $qry = "SELECT * FROM tournament";

            $result = $conn->query($qry);

            while($column = mysqli_fetch_assoc($result)){
        ?>
            <div class="pdata">
                <img src="
                    <?php
                        switch($column["toName"]){
                            default:
                                echo "image/none.png";
                                break;
                        }
                    ?>
                ">
                <form action="include/tourna.inc.php?No=<?php echo $column["No"];?>" method="POST" class="name"> 
                    <input type="submit" value="<?php echo $column["toName"]; ?>">
                </form>
            </div>
        <?php
            }
        ?>
    </div>

    <div class="details">
        <?php
            if(isset($_SESSION["No"])){
                $No = $_SESSION["No"];
                
                $qry = "SELECT * FROM tournament WHERE No='$No'";

                $TournamentDataResult = $conn->query($qry);
                
                $column = mysqli_fetch_assoc($TournamentDataResult);

                echo "<label>Name: </label>" . $column["toName"];
                echo "<br>";
                echo "<label>Year: </label>" . $column["toYear"];
                echo "<br>";
                echo "<label>Game: </label>" . $column["toGame"];
                echo "<br>";
                echo "<label>Country: </label>" . $column["toCountry"];
                echo "<br>";
                echo "<label>Winner: </label>" . $column["toWinner"];
                echo "<br>";

                unset($_SESSION["No"]);
            }
        ?>
    </div>
</div>