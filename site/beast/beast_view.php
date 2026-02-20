<?php 

    $id = $_GET['id'];

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli("localhost:3306", "root", "", "bestiary");


    $mysqli->real_query(
        "SELECT * FROM beasts WHERE id = '$id'");

    $blist = $mysqli->use_result();

    $mysqli2 = new mysqli("localhost:3306", "root", "", "bestiary");


    $mysqli2->real_query(
        "SELECT * FROM cards c WHERE c.id IN (SELECT bhc.cardID FROM beasthascard bhc WHERE bhc.beastID = '$id' AND bhc.active = 1)");

    $alist = $mysqli2->use_result();

    foreach ($blist as $row) {
        echo $row['name'];
        echo '</br>';
        echo '</br>';
        echo 'Description: ' . $row['description'];
        echo '</br>';
        echo '</br>';
        echo 'Location: ' . $row['location2'];
        echo '</br>';
        echo '</br>';
        echo 'Abilities: '.  $row['abilities'];
        
        foreach($alist as $ab){
            echo ' -' . $ab['name'];
        }
        
        echo '</br>';
        echo '</br>';
        echo '</br>';
        echo '</br>';
        echo '<a href = index.php?page=EditBeast&id=' . $row['id'] . '>Edit</a>';
        echo '</br>';
        echo '</br>';
        echo '<a href = index.php?page=TagLocation&id=' . $row['id'] . '>Add Locations</a>';
        echo '</br>';
        echo '</br>';
        echo '<a href = index.php?page=TagCard&id=' . $row['id'] . '>Add Abilities</a>';
    }
    
?>