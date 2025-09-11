<?php 

    $id = $_GET['id'];

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli("localhost:3306", "root", "", "bestiary");


    $mysqli->real_query(
        "SELECT * FROM beasts WHERE id = '$id'");

    $blist = $mysqli->use_result();

    foreach ($blist as $row) {
        echo $row['name'];
        echo '</br>';
        echo '</br>';
        echo 'Description: ' . $row['description'];
        echo '</br>';
        echo '</br>';
        echo 'Location: ' . $row['location2'];
    }
    
?>