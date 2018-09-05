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
                        <?php
                        // on vérifie que les champs ont été remplis
                        //if (!empty($_POST)) {
                        ?>
                        <div  class="form-group">      
                            <label for="civility">Civilité</label>
                            <select name="civility" id="civility">
                                <option selected disabled>Veuillez selectionner une option</option> 
                                <option value="M."<?php
                                /*  si la variable existe et qu'elle a la même valeur 
                                  que ce champs alors lui mettre l'attribue selected */;
                                if (isset($_POST['civility']) && $_POST['civility'] == 'M.') {
                                    echo 'selected';
                                }
                                ?>>M.</option>
                                <option value="Mme"<?php
                                /*  si la variable existe et qu'elle a la même valeur 
                                  que ce champs alors lui mettre l'attribue selected */;
                                if (isset($_POST['civility']) && $_POST['civility'] == 'Mme') {
                                    echo 'selected';
                                }
                                ?>>Mme</option>
                            </select>
                        </div>
                        <div  class="form-group">
                            <!-- Ajout des inputs avec leurs labels -->
                            <label for="lastname">Nom :</label>
                            <input type="text" value= "<?php
                            //  si la variable existe alors le champs aurat comme valeur celle de cette variable;
                            if (isset($_POST['lastname'])) {
                                echo $_POST['lastname'];
                            }
                            ?>" name= "lastname" id= "lastname" placeholder="Dupont" required>
                        </div>
                        <div  class="form-group">
                            <label for="firstname">Prénom :</label>
                            <input type="text" value= "<?php
                            //  si la variable existe alors le champs aurat comme valeur celle de cette variable;
                            if (isset($_POST['firstname'])) {
                                echo $_POST['firstname'];
                            }
                            ?>" name= "firstname" id= "firstname" placeholder= "Jean" required>
                        </div>    
                        <div  class="form-group">
                            <label for="age">Age :</label>
                            <input type="text" value= "<?php
                            //  si la variable existe alors le champs aurat comme valeur celle de cette variable;
                            if (isset($_POST['age'])) {
                                echo $_POST['age'];
                            }
                            ?>" name= "age" id= "age" placeholder= "25" required>
                        </div>
                        <div  class="form-group">
                            <label for="company">Société :</label>
                            <input type="text" value= "<?php
                            //  si la variable existe alors le champs aurat comme valeur celle de cette variable;
                            if (isset($_POST['company'])) {
                                echo $_POST['company'];
                            }
                            ?>" name= "company" id= "company" placeholder= "nom de société" required>
                            <div>
                                <!-- Bouton Submit de validation du formulaire pour l'envoi des données -->
                                <button type="submit" name="validate" action="index.php">Envoyer</button>
                            </div>
                    </form>
                    <!-- Affichage des données du formulaire -->
                    <div>    
                        <p>Civilité : <?= $_POST['civility']; ?></p>
                        <p>Nom : <?= $_POST['lastname']; ?></p>
                        <p>Prenom : <?= $_POST['firstname']; ?></p>
                        <p>Âge : <?= $_POST['age']; ?></p>
                        <p>société : <?= $_POST['company']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>