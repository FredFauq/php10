<?php
//insere le controleur avec le code PHP principal
include 'controller.php'
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" />
        <link rel="stylesheet" href="style.css" />
        <title>PHP 10 TP 3</title>
    </head>
    <body>
        <div class="container-fluid">
        <?php
        //fonction pour afficher les valeurs des tableaux
        function displayArrayValue($array) {
            ?>
            <p class="text-center"><?= $array['name'] . ' ' . $array['firstname']; ?></p>
            <div class="text-center">
                <img src="<?= $array['portrait'] ?>" class="img-fluid" alt="image d'un écrivain" />
            </div>
        <?php } ?>
        </div>
    </body>
</htm