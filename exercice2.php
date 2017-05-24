<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 2</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="exercice1.php">exercice 1</a></li>
            <li><a href="exercice3.php">exercice 3</a></li>
        </ul>
        <p>
            <?php
            // declaration d'un fonction nommer charater
            function charater($firstVariable) {
                // cette fonction return un string
                return $firstVariable;
            }
            // cette variable va chercher la fonction 
            $calcul = charater('une chaine de caractere');
            // pour pouvoir l'afficher dans ce echo
            echo $calcul;
            ?>
        </p>
    </body>
</html>