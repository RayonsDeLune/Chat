<?php include_once("_config.php"); ?>
<?php
session_start();
// récupère le pseudo en session
$pseudo = $_SESSION["pseudo"];

// récupère le msg à sauvegarder
$msg = addslashes($_POST["msg"]);

//$date = new Date();

// on construit la requete pour récupérer les messages postés dans la bdd
$requete = "INSERT INTO message(message, pseudo, date) VALUES ('$msg', '$pseudo', NOW() )";
//echo "req : ".$requete;
$result = $bdd->query($requete);


?>
<a href="chat.php">Message ajouté avec succés, retour au chat</a>