<?php
// Démarrage de la session
session_start();

$isPosted = filter_has_var(INPUT_POST, "submit");
$errors = [];

// Initialisation de l'email
$email = "";
// Récupération du message flash
$message = $_SESSION["message"] ?? "";
// Destruction du message dans la session
unset($_SESSION["message"]);

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
        header("location:intro.php");

    } else {
        array_push($errors, "Informations d'authentification invalides");
    }
}
// Validation de la saisie même avant l'envoi des données
$isValid = count($errors) == 0;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <h1> Login </h1>
            <?php
if (!$isValid): ?>
                <ul class="alert alert-danger">
                <?php for ($i = 0; $i < count($errors); $i++): ?>
                <li> <?=$errors[$i]?> </li>

                <?php endfor?>
                </ul>
            <?php endif?>
            <?php if(! empty($message)) : ?>
                <div class="alert alert-warning">
                    <?= $message ?>
                </div>
                <?php endif ?> 
            <form method="POST">
                <div class="form-group">
                    <label for="email">Identifiant</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?= $email ?>">
                </div>
                <div class="form-group">
                    <label for="pwd">Mot de passe</label>
                    <input type="password" class="form-control" id="pwd" name="pwd">
                </div>
                <button type="submit" name="submit" class="btn btn-success btn-block">Connexion</button>
            </form>
        </div>
    </div>
</body>
</html>
