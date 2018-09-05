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
          <h1>Exercice 2</h1>
        <form name="" method="post" action="index.php">
            <ul>
                <li><label>Civilité : <select name="gender">
                            <option value="M"<?php
                            /*  si la variable existe et qu'elle a la même valeur 
                              que ce champs alors lui mettre l'attribue selected */;
                            if (isset($_POST['gender']) && $_POST['gender'] == 'M') {
                                echo 'selected';
                            }
                            ?>>M</option>
                            <option value="Mme"<?php
                            /*  si la variable existe et qu'elle a la même valeur 
                              que ce champs alors lui mettre l'attribue selected */;
                            if (isset($_POST['gender']) && $_POST['gender'] == 'Mme') {
                                echo 'selected';
                            }
                            ?>>Mme</option>
                        </select></label></li>
                <li><label>Nom : <input type="text" name="lastName" value="<?php
                        //  si la variable existe alors le champs aurat comme valeur celle de cette variable;
                        if (isset($_POST['lastName'])) {
                            echo $_POST['lastName'];
                        }
                        ?>"/></label></li>
                <li><label>Prénom : <input type="text" name="firstName" value="<?php
                        //  si la variable existe alors le champs aurat comme valeur celle de cette variable;
                        if (isset($_POST['firstName'])) {
                            echo $_POST['firstName'];
                        }
                        ?>"/></label></li>
                <li><label>age : <input type="number" name="old" value="<?php
                        //  si la variable existe alors le champs aurat comme valeur celle de cette variable;
                        if (isset($_POST['old'])) {
                            echo $_POST['old'];
                        }
                        ?>"/></label></li>
                <li><label>Société : <input type="text" name="cie" value="<?php
                        //  si la variable existe alors le champs aurat comme valeur celle de cette variable;
                        if (isset($_POST['firstName'])) {
                            echo $_POST['cie'];
                        }
                        ?>"/></label></li>
                <li><input type="submit" name="valid" value="validez"/></li>
            </ul>
        </form>
        <?php
        // verifie si les champs du form ne sont pas vide
        if (!empty($_POST['gender']) && !empty($_POST['lastName']) && !empty($_POST['firstName']) && !empty($_POST['old']) && !empty($_POST['cie'])) {
            ?>
            <!-- affiche les valeurs du form, la fonction strip_tags permet 
                d'enlever toutes les balise html que l'utilisateur pourrais metrre -->
            <p>vous êtes <?php echo strip_tags($_POST['gender']); ?></p>
            <p><?php echo strip_tags($_POST['lastName']); ?>,</p>
            <p><?php echo strip_tags($_POST['firstName']); ?>.</p>
            <p>Vous avez <?php echo strip_tags($_POST['old']); ?> ans</p>
            <p>et vous travaillez chez <?php echo strip_tags($_POST['cie']); ?></p>
            <?php
        }
        ?>
     </body>
</html>