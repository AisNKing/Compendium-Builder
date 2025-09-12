Add Abilities

<?php 
    
    $beastID = $_GET["id"];
    if(isset($_POST["formSubmit"])){
        //echo $_POST . '';
        
        $mysqli5 = new mysqli("localhost:3306", "root", "", "bestiary");
        $mysqli5->real_query(
            "UPDATE beasthascard SET active = 0 WHERE beastID = '$beastID';");

        $mysqli3 = new mysqli("localhost:3306", "root", "", "bestiary");
        $mysqli3->real_query(
            "SELECT * FROM cards WHERE bestiaryID = (SELECT bestiaryID FROM beasts WHERE id = $beastID);");

        $cards = $mysqli3->use_result();
             
        foreach ($cards as $card) {
            if(isset($_POST[$card['id']])){
                $selectedcard = $card['id'];
                $mysqli4 = new mysqli("localhost:3306", "root", "", "bestiary");
                $mysqli4->real_query(
                    "INSERT INTO beasthascard (beastID, cardID, active)
                    VALUES ($beastID, $selectedcard, 1)");
            }
        }
    }

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli("localhost:3306", "root", "", "bestiary");


    $mysqli->real_query(
        "SELECT * FROM cards WHERE bestiaryID = (SELECT bestiaryID FROM beasts WHERE id = $beastID)");
    $cards = $mysqli->use_result();
    
    echo '<br />';
    echo '<form action="index.php?page=TagCard&id=' . $_GET["id"] . '" method="post">';
    foreach ($cards as $row) {
        echo '<br />';

        $cardID = $row['id'];
        
        $mysqli2 = new mysqli("localhost:3306", "root", "", "bestiary");
        $mysqli2->real_query(
            "SELECT * FROM beasthascard WHERE cardID = $cardID AND beastID = '$beastID' AND active = '1'");
        $cardCheck = $mysqli2->use_result();
        $amount = 0;
        foreach ($cardCheck as $ccrow) {
            $amount++;
        }
        $checked = "";
        if($amount > 0){
            $checked = "checked";
        }

        echo '<br /><input type="checkbox" id=' . $cardID . ' name=' . $cardID . ' ' . $checked . '>    ' . $row['name'];

    }
    echo '<input type="hidden" value="" name="formSubmit" id="formSubmit">';
    echo '<br />';
    echo '<br />';
    echo '<button id="btnSave">Save</button>';
    echo '</form>';

?>