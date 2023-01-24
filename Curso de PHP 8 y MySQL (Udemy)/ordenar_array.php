<?php

$meses = array(
  'Enero', 'Febrero', 'Marzo', 'Abril',
  'Mayo', 'Junio', 'Julio', 'Agosto',
  'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'

);

$numeros = array(1, 22, 23, 10, 9, 5, 70, 100, 20);

//sort($meses);
//rsort($meses);

//sort($numeros);
//rsort($numeros);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Meses del año</title>
  </head>
  <body>
    <h1>Meses del año</h1>
    <ul>
      <?php

      foreach ($numeros as $numero) {
        echo '<li>' . $numero . '</li>';
      }

      ?>
    </ul>
  </body>
</html>
