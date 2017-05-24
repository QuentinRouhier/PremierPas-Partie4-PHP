<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Exo 5</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
        <li><a href="exercice4.php">exercice 4</a></li>
        <li><a href="exercice6.php">exercice 6</a></li>
        </ul>
        <p>
            <?php
            /**
             * Une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.
             * @param int $integer
             * @param string $character
             * @return type
             */
            function concatStringNumber($integer, $character) {
                //retourne les deux parametres 
                return $integer . $character;
            }
            // declaration d'une variable avec la fonction precedente de dans en indiquant ce qu'il y a dans les variable
            echo concatStringNumber(5, ' ma chaine de caractere');
            ?>
        </p>
    </body>
</html>