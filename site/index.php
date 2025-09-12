
<a href="index.php?">Home</a>
<br />
<br />

<?php 
    //add bestiary
    //edit bestiary
    //export bestiary
    //view bestiary
    if(isset($_GET["page"]) && $_GET["page"] == "AddBestiary"){
        include 'bestiary/bestiary_add.php';
    }
    else if(isset($_GET["page"]) && $_GET["page"] == "EditBestiary"){
        include 'bestiary/bestiary_edit.php';
    }
    else if(isset($_GET["page"]) && $_GET["page"] == "ExportBestiary"){
        include 'bestiary/bestiary_export.php';
    }
    else if(isset($_GET["page"]) && $_GET["page"] == "ViewBestiary"){
        include 'bestiary/bestiary_view.php';
    }
    
    //add beast
    else if(isset($_GET["page"]) && $_GET["page"] == "AddBeast"){
        include 'beast/beast_add.php';
    }
    //view beast
    else if(isset($_GET["page"]) && $_GET["page"] == "ViewBeast"){
        include 'beast/beast_view.php';
    }
    //edit beast
    else if(isset($_GET["page"]) && $_GET["page"] == "EditBeast"){
        include 'beast/beast_edit.php';
    }
    else if(isset($_GET["page"]) && $_GET["page"] == "TagLocation"){
        include 'beast/beast_addlocation.php';
    }
    else if(isset($_GET["page"]) && $_GET["page"] == "TagCard"){
        include 'beast/beast_addcard.php';
    }

    //add location
    //edit location
    
    //add card
    else if(isset($_GET["page"]) && $_GET["page"] == "AddAbilities"){
        include 'card/card_add.php';
    }
    //edit card
    else if(isset($_GET["page"]) && $_GET["page"] == "EditAbilities"){
        include 'card/card_edit.php';
    }
    else {
        echo '<a href="index.php?page=AddBestiary">Bestiaries</a>';
    }
?>