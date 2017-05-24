<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>exo 7</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="exercice6.php">exercice 6</a></li>
            <li><a href="exercice8.php">exercice 8</a></li>
        </ul>
        <p>
            <?php

            // creation d'un fonction nommer identity avec deux parametre 
            function identity($genre, $age) {
                // si le genre et un homme et que l'age est superieur ou egale a 18 alor
                if ($genre == 'homme' && $age >= 18) {
                    // tu m'affiche le texte si dessous
                    $reponse = 'Vous êtes un homme et vous êtes majeur';
                    //sinon si tu es un homme et que tu n'a pas 18 ans alors
                } elseif ($genre == 'homme' && $age < 18) {
                    // tu m'affiche le tete ci dessous
                    $reponse = 'Vous êtes un homme et vous êtes mineur';
                    //sinon si tu es une femme et que tu a 18ans ou plus alors
                } elseif ($genre == 'femme' && $age >= 18) {
                    //tu affiche le texte ci dessous 
                    $reponse = 'Vous êtes une femme et vous êtes majeur';
                    //sinon 
                } else {
                    // tu affiche le texte ci dessous
                    $reponse = 'Vous êtes une femme et vous êtes mineur';
                }
                // return l'integraliter de la fonction
                return $reponse;
            }

            /* declaration de la variable identity, a l'interrieur on declarre la fonction cree precedement 
              et assigne aux paramettres. */
            $identity = identity('femme', 33);
            // on affiche la variable
            echo $identity;
            ?>
        </p>
    </body>
</html>