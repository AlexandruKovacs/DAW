<?php

$errores = '';

if (isset($_POST['submit'])) {
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];


//VALIDACIÓN NOMBRE
  if (!empty($nombre)) {
    // $nombre = trim($nombre);
    // $nombre = htmlspecialchars($nombre);
    // $nombre = stripcslashes($nombre);

    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);

    echo "Tu nombre es: $nombre <br/>";
  } else {
    $errores .= 'Por favor, agrega un nombre <br/>';
  }

  
//VALIDACIÓN CORREO
  if (!empty($correo)) {
    $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
      $errores .= 'Por favor ingresa un correo válido <br/>';
    } else {
      echo "Tu correo es: $correo";
    }
    
    
  } else {
    $errores .= 'Por favor, agrega un correo';
  }

  
  
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formularios</title>
    <style type="text/css">
      
      .error {
        color:  red;
      }
    </style>
  </head>
  <body>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="correo" placeholder="Correo">

        <?php if(!empty($errores)): ?>
          <div class="error"> <?php echo $errores?> </div>
        <?php endif; ?>

        <input type="submit" value="Enviar" name="submit">
    </form>

  </body>
</html>
