<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>MyMatcher | Iniciar sesión</title>
	<link rel="icon" href="img/icon.png">
	<link rel="stylesheet" href="css/master.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
	<script src="js/master.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>
<style media="screen">
textarea:focus, input:focus, input[type]:focus {
	border-color: #E9B0BF;
	box-shadow: 0 1px 1px #E9B0BF inset, 0 0 8px #E9B0BF;
}

textarea:focus, button:focus, button[type]:focus {
	border-color: #E9B0BF;
	box-shadow: 0 1px 1px #E9B0BF inset, 0 0 8px #E9B0BF;
}
</style>

<body style="background-color: #FFF6F5">
	<div class="container">
		<div class="row mt-2">
			<div class="col mt-5">
				<img id="logo" src="img/main.png" alt="main" class="w-75">
			</div>
			<div class="col mt-5">
				<h1 class="mt-5">Iniciar sesión</h1>
				<form class="mt-2" action="ServletForm" method="POST">

					<div>
						<label for="user" class="form-label mt-5">Usuario</label> <input
							type="text" class="form-control w-75" pattern="[a-zA-Z0-9]{3,20}" maxlength="20" required name="user">
					</div>

					<label for="password" class="form-label mt-5">Contraseña</label>
					<div class="input-group w-75">
						<input type="password" class="form-control" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]){8,16}" maxlength="16" required
							id="verPassword" aria-describedby="basic-addon" name="password">
						<span class="input-group-text caja" id="basic-addon"
							onclick="myFunction()"><i class="fa fa-eye"></i></span>
					</div>

					<button type="submit" id="boton" class="btn w-75 mt-5 mb-3">Iniciar
						sesión</button>
				</form>

				<p>
					¿No tienes una cuenta? <a style="text-decoration: none;"
						href="register.html">Regístrate</a>
				</p>

			</div>
		</div>
	</div>
	<footer class="text-center fixed-bottom">
		<p>&copy; 2022 MyMatcher from IES Pío Baroja</p>
	</footer>

	<%
	HttpSession sesion = request.getSession();
	
	if (sesion.getAttribute("objUser") != null) {
		
		sesion.removeAttribute("objUser");
	}
	%>

</body>

</html>

