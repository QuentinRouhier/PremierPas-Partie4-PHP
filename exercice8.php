<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exo 8</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
        <li><a href="exercice7.php">exercice 7</a></li>
        <li><a href="index.php">index</a></li>
        </ul>
        <p>
            <?php

            // declaration d'un variable avec 3 parametre 
            function addition($firstNumber = 18, $secondNumber = 62, $thirdNumber = 4650) {
                // addition des trois variables
                return $firstNumber + $secondNumber + $thirdNumber;
            }

            /* declaration de la variable addition qui prend la fonction addition en compte et en affectant des chiffre 
              au variabl mis en parametre */
            $addition = addition();
            //on affiche la variable addition 
            echo $addition;
            ?>
        </p>
    </body>
</html>