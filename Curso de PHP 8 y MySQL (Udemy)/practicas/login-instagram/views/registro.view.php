<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Regístrate | Alexandru Kovacs</title>
	<link rel="icon" href="css/php.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="https://use.fontawesome.com/7cdd7e6bf8.js"></script>
</head>
<body>
    <div class="contenedor">
        <h1 class="titulo">Regístrate</h1>
        <hr class="border">

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="formulario" name="login">
            <div class="form-group">
                <i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
            </div>

            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password" placeholder="Contraseña">
            </div>

            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i><input type="password" name="password2" class="password_btn" placeholder="Repetir contraseña">
                <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
            </div>

            <?php if(!empty($errores)): ?>
                <div class="error">
                    <ul>
                        <?php echo $errores; ?>
                    </ul>
                </div>
            <?php endif; ?>
    
        </form>

        <p class="texto-registrate">
		¿Ya tienes una cuenta? <a href="login.php">Iniciar sesión</a>
		</p>
    </div>
</body>
</html>