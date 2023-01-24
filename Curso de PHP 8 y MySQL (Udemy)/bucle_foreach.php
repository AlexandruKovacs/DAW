<?php

$meses = array(
  'Enero', 'Febrero', 'Marzo', 'Abril',
  'Mayo', 'Junio', 'Julio', 'Agosto',
  'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'

);

$alex = array('Teléfono' => 123456789, 'Edad' => 22, 'País' => 'Rumanía');

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bucle forEach</title>
  </head>
  <body>
    <ul>
      <?php

      // foreach ($meses as $mes) {
      //   echo '<li>' . $mes . '</li>';
      // }

      foreach ($alex as $dato => $valor) {
        echo '<li>' .$dato . ' : ' . $valor . '</li>';
      }

      ?>
    </ul>
  </body>
</html>
