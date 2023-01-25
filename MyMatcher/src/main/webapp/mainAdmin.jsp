<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ page import="com.model.Usuarios"%>
<%@ page import="com.ies.baroja.Controller"%>
<%@ page import="java.util.LinkedList"%>
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
<meta charset="UTF-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>MyMatcher | Administrador</title>
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
            <div class="col-md-4 col-sm-1">
            </div>
            <div class="col-md-4 col-sm-12">
                <a href="mainAdmin.jsp"><img src="img/horizontal.png" alt="horizontal"
                class="w-75 mx-auto ms-5 mt-3"></a>
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
		<h1 class="mb-4">Lista de usuarios</h1>
		<table class="table table-striped mb-5">
			<thead class="table-dark">
				<tr>
					<th>Usuario</th>
					<th>Contraseña</th>
					<th>Nombre</th>
					<th>Apellidos</th>
					<th>Fecha de nacimiento</th>
					<th>Correo electrónico</th>
				</tr>
			</thead>
			<tbody>
				<%
					//JAVA CODE
					LinkedList<Usuarios> lista = Controller.getUsuarios();
					
					for (int i=0 ; i < lista.size(); i++) {
						
						if (i%2==0) {
							out.println("<tr class=''>");
						}else {
							out.println("<tr class=''>");
							
						}
						
						out.println("<td>"+lista.get(i).getUser()+"</td>");
						out.println("<td>"+lista.get(i).getPassword()+"</td>");
						out.println("<td>"+lista.get(i).getNombre()+"</td>");
						out.println("<td>"+lista.get(i).getApellidos()+"</td>");
						out.println("<td>"+lista.get(i).getFechanac()+"</td>");
						out.println("<td>"+lista.get(i).getCorreo()+"</td>");
						out.println("</tr>");
						
					}
				%>

			</tbody>
		</table>
	</div>



	<footer class="text-center">
		<p>&copy; 2022 MyMatcher from IES Pío Baroja</p>
	</footer>
	<%
	HttpSession misesion = request.getSession();
	String user = (String) misesion.getAttribute("user");
	%>
</body>

</html>
