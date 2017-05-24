<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Exo 6</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
        <li><a href="exercice5.php">exercice 5</a></li>
        <li><a href="exercice7.php">exercice 7</a></li>
        </ul>
        <p>
            <?php
            /**
             * Renseigner l'identité d'une personne.
             * @param string $name
             * @param string $surname
             * @param int $age
             * @return string
             */
            function getIdentity($name, $surname, $age) {
                return 'Bonjour ' . $name . ' ' . $surname . ', tu as ' . $age . ' ans.';
            }

            // referent au nom de la fonction pour aller chercher les variables pour leur assigner ce qu'il y a a l'interrieur
            echo getIdentity('Le Guilcher', 'Virginie', 33);
            ?>
        </p>
    </body>
</html>