<?php
session_start();
if(isset($_SESSION["email"])) {
    $email = $_SESSION["email"];
} else {
    $_SESSION["message"] = "Veuillez vous connecter pour accéder à intro";
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Introduction PHP</title>
</head>
<body>
    <?php
        $key = "name";
        $var = "age";
        
        $name = filter_input(INPUT_GET, $key) ?? "Joe";
        $age = filter_input(INPUT_GET, "age", FILTER_SANITIZE_NUMBER_INT) ?? 18;                    
    ?>
    <h1>Bonjour <?php echo $name; ?> tu as <?php echo $age ?> ans votre email est <?php echo $email ?></h1>      
    <a href="logout.php"> Déconnexion</a>
</body>
</html>