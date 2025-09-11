
<!---
<a href="index.php?page=AddBestiary">Add Bestiary</a>
--->
<?php 
    //add bestiary
    //edit bestiary
    //export bestiary
    //view bestiary
    if(isset($_GET["page"]) && $_GET["page"] == "AddBestiary"){
        include 'bestiary/bestiary_add.php';
    }
    if(isset($_GET["page"]) && $_GET["page"] == "EditBestiary"){
        include 'bestiary/bestiary_edit.php';
    }
    if(isset($_GET["page"]) && $_GET["page"] == "ExportBestiary"){
        include 'bestiary/bestiary_export.php';
    }
    if(isset($_GET["page"]) && $_GET["page"] == "ViewBestiary"){
        include 'bestiary/bestiary_view.php';
    }
    
    //add beast
    if(isset($_GET["page"]) && $_GET["page"] == "AddBeast"){
        include 'beast/beast_add.php';
    }
    //view beast
    if(isset($_GET["page"]) && $_GET["page"] == "ViewBeast"){
        include 'beast/beast_view.php';
    }
    //edit beast
    //add location
    //edit location
    //add card
    //edit card
    
?>