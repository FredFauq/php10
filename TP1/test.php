               <?php
                // vérification que les données éxistent et ne sont pas vides et déclaration de chacune dans une variable
if (!empty($_POST)) {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $birthdate = $_POST['birthdate'];
    $countryOfBirth = $_POST['countryOfBirth'];
    $nationality = $_POST['nationality'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $degree = $_POST['degree'];
    $peNumber = $_POST['peNumber'];
    $numberBadge  = $_POST['numberBadge'];
    $urlCodecademy = $_POST['codecademy'];
    $hero = $_POST['hero'];
    $hack = $_POST['hack'];
    $experience = $_POST['experience'];
         
    // initialisation des variables à vide pour récupération par $_POST
//$civility = '';
//$lastname = '';
//$firstname = '';
//$age = '';
//$company = '';
$civility = $_POST['civility'];
                                    $lastname = $_POST['lastname'];
                                    $firstname = $_POST['firstname'];
                                    $age = $_POST['age'];
                                    $company = $_POST['company'];
// déclaration de variables pour validation
$valid1 = 0;
$valid2 = 0;
$valid3 = 0;
$valid4 = 0;
$valid5 = 0;
// création des variables de regex
$regexCivility = '/^(Mme|M\.|[s]?){1,3}+$/';
$regexName = '/^[a-zA-ZàáâãäåçèéêëìíîïðòóôõöùúûüýÿÁÀÂÄÃÉÈÊËÍÌÎÏÓÒÔÖÕÚÙÛÜÝ-]+$/';
$regexText = '/^[\\s-.+,_a-zA-Z0-9áàâäãçéèêëíìîïóòôöõúùûüýÿÁÀÂÄÃÉÈÊËÍÌÎÏÓÒÔÖÕÚÙÛÜÝ]+$/';
$regexNumber = '/^[0-9]{1,2}+$/';
    
    
                                    $civility = $_POST['civility'];
                                    $lastname = $_POST['lastname'];
                                    $firstname = $_POST['firstname'];
                                    $age = $_POST['age'];
                                    $company = $_POST['company'];
    
 
                                    if (!empty($_POST['civility']) && preg_match($regexCivility, $civility)) {
                                        // déclaration de variable
                                        $valid1 = 1;
                                        echo 'Ok';
                                    } else {
                                        echo 'Votre saisie est invalide';
                                    }
                                    
                                    if ((!empty($_POST['lastname'])) && (preg_match($regexName, $lastname))) {
                                    // déclaration de variable
                                    $valid2 = 1;
                                    echo 'Ok';
                                } else {
                                    // sinon affichage du message d'erreur
                                    echo 'Votre saisie est invalide';
                                }
                                    
                                if ((!empty($_POST['firstname'])) && (preg_match($regexName, $firstname))) {
                                    // déclaration de variable
                                    $valid3 = 1;
                                    echo 'Ok';
                                } else {
                                    // sinon affichage du message d'erreur
                                    echo 'Votre saisie est invalide';
                                }
                                    
                                 if ((!empty($_POST['age'])) && (preg_match($regexNumber, $age))) {
                                    // déclaration de variable
                                    $valid4 = 1;
                                    echo 'Ok';
                                } else {
                                    // sinon affichage du message d'erreur
                                    echo 'Votre age est invalide';
                                }
                                
                                 if ((!empty($_POST['company'])) && (preg_match($regexText, $company))) {
                                    // déclaration de variable
                                    $valid5 = 1;
                                    echo 'Ok';
                                } else {
                                    // sinon affichage du message d'erreur
                                    echo 'Votre nom de société est invalide';
                                }
                                
                                
                                if ($valid1 == 1 && $valid2 == 1 && $valid3 == 1 && $valid4 == 1 && $valid5 == 1) {
                        ?>
                        
                        <?php     
                    }
                                    ?>                                 
                                    
