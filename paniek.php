<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="madlips.css">
<title>Mad Lips</title>
</head>
<body>
    <h1>Mad lips</h1>
    <div class= 'container'>
        <div class="redheader"><p>Er heerst paniek... onkunde</p></div>
        
        <h1>onkunde</h1>
        <?php

        if (empty($_POST["wil"])) {
            $wilErr = "wil is required";
        }
        else {
            $wil = test_input($_POST["wil"]);
            if (!preg_match("/^[a-zA-Z ]$/",$wil)) {
                $wilErr = "Only letters and white space allowed"; 
            }
        }

        if (empty($_POST["persoon"])) {
            $persoonErr = "persoon is required";
        }
        else {
            $persoon = test_input($_POST["kopen"]);
            if (!preg_match("/^[a-zA-Z ]$/",$kopen)) {
                $kopenErr = "Only letters and white space allowed"; 
            }
        }

        if (empty($_POST["kopen"])) {
            $kopenErr = "kopen is required";
        }
        else {
            $kopen = test_input($_POST["kopen"]);
            if (!preg_match("/^[a-zA-Z ]$/",$kopen)) {
                $kopenErr = "Only letters and white space allowed"; 
            }
        }

        if (empty($_POST["kopen"])) {
            $kopenErr = "kopen is required";
        }
        else {
            $kopen = test_input($_POST["kopen"]);
            if (!preg_match("/^[a-zA-Z ]$/",$kopen)) {
                $kopenErr = "Only letters and white space allowed"; 
            }
        }

        if (empty($_POST["kopen"])) {
            $kopenErr = "kopen is required";
        }
        else {
            $kopen = test_input($_POST["kopen"]);
            if (!preg_match("/^[a-zA-Z ]$/",$kopen)) {
                $kopenErr = "Only letters and white space allowed"; 
            }
        }

        if (empty($_POST["kopen"])) {
            $kopenErr = "kopen is required";
        }
        else {
            $kopen = test_input($_POST["kopen"]);
            if (!preg_match("/^[a-zA-Z ]$/",$kopen)) {
                $kopenErr = "Only letters and white space allowed"; 
            }
        }

        if (empty($_POST["kopen"])) {
            $kopenErr = "kopen is required";
        }
        else {
            $kopen = test_input($_POST["kopen"]);
            if (!preg_match("/^[a-zA-Z ]$/",$kopen)) {
                $kopenErr = "Only letters and white space allowed"; 
            }
        }

        echo "<h3>Er zijn veel mensen die niet kunnen " . $_POST["Wil"] .". ";
        echo "Neem nou " . $_POST["Persoon"] .". ";
        echo "Zelfs met de hulp van een " . $_POST["Vakantie"] ." of zelfs " . $_POST["Getal"] ." kan " . $_POST["Persoon"] ." niet " . $_POST["Wil"] .". ";
        echo "Dat heeft niets te maken met een gebrek aan " . $_POST["Beste"] .", maar met een te veel aan " . $_POST["Slechtste"] .". ";
        echo "Te veel " . $_POST["Slechtste"] ." leidt tot " . $_POST["Ergste"] ." en dat is niet goed als je wilt " . $_POST["Wil"] .". ";
        echo "Helaas voor " . $_POST["Persoon"] .".</h3>";
        ?>
    </div>
</body>
</html>