<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 3</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
        <li><a href="exercice2.php">exercice 2</a></li>
        <li><a href="exercice4.php">exercice 4</a></li>
        </ul>
        <p>
            <?php
            //declaration d'un fonction nommer twoCharater avec deux parametre
            function twoCharater($firstVariable , $secondVariable) {
                // qui return de chaine de caractere
                return $firstVariable . $secondVariable;
            }
            // declaration de la variable contenant la fonction chameau
            $concatenation = twoCharater('Premier parametre',' Second parametre');
            // qui affiche son contenu 
            echo $concatenation;
            ?>
        </p>
    </body>
</html>