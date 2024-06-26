<?php
session_start();
if (isset($_POST["prenom_utilisateur"]) && isset($_POST["nom_utilisateur"])) {
    $prenom_utilisateur = $_POST["prenom_utilisateur"];
    $nom_utilisateur = $_POST["nom_utilisateur"];
    $utilisateur_data["prenom"] = $prenom_utilisateur;
    $utilisateur_data["nom"] = $nom_utilisateur;
    $utilisateur_data["etat"] = true;
    $_SESSION["utilisateurs"][] = $utilisateur_data;
    header("Location:accueil.php");
    exit();
}