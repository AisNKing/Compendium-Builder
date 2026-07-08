
<?php 
    $id = $_GET['id'];

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli("localhost:3306", "root", "", "bestiary");
    
    if(isset($_POST["name"])){
        $name = $_POST["name"];
        $description = $_POST["description"];
        $location1 = $_POST["location1"];
        $location2 = $_POST["location2"];
        $abilities = $_POST["abilities"];
        $stats = $_POST["stats"];
        
        $mysqli->real_query(
            "UPDATE beasts
                SET name = '$name',
                    description = '$description',
                    location1 = '$location1',
                    location2 = '$location2',
                    abilities = '$abilities',
                    stats = '$stats'
                WHERE id = '$id';");
            
    }
    
    $mysqli->real_query(
        "SELECT * FROM beasts WHERE id = '$id'");

    $blist = $mysqli->use_result();

    foreach ($blist as $row) {
        echo '<form action="index.php?page=EditBeast&id='. $_GET["id"] . '" method="post">';
            echo '<fieldset>';
                echo '<legend>Edit</legend>';
                echo '<p>Name</p>';
                echo '<input id="name" name="name" type="text" style="" value = "' . $row['name'] . '"></input>';
                echo '<p>Description</p>';
                echo '<textarea id="description" name="description" style="width:200;height:100;">' . $row['description'] . '</textarea>';
                echo '<p>Location (specific)</p>';
                echo '<input id="location1" name="location1" type="text" style="" value = "' . $row['location1'] . '"></input>';
                echo '<p>Location (user)</p>';
                echo '<input id="location2" name="location2" type="text" style="" value = "' . $row['location2'] . '"></input>';
                echo '<p>Abilities</p>';
                echo '<textarea id="abilities" name="abilities" type="text" style="">' . $row['abilities'] . '</textarea>';
                echo '<p>Stats</p>';
                echo '<input id="stats" name="stats" type="text" style="" value = "' . $row['stats'] . '"></input>';
                echo '</br>';
                echo '</br>';
                echo '<button id="btnSave">Save</button>';
            echo '</fieldset>';
        echo '</form>';
    }

?>