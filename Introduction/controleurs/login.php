<?php

$isPosted = filter_has_var(INPUT_POST, "submit");
$errors = [];

// Initialisation de l'email
$email = "";

if ($isPosted) {
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, "pwd");

    // Validation de la saisie

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Votre email n'est pas valide");
    }

    if (!$password) {
        array_push($errors, "Le mot de passe ne peut être vide");
    }

    // Authentification (example dans une base de données)
    if($email == "moi@mail.com" && $password == "123") {
        
        // Regenération de la session
        session_regenerate_id(true);
        
        // Stockage de l'email dans la session
        $_SESSION["email"] = $email;
        
        // Redirection en cas de succès
        header("location:app.php?route=intro");

    } else {
        array_push($errors, "Informations d'authentification invalides");
    }
}
// Validation de la saisie même avant l'envoi des données
$isValid = count($errors) == 0;

// Affichage de la vue login décoré par le gabarit
$title = "login";
$viewName = "login";
require VIEW_PATH . "/gabarit.php";

?>


