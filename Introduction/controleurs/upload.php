<?php
// Le formulaire a t-il été encoyé
$isPosted = filter_has_var(INPUT_POST, "submit");

if($isPosted) {
    
    // Récupération des données de l'upload
    $upload = $_FILES["photo"];
    
    // Définition de l'extension du fichier
    $extension = explode("/", $upload["type"])[1];
    
    // Le chmin du stockage de l'image
    $imageFolder = ROOT_PATH . "/www/images/";
    
    // Nom de l'image
    $fileName = uniqid("photo_") . "." . $extension;
    
    //Déplacement du fichier temporaire
    if(move_uploaded_file($upload["tmp_name"], $imageFolder.$fileName)) { 
        $_SESSION["message"] = "Téléchargement terminé";
    } else {
        $_SESSION["message"] = "Echec du téléchargement";
    }
}

$title = "Ma photo";
$viewName = "upload"; // upload est un fichier qui est contenu dans la variable viewName

//Attribution d'un nom unique au fichier

require VIEW_PATH . "/gabarit.php";