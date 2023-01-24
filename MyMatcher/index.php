<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MyMatcher | Iniciar sesión</title>
	<link rel="icon" href="img/icon.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
	<script src="js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row mt-2">
			<div class="col mt-5">
				<img id="logo" src="img/main.png" alt="main" class="w-75">
			</div>
			<div class="col mt-5">
				<h1 class="mt-5">Iniciar sesión</h1>
				<form action="" method="POST">
					<div>
						<label class="form-label mt-5">Usuario</label>
						<input
							type="text" 
							class="form-control w-75" 
							pattern="[a-zA-Z0-9]{3,20}" 
							maxlength="20"
							id="user"
							name="user"
							required
						>
					</div>
					<div>
						<label class="form-label mt-5">Contraseña</label>
						<div class="input-group">
							<input 
								type="password" 
								class="form-control" 
								pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]){8,16}"
								maxlength="16"
								id="password" 
								name="password"
								required
							>
							<span class="input-group-text" id="box-eye">
								<i class="fa fa-eye"></i>
							</span>
						</div>
					</div>
					<button type="submit" id="boton" class="btn w-75 mt-5 mb-3">
						Iniciar sesión
					</button>
				</form>
				<p>
					¿No tienes una cuenta? <a style="text-decoration: none;"
						href="register.html">Regístrate</a>
				</p>
			</div>
		</div>
	</div>
	<footer class="text-center fixed-bottom">
		<p>&copy; 2023 MyMatcher from IES Pío Baroja</p>
	</footer>
</body>
</html>