<?php
//déclaration des tableaux
$portrait1 = array('name' => 'Victor', 'firstname' => 'Hugo', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name' => 'Jean', 'firstname' => 'de La Fontaine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name' => 'Pierre', 'firstname' => 'Corneille', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name' => 'Jean', 'firstname' => 'Racine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
displayArrayValue($portrait1);
displayArrayValue($portrait2);
displayArrayValue($portrait3);
displayArrayValue($portrait4);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
              integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous" />
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