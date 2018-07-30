<?php
// defintion de la variable start initialiser a 1
  $start = 1;
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>ex5</title>
  </head>
  <body>
    <p>
      <?php
      // definition de la boucle grace a while,
      // on reprend la variable et on lu indique que tant qu'elle est inférieur ou egal a  on affiche le message on y est presque
      // pour l'incrémentation du résultat, on reprend la variable start plus on l'incremente
        while ($start <= 15) {
          echo 'On y est presque';
          $start++;

        }
       ?>
    </p>
  </body>
</html>
