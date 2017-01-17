<?php include_once("_config.php"); ?>
<?php
session_start();
// récupère le pseudo en session
$pseudo = $_SESSION["pseudo"];


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
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/fonctions.js" type="text/javascript"></script>
    </head>
    <body>
        <form name="form_chat" id="form_chat" method="post" action="chat_trt.php">
            <textarea name="zoneChat" id="zoneChat" rows="20" cols="80">
            </textarea>
            <br/>
            <input type="text" name="msg" id="msg" size="60">
            <input type="button" name="bt_chat" id="bt_chat" value="Poster">
            <br/>
            - Vous êtes identifié en tant que <?php echo $pseudo ?> -
        </form>
    </body>
</html>
