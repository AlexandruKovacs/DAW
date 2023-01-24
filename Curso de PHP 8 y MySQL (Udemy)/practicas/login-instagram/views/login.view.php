<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Iniciar sesión | Alexandru Kovacs</title>
	<link rel="icon" href="css/php.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="https://use.fontawesome.com/7cdd7e6bf8.js"></script>
</head>
<body>
    <section class="forms-section">
        <h1 class="section-title">Formulario Animado</h1>
            <div class="forms">
                <div class="form-wrapper is-active">
                <button type="button" class="switcher switcher-login">
                    Iniciar sesión
                    <span class="underline"></span>
                </button>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="form form-login" method="post">
                        <fieldset>
                            <div class="input-block">
                                <label for="login-email">Usuario</label>
                                <input id="login-email" type="text" required>
                            </div>
                            <div class="input-block">
                                <label for="login-password">Contraseña</label>
                                <input id="login-password" type="password" required>
                            </div>
                        </fieldset>

                        <?php if(!empty($errores)): ?>
                            <div class="error">
                                <p>
                                    <?php echo $errores; ?>
                                </p>
                            </div>
                        <?php endif; ?>

                        <button type="submit" class="btn-login" onclick="login.submit()">Entrar</button>
                    </form>
                </div>
                <div class="form-wrapper">
                    <button type="button" class="switcher switcher-signup">
                        Regístrate
                        <span class="underline"></span>
                    </button>
                    <form class="form form-signup">
                        <fieldset>
                        <legend>Please, enter your email, password and password confirmation for sign up.</legend>
                        <div class="input-block">
                            <label for="signup-email">Usuario</label>
                            <input id="signup-email" type="text" required>
                        </div>
                        <div class="input-block">
                            <label for="signup-password">Contraseña</label>
                            <input id="signup-password" type="password" required>
                        </div>
                        <div class="input-block">
                            <label for="signup-password-confirm">Confirmar contraseña</label>
                            <input id="signup-password-confirm" type="password" required>
                        </div>
                        </fieldset>

                        <?php if(!empty($errores)): ?>
                            <div class="error">
                                <p>
                                    <?php echo $errores; ?>
                                </p>
                            </div>
                        <?php endif; ?>
                        
                        <button type="submit" class="btn-signup" onclick="login.submit()">Registro</button>
                    </form>
                </div>
            </section>
        <script  src="js/main.js"></script>
</body>
</html>