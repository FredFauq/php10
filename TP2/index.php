<?php
//insere le controleur avec le code PHP principal
include 'controllerForm.php'
?>
<!DOCTYPE html>
<html lang = "fr">
    <head>
        <meta charset = "utf-8" />
        <title>PHP 10 TP2 </title>
        <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity = "sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin = "anonymous">
        <script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity = "sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin = "anonymous"></script>
        <link href="style.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Création du formulaire
        Action = L'attribut défini la page appelée par le formulaire
        Method = Méthode d'envoi du formulaire GET (transmission dans l'URL) ou POST (le plus répandu)
        -->
        <div class= "container">
            <div class= "row" id="profile">
                <div class= "col-md-12">
                    <h1>VOTRE PROFIL</h1>
                    <form method="post" action="index.php" enctype ="multipart/form-data">
                        <div  class="form-group">      
                            <label for="civility">Civilité</label>
                            <select name="civility" id="civility">
                                <option selected disabled>Veuillez selectionner une option</option> 
                                <option value="<?php isset($civility) ? $civility : ''; ?>" >M.</option>
                                <option value="<?php isset($civility) ? $civility : ''; ?>" >Mme</option>
                                <p class="text-danger"><?= isset($formError['civility']) ? $formError['civility'] : ''; ?></p>
                            </select>
                        </div>
                        <div  class="form-group">
                            <!-- Ajout des inputs avec leurs labels -->
                            <label for="lastname">Nom :</label>
                            <input type="text" value= "<?php isset($lastname) ? $lastname : ''; ?>" name= "lastname" id= "lastname" placeholder="Dupont" required>
                            <p class="text-danger"><?= isset($formError['lastname']) ? $formError['lastname'] : ''; ?></p>
                        </div>
                        <div  class="form-group">
                            <label for="firstname">Prénom :</label>
                            <input type="text" value= "<?php isset($firstname) ? $firstname : ''; ?>" name= "firstname" id= "firstname" placeholder= "Jean" required>
                            <p class="text-danger"><?= isset($formError['firstname']) ? $formError['firstname'] : ''; ?></p>
                        </div>    
                        <div  class="form-group">
                            <label for="age">Age :</label>
                            <input type="text" value= "<?php isset($age) ? $age : ''; ?>" name= "age" id= "age" placeholder= "25" required>
                            <p class="text-danger"><?= isset($formError['age']) ? $formError['age'] : ''; ?></p>
                        </div>
                        <div  class="form-group">
                            <label for="company">Société :</label>
                            <input type="text" value= "<?php isset($company) ? $company : ''; ?>" name= "company" id= "company" placeholder= "nom de société" required>
                            <p class="text-danger"><?= isset($formError['company']) ? $formError['company'] : ''; ?></p>
                            <div>
                                <!-- Bouton Submit de validation du formulaire pour l'envoi des données -->
                                <button type="submit" name="submit" action="index.php">Envoyer</button>
                            </div>
                        </div>
                    </form>
                    <?php if (isset($_POST['submit']) && (count($formError) === 0)) { ?>
                        <!-- Affichage des données du formulaire -->
                        <div>    
                            <p>Civilité : <?= $civility; ?></p>
                            <p>Nom : <?= $lastname; ?></p>
                            <p>Prenom : <?= $firstname; ?></p>
                            <p>Âge : <?= $age; ?></p>
                            <p>société : <?= $company; ?></p>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
    </body>
</html>