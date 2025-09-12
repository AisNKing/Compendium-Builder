<?php echo '<form action="index.php?page=AddAbilities&bestiaryID='. $_GET["bestiaryID"] . '" method="post">' ?>
    <fieldset>
        <legend>Add Ability</legend>
        <p>Name</p>
        <input id="name" name="name" type="text" style=""></input>
        <p>Type</p>
        <input id="type" name="type" type="number" min="1" max="6" style=""></input>
        <p>Description</p>
        <textarea id="description" name="description" style="width:200;height:100;"></textarea>
        <p>Color</p>
        <input id="color" name="color" type="number" min="0" max="3" style=""></input>
        <?php 
            if(isset($_GET["bestiaryID"])){
                echo '<input type="hidden" id="bestiaryID" name="bestiaryID" value='. $_GET["bestiaryID"] .  '></input>';
            }
        ?> 
        </br>
        </br>
        <button id="btnSave">Save</button>
    </fieldset>
</form>

<?php 
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli("localhost:3306", "root", "", "bestiary");

    $bestiaryID = $_GET["bestiaryID"];


    if(isset($_POST["bestiaryID"])){
        $name = $_POST["name"];
        $type = $_POST["type"];
        $description = $_POST["description"];
        $color = $_POST["color"];
        
        $mysqli->real_query(
            "INSERT INTO cards (name, type, description, color, active, bestiaryID)
            VALUES ('$name', '$type', '$description', '$color', 1, '$bestiaryID')");
    }

    $mysqli->real_query(
        "SELECT * FROM cards WHERE bestiaryID = $bestiaryID");
    $blist = $mysqli->use_result();

    foreach ($blist as $row) {
        echo '</br><a href = index.php?page=EditAbilities&id=' . $row['id'] . '>' . $row['name'] . '</a>';
    }
?>