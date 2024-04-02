<?php
include_once('inc/functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Projekt</title>
</head>
<body>
    <div id="cookies">
        <div class="containter">
            <div class="subcontainer">
                <div class="cookies">
                    <p>Tento web používa na poskytovanie služieb a analýzu návštevnosti súbory cookie.
                        <button id="cookies-btn">Rozumiem</button>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <header>
        <nav>
            <ul>
            <?php
           $pages = array('Informacie o aute'=>'info.php',
                'Motor'=>'motor.php',
                'Obrazky'=>'obrazky.php',
                'Formular'=>'formular.php'
           );
           echo(generate_menu($pages));
        ?>
            </ul>
        </nav>
        <div class="navbar">
            <div class="logo">
                <a href="index.php"><img src="img/logo.png" width="155px"></a>
          </div>
    </header>