<?php
    require ("lib/html.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="yarn-assets/bootstrap/dist/css/bootstrap.min.css">
    <title>Produit de deux nombres</title>
</head>
<body>
    <?php
        $nombre1 = filter_input(INPUT_GET, "nombre1", FILTER_SANITIZE_NUMBER_INT) ?? 2;
        $nombre2 = filter_input(INPUT_GET, "nombre2", FILTER_SANITIZE_NUMBER_INT) ?? 5;
        $result = $nombre1 * $nombre2;
    ?>
    
    <?php 
        echo htmlTag("p", "test de la fonction htmlTag");
    ?>

    <p>Le produit de <?=$nombre1?> par <?=$nombre2?> est <?=$result?> </p>


    <table class="table">
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <?php if ($i % 2): ?>
                <tr style="background-color:#CCC;">
            <?php else: ?>
                <tr>
            <?php endif?>
        <?php for ($k = 1; $k <= 10; $k++): ?>
            <?php if ($k % 2 == 0): ?>
              <td style="background-color:#888;"><?= $i * $k ?></td>
            <?php else: ?>
            <td> <?= $i * $k ?></td>
            <?php endif?>
       <?php endfor?>
        </tr>
        <?php endfor?>
    </table>
</body>
</html>