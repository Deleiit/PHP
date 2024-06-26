<?php
session_start();
if (isset($_GET["utilisateur_id"])) {
    $utilisateur_id = $_GET["utilisateur_id"];
    unset($_SESSION["utilisateurs"][$utilisateur_id]);
    $_SESSION["utilisateurs"] = array_values($_SESSION["utilisateurs"]);
}
header('Location:accueil.php');
exit();