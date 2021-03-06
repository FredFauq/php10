<?php include 'controllerCorrection.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" />
        <link rel="stylesheet" href="style.css" />
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <title>php10tp2</title>
    </head>
    <body>
        <div class="container border border-danger rounded">
            <!--formulaire demandant une liste déroulante(Mr ou Mme), nom, prénom age et société rediriger vers la page index.php-->
            <h2><span class="badge badge-pill badge-success">Formulaire d'inscription</span></h2>
            <form action="correction.php" method="POST">
                <div class="form-group">
                    <label for="civility">Civilité : *</label>
                    <Select class="form-control is-valid" name="civility" id="civility">
                        <option selected disabled>veuillez choisir une option</option>
                        <!--vérifie si une option est choisie et si la clé = 1 ou 2  si oui sauvegarde l'option selectionnée aprés la validation du formulaire-->
                        <option value="1" <?= (!empty($_POST['civility']) && $_POST['civility'] == 1) ? 'selected' : '' ?>>M</option>
                        <option value="2" <?= (!empty($_POST['civility']) && $_POST['civility'] == 2) ? 'selected' : '' ?>>Mme</option>
                    </select>
                    <p class="text-danger"> <?= isset($formError['civility']) ? $formError['civility'] : ''; ?></p>
                    <label for="lastname">Nom : *</label>
                    <!--sauvegarde les données saisie dans le champs aprés la validation du formulaire-->
                    <input class="form-control is-valid" type="text" name="lastname" id="lastname" value="<?= isset($lastname) ? $lastname : '' ?>" />
                    <p class="text-danger"> <?= isset($formError['lastname']) ? $formError['lastname'] : ''; ?></p>

                    <label for="firstname">Prénom : *</label>

                    <input class="form-control is-valid" type="text" name="firstname" id="firstname" value="<?= isset($firstname) ? $firstname : '' ?>" />
                    <p class="text-danger"> <?= isset($formError['firstname']) ? $formError['firstname'] : ''; ?></p>

                    <label for="age">Age : *</label>

                    <input class="form-control is-valid" type="text" name="age" id="age" value="<?= isset($age) ? $age : '' ?>" />
                    <p class="text-danger"> <?= isset($formError['age']) ? $formError['age'] : ''; ?></p>

                    <label for="society">Société (facultatif) : </label>

                    <input class="form-control" type="text" name="society" id="society" value="<?= isset($society) ? $society : '' ?>" />
                </div>
                <input class="btn btn-success" type="submit" value="Créer" name='submit'/>
            </form>
            <?php
            //affiche les données du formulaire a sa validation et si pas d'erreur comptabilisée
            if (isset($_POST['submit']) && (count($formError) == 0)) {
                ?>
                <div class='font-weight-bold' style="height: 374px; background:url('feu.gif') no-repeat center;">
                    <p class='pt-5'><?= $civility ?> </p>    
                    <p><?= $lastname ?> </p>        
                    <p><?= $firstname ?> </p>
                    <p><?= $age; ?> </p>
                    <?php if (!empty($society)) { ?>
                        <p><?= $society ?> </p>    
                    <?php }
                    ?>
                </div>
            <?php }
            ?>
        </div>
    </body>
</html>