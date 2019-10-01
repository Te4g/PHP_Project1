<?php
echo htmlspecialchars($_SERVER["PHP_SELF"]);

// define variables and set to empty values
$nomErr = $prenomErr = $emailErr =  $telephoneErr = $packageErr = "";
$nom = $prenom = $email = $telephone = $package = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nom"])) {
        $nomErr = "Votre nom est requis";
    } else {
        $nom = test_input($_POST["nom"]);
    }
    if (empty($_POST["prenom"])) {
        $prenomErr = "Votre prénom est requis";
    } else {
        $prenom = test_input($_POST["nom"]);
    }
    if (empty($_POST["email"])) {
        $emailErr = "Votre e-mail est requis";
    } else {
        $email = test_input($_POST["email"]);
    }
    if (empty($_POST["telephone"])) {
        $telephoneErr = "Votre numéro de téléphone est requis";
    } else {
        $telephone = test_input($_POST["telephone"]);
    }

    if (empty($_POST["package"])) {
        $packageErr = "Vous devez choisir un package";
    } else {
        $package = test_input($_POST["package"]);
    }
}
