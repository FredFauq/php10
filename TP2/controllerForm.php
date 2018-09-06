<?php
//Déclaration regex nom
$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-]+$/';
//Déclaration regex nombre et lettre
$regexAge = '/^[0-9]{1,2}/';
//déclaration d'un tableau d'érreur
$formError = array();
//  si la clés existe et qu'elle a la valeur M ou MMe
if (isset($_POST['civility']) && ($_POST['civility'] == 'M.' || $_POST['civility'] == 'Mme')) {
    $civility = htmlspecialchars($_POST['civility']);
}
// verifie si le champs de nom et vide
    if (empty($civility)) {
        //stocker dans le tableau le rapport d'érreur
        $formError['civility'] = 'Veuillez remplir le champ, svp !';
    }
 //Si Lastname existe , la passer au test regex , si elle passe la stocker dans $lastName sinon c'est vide
if (isset($_POST['lastname'])) {
    //déclarion de la variable lastname avec le htmlspecialchars qui change l'interprétation des balises par le code
    $lastname = htmlspecialchars($_POST['lastname']);
    //test de la regex si elle est invalide
    if (!preg_match($regexName, $lastname)) {
        //stocker dans le tableau le rapport d'érreur
        $formError['lastname'] = 'Veuillez entrer un nom valide, svp !';
    }
    // verifie si le champs de nom et vide
    if (empty($lastname)) {
        //stocker dans le tableau le rapport d'érreur
        $formError['lastname'] = 'Veuillez remplir le champ, svp !';
    }
}                         
 //Si firstname existe , la passer au test regex , si elle passe la stocker dans $firstname sinon c'est vide
if (isset($_POST['firstname'])) {
    //déclarion de la variable firstname avec le htmlspecialchars qui change l'interprétation des balises par le code
    $firstname = htmlspecialchars($_POST['firstname']);
    //test de la regex si elle est invalide
    if (!preg_match($regexName, $firstname)) {
        //stocker dans le tableau le rapport d'érreur
        $formError['firstname'] = 'Veuillez entrer un prénom valide, svp !';
    }
    // verifie si le champs de nom et vide
    if (empty($firstame)) {
        //stocker dans le tableau le rapport d'érreur
        $formError['firstname'] = 'Veuillez remplir le champ, svp !';
    }
} 
if (isset($_POST['age'])) {
    //déclarion de la variable age avec le htmlspecialchars qui change l'interprétation des balises par le code
    $age = htmlspecialchars($_POST['age']);
    //test de la regex si elle est invalide
    if (!preg_match($regexAge, $age)) {
        //stocker dans le tableau le rapport d'érreur
        $formError['age'] = 'Veuillez entrer un age valide, svp !';
    }
    // verifie si le champs de nom et vide
    if (empty($age)) {
        //stocker dans le tableau le rapport d'érreur
        $formError['age'] = 'Veuillez remplir le champ, svp !';
    }
} 
//  si la variable existe alors le champ aura comme valeur celle de cette variable;
if (isset(($_POST['company']))) {
    $company = htmlspecialchars($_POST['company']);
    // verifie si le champs de nom et vide
    if (empty($company)) {
        //stocker dans le tableau le rapport d'érreur
        $formError['company'] = 'Veuillez remplir le champ, svp !';
    }
}
?>