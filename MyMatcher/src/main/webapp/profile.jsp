<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ page import="com.model.Usuarios"%>
<%@ page import="com.ies.baroja.Controller"%>
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
<meta charset="UTF-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>MyMatcher | Mi perfil</title>
<link rel="icon" href="img/icon.png">
<link rel="stylesheet" href="css/master.css">
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
	rel="stylesheet" crossorigin="anonymous">
<link
	href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap"
	rel="stylesheet">
<script src="js/master.js"></script>
<script
	src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
	crossorigin="anonymous"></script>
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

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-sm-1"></div>
			<div class="col-md-4 col-sm-12">
				<a href="main.jsp"><img src="img/horizontal.png"
					alt="horizontal" class="w-75 mx-auto ms-5 mt-3"></a>
			</div>
			<div class="col-md-4 col-sm-12 pe-5">
				<p class="text-end mt-5">
					Bienvenido/a, ${sessionScope.objUser.user} <a href="index.jsp">
						<button type="button" class="btn" id="salir">
							<i class="fa-solid fa-right-from-bracket"></i>
						</button>
					</a>
				</p>
			</div>
		</div>
	</div>
	<div class="container mt-5">

		<h1 class="mb-5">Mi perfil</h1>

		<div class="row">
			<h3>Datos personales</h3>
			<div class=" w-50 text-center bg-white rounded-3 m-3 p-3">

				<%
				HttpSession sesion = request.getSession();
				Usuarios objUsu = null;

				if (sesion.getAttribute("objUser") != null) {

					objUsu = (Usuarios) sesion.getAttribute("objUser");

					out.println("<p>" + "<b>NOMBRE: </b>" + objUsu.getNombre() + "</p>");
					out.println("<p>" + "<b>APELLIDOS: </b>" + objUsu.getApellidos() + "</p>");
					out.println("<p>" + "<b>FECHA DE NACIMIENTO: </b>" + objUsu.getFechanac() + "</p>");
					out.println("<p>" + "<b>CORREO ELECTRÓNICO: </b>" + objUsu.getCorreo() + "</p>");

					if (objUsu.getDescripcion() != null) {

						out.println("<p>" + "<b>DESCRIPCIÓN: </b>" + objUsu.getDescripcion() + "</p>");

					} else {

						out.println("<p>" + "<b>DESCRIPCIÓN: </b>No hay descripción</p>");

					}

				} else {

					out.println("<p>" + "NO HAY DATOS" + "</p>");
				}
				%>
			</div>
			<div class="row">
			<h3>Atributos</h3>
				<div class="col bg-white rounded-3 m-3 p-3">
                
					<%
					if (objUsu.getAtributo1() != null && objUsu.getAtributo2() != null && objUsu.getAtributo3() != null
							&& objUsu.getAtributo4() != null && objUsu.getAtributo5() != null) {

						out.println("<p><b>¿Qué haces cuando estás sólo en casa? </b><br>" + objUsu.getAtributo1() + "</p>");
						out.println("<p><b>¿Qué género te gusta más? </b><br>" + objUsu.getAtributo2() + "</p>");
						out.println("<p><b>¿Qué haces cuando quedas con tus amigos? </b><br>" + objUsu.getAtributo3() + "</p>");
						out.println("<p><b>¿Qué red social usas con más frecuencia? </b><br>" + objUsu.getAtributo4() + "</p>");
						out.println("<p><b>¿Cómo te gusta vestirte? </b><br>" + objUsu.getAtributo5() + "</p>");

					} else {

						out.println("<p>NO HAY DATOS</p>");
					}
					%>
				</div>
				<div class="col bg-white rounded-3 m-3 p-3">
					<%
					if (objUsu.getAtributo6() != null && objUsu.getAtributo7() != null && objUsu.getAtributo8() != null
							&& objUsu.getAtributo9() != null && objUsu.getAtributo10() != null) {

						out.println("<p><b>¿Cuál es tu sueño? </b><br>" + objUsu.getAtributo6() + "</p>");
						out.println("<p><b>¿Cuál de estos animales te gusta más? </b><br>" + objUsu.getAtributo7() + "</p>");
						out.println("<p><b>¿Cual sería tu prototipo de pareja ideal en un futuro? </b><br>" + objUsu.getAtributo8() + "</p>");
						out.println("<p><b>¿Cuál de estos platos te gusta más? </b><br>" + objUsu.getAtributo9() + "</p>");
						out.println("<p><b>¿Qué género de películas te gustan? </b><br>" + objUsu.getAtributo10() + "</p>");

					} else {

						out.println("<p>" + "NO HAY DATOS" + "</p>");
					}
					%>
				</div>

				<div class="col bg-white rounded-3 m-3 p-3">

					<%
					if (objUsu.getAtributo11() != null && objUsu.getAtributo12() != null && objUsu.getAtributo13() != null
							&& objUsu.getAtributo14() != null && objUsu.getAtributo15() != null) {

						out.println("<p><b>¿Dónde te gustaría viajar? </b><br>" + objUsu.getAtributo11() + "</p>");
						out.println("<p><b>¿Cómo te describirías mejor? </b><br>" + objUsu.getAtributo12() + "</p>");
						out.println("<p><b>¿Cuál de estas asiganturas odiabas en el colegio? </b><br>" + objUsu.getAtributo13() + "</p>");
						out.println("<p><b>¿Que superpoder tendrías? </b><br>" + objUsu.getAtributo14() + "</p>");
						out.println("<p><b>¿Cómo te ves en el futuro? </b><br>" + objUsu.getAtributo15() + "</p>");

					} else {

						out.println("<p>" + "NO HAY DATOS" + "</p>");
					}
					%>
				</div>
			</div>
		</div>
	</div>
	<div class="d-flex flex-row-reverse">
		<a href="main.jsp">
			<button type="button" class="btn mt-5" id="salir">
				<b>Volver</b>
			</button>
		</a>
	</div>

	<footer class="text-center fixed-bottom">
		<p>&copy; 2022 MyMatcher from IES Pío Baroja</p>
	</footer>
	<%
	HttpSession misesion = request.getSession();
	String user = (String) misesion.getAttribute("user");
	%>

</body>

</html>