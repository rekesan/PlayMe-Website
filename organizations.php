<?php
    include_once "header.php";
?>
<div class="content">
    <div class="title">
        Organizations
    </div>
    <div class="data">
        <?php
            include_once "include/db.php";

            $qry = "SELECT * FROM company";

            $result = $conn->query($qry);

            while($column = mysqli_fetch_assoc($result)){
        ?>
            <div class="pdata">
                <img src="
                    <?php
                        switch($column["cName"]){
                            default:
                                echo "image/none.png";
                                break;
                        }
                    ?>
                ">
                <form action="include/organization.inc.php?cID=<?php echo $column["cID"];?>" method="POST" class="name"> 
                    <input type="submit" value="<?php echo $column["cName"]; ?>">
                </form>
            </div>
        <?php
            }
        ?>
    </div>

    <div class="details">
        <?php
            if(isset($_SESSION["cID"])){
                $cID = $_SESSION["cID"];
                
                $qry = "SELECT * FROM company WHERE cID='$cID'";

                $CompanyDataResult = $conn->query($qry);
                
                $column = mysqli_fetch_assoc($CompanyDataResult);

                echo "<label>Name: </label>" . $column["cName"];
                echo "<br>";
                echo "<label>Region: </label>" . $column["cRegion"];
                echo "<br>";
                echo "<label>Description: </label>" . $column["cDescription"];
                echo "<br>";

                unset($_SESSION["cID"]);
            }
        ?>
    </div>
</div>
