<?php
//on initialise nos variables à vide pour pouvoir les récupérer en méthode POST
$lastname = '';
$firstname = '';
$birthdate = '';
$countryOfBirth = '';
$nationality = '';
$phone = '';
$email = '';
$address = '';
$degree = '';
$peNumber = '';
$numberBadge = '';
$urlCodecademy = '';
$hero = '';
$hack = '';
$experience = '';
// création des variables de regex
$regexPhoneNumber = '/^[0-9]{10}$/';
$regexName = '/^[a-zA-ZàáâãäåçèéêëìíîïðòóôõöùúûüýÿÁÀÂÄÃÉÈÊËÍÌÎÏÓÒÔÖÕÚÙÛÜÝ-]+$/';
$regexDate = '/^[0-9]{2}[/]{1}[0-9]{2}[/]{1}[0-9]{4}/';
$regexText = '/^[\\s-.+,_a-zA-Z0-9áàâäãçéèêëíìîïóòôöõúùûüýÿÁÀÂÄÃÉÈÊËÍÌÎÏÓÒÔÖÕÚÙÛÜÝ]+$/';
$regexMail = '/^[A-z0-9._%+-]+[@]{1}[A-z0-9.-]+[.]{1}[A-z]{2,4}$/';
$regexAddress = '/^[A-z\ 0-9\']+$/';
$regexNumberLetter = '/^[0-9A-z.+]+$/';
$regexNumber = '/^[0-9]+$/';
$regexURL = '/^(https?:\/\/)?[a-z0-9-]*\.?[a-z0-9-]+\.[a-z0-9-]+(\/[^<>]*)?$/';
?>   
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>PHP 10 TP1 </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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
                    <?php
                    // on vérifie que les champs ont été remplis
                    if (!empty($_POST)) {
                        // déclaration des variables
                        $lastname = $_POST['lastname'];
                        $firstname = $_POST['firstname'];
                        $birthdate = $_POST['birthdate'];
                        $countryOfBirth = $_POST['countryOfBirth'];
                        $nationality = $_POST['nationality'];
                        $phone = $_POST['phone'];
                        $email = $_POST['email'];
                        $address = $_POST['address'];
                        $degree = $_POST['degree'];
                        $peNumber = $_POST['peNumber'];
                        $numberBadge = $_POST['numberBadge'];
                        $urlCodecademy = $_POST['urlCodecademy'];
                        $hero = $_POST['hero'];
                        $hack = $_POST['hack'];
                        $experience = $_POST['experience'];
                        
                        // on teste la variable par sa regex
                        if (preg_match($regexName, $firstname)) {
                            ?><p>Prénom : <?= $firstname; ?><p><?php
                        } else {
                            // sinon affichage du message d'erreur
                            ?><p>votre prénom est invalide</p><?php
                            }
                            $date = DateTime::createFromFormat('Y-m-d', $birthdate);
                            ?><p>Votre date de naisance : <?= $date->format('d/m/Y'); ?><p><?php
                        // on teste la variable par sa regex     
                        if (preg_match($regexName, $countryOfBirth)) {
                            ?><p>Pays de naissance : <?= $countryOfBirth; ?><p><?php
                            } else {
                                // sinon affichage du message d'erreur
                                ?><p>votre pays de naissance invalide</p><?php
                                }
                                // on teste la variable par sa regex         
                        if (preg_match($regexName, $nationality)) {
                                    ?><p>Nationalité : <?= $nationality; ?><p><?php
                            } else {
                                // sinon affichage du message d'erreur
                                ?><p>votre nationalité est invalide</p><?php
                            }
                            // on teste la variable par sa regex        
                        if (preg_match($regexAddress, $address)) {
                                ?><p>Adresse : <?= $address; ?><p><?php
                            } else {
                                // sinon affichage du message d'erreur
                                ?><p>votre adresse est invalide</p><?php
                            }
                            // on teste la variable par sa regex      
                        if (preg_match($regexMail, $email)) {
                                ?><p>Email : <?= $email; ?><p><?php
                            } else {
                                // sinon affichage du message d'erreur
                                ?><p>votre email est invalide</p><?php
                            }
                            // on teste la variable par sa regex        
                        if (preg_match($regexPhoneNumber, $phone)) {
                                ?><p>Téléphone : <?= $phone; ?><p><?php
                            } else {
                                // sinon affichage du message d'erreur
                                ?><p>votre téléphone est invalide</p><?php
                            }
                            ?><p>Niveau diplôme : <?= $degree; ?><p><?php
                            // on teste la variable par sa regex        
                        if (preg_match($regexNumber, $peNumber)) {
                                ?><p>N° Pôle Emploi : <?= $peNumber; ?><p><?php
                            } else {
                                // sinon affichage du message d'erreur
                                ?><p>votre n° Pôle Emploi est invalide</p><?php
                                }
                                // on teste la variable par sa regex         
                        if (preg_match($regexNumber, $numberBadge)) {
                                    ?><p>N° de badge : <?= $numberBadge; ?><p><?php
                            } else {
                                // sinon affichage du message d'erreur
                                ?><p>votre n° de badge est  invalide</p><?php
                            }
                            // on teste la variable par sa regex         
                        if (preg_match($regexURL, $urlCodecademy)) {
                                ?><p>URL Codecademy : <?= $urlCodecademy; ?><p><?php
                            } else {
                                // sinon affichage du message d'erreur
                                ?><p>L'url Codecademy est invalide</p><?php
                            }
                            // on teste la variable par sa regex         
                        if (preg_match($regexText, $hero)) {
                                ?><p>Héro ou héroïne: <?= $hero; ?><p><?php
                            } else {
                                // sinon affichage du message d'erreur
                                ?><p>votre texte est invalide</p><?php
                            }
                            // on teste la variable par sa regex         
                        if (preg_match($regexText, $hack)) {
                                ?><p>Hack : <?= $hack; ?><p><?php
                            } else {
                                // sinon affichage du message d'erreur
                                ?><p>votre texte est invalide</p><?php
                            }
                            // on teste la variable par sa regex        
                       if (preg_match($regexText, $experience)) {
                                ?><p>Expérience : <?= $experience; ?><p><?php
                            } else {
                                // sinon affichage du message d'erreur
                                ?><p>Votre texte est invalide</p><?php
                            }
                        } else {
                        ?>
                        <form method="post" action="index.php" enctype ="multipart/form-data">
                            <div  class="form-group">      
                                <label  for="civility">Civilité</label>
                                <select name="civility" id="civility">
                                    <option selected disabled>Veuillez selectionner une option</option> 
                                    <option value="M.">M.</option>
                                    <option value="Mme">Mme</option>
                                </select>
                            </div>
                            <div  class="form-group">
                                <!-- Ajout des inputs avec leurs labels -->
                                <label  for="lastname">Nom :</label>
                                <input class ="input-group-lg" type="text" value= "<?php $lastname ?>" name= "lastname" id= "lastname" placeholder="Dupont" required>
                            </div>
                            <div  class="form-group">
                                <label  for="firstname">Prénom :</label>
                                <input type="text" value= "<?php $firstname ?>" name= "firstname" id= "firstname" placeholder= "Jean" required>
                            </div>    
                            <div  class="form-group">
                                <label  for="birthdate">Date de Naissance :</label>
                                <input type="date" value= "<?php $birthdate ?>" name= "birthdate" id= "birthdate" placeholder= "15/06/1970" required>
                            </div>
                            <div  class="form-group">
                                <label  for="countryOfBirth">Pays de Naissance :</label>
                                <input type="text" value= "<?php $countryOfBirth ?>" name= "countryOfBirth" id= "countryOfBirth" placeholder= "France" required>
                            </div>
                            <div  class="form-group">
                                <label  for="nationality">Nationalité :</label>
                                <input type="text" value= "<?php $nationality ?>" name= "nationality" id= "nationality" placeholder= "Française" required>
                            </div>
                            <div  class="form-group">
                                <label  for="address">Adresse :</label>
                                <input type="address" value= "<?php $address ?>" name= "address" id= "address" placeholder= "15 grande rue " required>
                            </div>
                            <div  class="form-group">
                                <label  for="email">eMail :</label>
                                <input type="email" value= "<?php $email ?>" name= "email" id= "email" placeholder= "jeandupont@com.fr" required>
                            </div>
                            <div  class="form-group">
                                <label  for="phone">Téléphone :</label>
                                <input type="phone" value= "<?php $phone ?>" name= "phone" id= "phone" placeholder= "0912345678" required>
                            </div>
                            <div  class="form-group">      
                                <label  for="degree">Diplôme</label>
                                <select name="degree" value= "<?php $degree ?>" name= "degree" id= "degree">
                                    <option selected disabled>Veuillez selectionner une option</option> 
                                    <option value="without">Sans</option>
                                    <option value="bac">Bac</option>
                                    <option value="bac+2">Bac+2</option>
                                    <option value="bac+3">Bac+3 ou supérieur</option>
                                </select>
                            </div>
                            <div  class="form-group">
                                <label  for="peNumber">N° Pôle Emploi :</label>
                                <input type="text" value= "<?php $peNumber ?>" name= "peNumber" id= "peNumber" placeholder= "123456" required>
                            </div>
                            <div  class="form-group">
                                <label  for="numberBadge">Nombre de badge :</label>
                                <input type="numberBadge" value= "<?php $numberBadge ?>" name= "numberBadge" id= "numberBadge" placeholder= "123456" required>
                            </div>
                            <div  class="form-group">
                                <label  for="urlCodecademy">Liens Codecademy :</label>
                                <input type="urlCodecademy" value= "<?php $urlCodecademy ?>" name= "urlCodecademy" id= "urlCodecademy" placeholder="http://ceciestunexemple.com" required>
                            </div>
                            <div class="form-group">
                                <p>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi? :</p>
                                <TEXTAREA name="hero" value= "<?php $hero ?>" rows= 6 COLS= 50 required></TEXTAREA>
                             </div>
                            <div class="form-group">
                                <p>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) :</p>
                                <TEXTAREA name="hack" value= "<?php $hack ?>" rows= 6 COLS= 50 required></TEXTAREA>
                             </div>
                            <div class="form-group">
                                <p>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? :</p>
                                <TEXTAREA name="experience" value= "<?php $experience ?>" rows= 6 COLS= 50 required></TEXTAREA>
                             </div>
                            <div>
                            <!-- Bouton Submit de validation du formulaire pour l'envoi des données -->
                            <button type="submit" name="validate" action="index.php">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </body>
</html>