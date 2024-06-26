<?php
session_start();
if (isset($_GET["utilisateur_id"])) {
    $utilisateur_id = $_GET["utilisateur_id"];
    $_SESSION["utilisateurs"][$utilisateur_id]["etat"] = !$_SESSION["utilisateurs"][$utilisateur_id]["etat"];
}
header('Location:accueil.php');
exit();