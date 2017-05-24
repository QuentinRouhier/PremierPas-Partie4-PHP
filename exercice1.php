<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exo 1</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="exercice2.php">exercice 2</a></li>
        </ul>
        <p>
            <?php

            // declaration d'un fonction nommer boolean
            function boolean() {
                // cette fonction return true
                return true;
            }

            // cette variable va chercher la fonction 
            $calcul = boolean();
            // pour pouvoir l'afficher dans ce echo
            echo $calcul;
            ?>
        </p>
    </body>
</html>