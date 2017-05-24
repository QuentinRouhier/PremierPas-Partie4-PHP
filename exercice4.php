<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 4</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="exercice3.php">exercice 3</a></li>
            <li><a href="exercice5.php">exercice 5</a></li>
        </ul>
        <p>
            <?php

            // creation d'une fonction nommer condition avec deux parametre
            function condition($first, $second) {
                // si la variable first et plus grand que la seconde alor 
                if ($first > $second) {
                    // tu fait une variable local
                    $result = 'Le premier nombre est plus grand';
                    //sinon si la premiere variable est inferrieur a la second alor 
                } elseif ($first < $second) {
                    // tu fait une variable local
                    $result = 'Le premier nombre est plus petit';
                    //sinon
                } else {
                    // tu fait une variable local
                    $result = 'Les deux nombres sont identiques';
                }
                //retourne la variable local
                return $result;
            }

            // declaration de la variable contenant la fonction chameau et ce que contien les variables
            $concatenation = condition(3, 4);
            // qui affiche son contenu 
            echo $concatenation;
            ?>
        </p>
    </body>
</html>