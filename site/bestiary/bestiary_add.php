<form action="index.php?page=AddBestiary" method="post">

    <fieldset>
        <legend>Add</legend>
        <p>Name</p>
        <input id="name" name="name" type="text" style=""></input>
        </br>
        </br>
        <button id="btnSave">Save</button>
    </fieldset>

</form>

<?php 

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli("localhost:3306", "root", "", "bestiary");

    if(isset($_POST["name"])){
        $name = $_POST["name"];
        
        $mysqli->real_query(
            "INSERT INTO bestiary (name, active)
            VALUES ('$name', 1)");
            
    }

    $mysqli->real_query(
        "SELECT * FROM bestiary");

    $blist = $mysqli->use_result();

    foreach ($blist as $row) {
        echo '</br><a href = index.php?page=EditBestiary&id=' . $row['id'] . '>' . $row['name'] . '</a>';
    }
    
?>