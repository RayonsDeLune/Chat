<?php
session_start();
// on récupère le pseudo
$pseudo = $_POST["pseudo"];
// on le stocke en session
$_SESSION["pseudo"] = $pseudo;

// on affiche un lien pour entrer dans le chat
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <H1>Bienvenue <?php echo $pseudo ?> !</h1>
        <a href="chat.php">Entrez dans le chat</a>
    </body>
</html>
