<?php
    // Récupération des données
    
    $nom = filter_input(INPUT_POST, "nom", FILTER_SANITIZE_STRING);
    $accepter = filter_has_var(INPUT_POST, "accepter"); 
    $competences = filter_input(INPUT_POST, "competence", FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);
    var_dump($competences);
   
    // Validation
    if(empty($nom)) {
        $message = "Saisie invalide";
    } else {
        // Traitement des données
        $message = "Bonjour $nom";
        if($accepter) {
            $message .= ", merci d'être aussi crédible"; // Concaténation
        }
    }
    // Restitution
    echo $message;
?>