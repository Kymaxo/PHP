<?php


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="yarn-assets/bootstrap/dist/css/bootstrap.min.css">
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
    
    <a href="app.php?route=logout">Déconnexion</a>
    
    
</body>
</html>