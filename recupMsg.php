<?php
include_once("_config.php");
// on construit la requete pour récupérer les messages postés dans la bdd
$requete = "SELECT message message, pseudo pseudo, date date FROM message ORDER BY date";
$messages = $bdd->query($requete)->fetchAll();
echo json_encode($messages);
?>