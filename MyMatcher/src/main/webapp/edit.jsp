<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>MyMatcher | Editar datos</title>
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

textarea:focus, select:focus, select[type]:focus {
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
                <a href="main.jsp"><img src="img/horizontal.png" alt="horizontal"
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

	<div class="container mt-2">

		<h1 class="mb-4">Editar datos</h1>
		<form class="" action="ServletForm" method="POST">
			<div class="row mb-3">
				<div class="col col-25">
					<label for="descripcion">A??ade una descripci??n sobre ti:</label>
					<textarea id="descripcion" name="descripcion" maxlength="300"
						class="w-100" rows="10" style="border-radius: 5px;"></textarea>
				</div>

				<div class="col col-25">
					<p>??Qu?? haces cuando est??s s??lo en casa?</p>
					<select class="form-select mt-2 mb-2 w-75 mx-auto" name="atributo1" type="text">
						<option value="" selected></option>
						<option value="Ver la tele">Ver la televisi??n</option>
						<option value="Escuchar m??sica">Escuchar m??sica</option>
						<option value="Echarme la siesta">Echarme la siesta</option>
						<option value="Usar Internet">Usar Internet</option>
						<option value="Hacer ejercicio">Hacer ejercicio</option>
						<option value="Leer">Leer</option>
						<option value="Cocinar">Cocinar</option>
						<option value=""></option>

					</select>

					<p>??Qu?? g??nero te gusta m??s?</p>
					<select class="form-select mt-2 mb-2 w-75 mx-auto" name="atributo2" type="text">
						<option value="" selected></option>
						<option value="Rock">Rock</option>
						<option value="Pop">Pop</option>
						<option value="Reggaeton">Reggaeton</option>
						<option value="Electr??nica">Electr??nica</option>
						<option value="Heavy Metal">Heavy Metal</option>

					</select>

					<p>??Qu?? haces cuando quedas con tus amigos?</p>
					<select class="form-select mt-2 mb-2 w-75 mx-auto" name="atributo3" type="text">
						<option value="" selected></option>
						<option value="Ir al cine">Ir al cine</option>
						<option value="Hablar">Hablar</option>
						<option value="Caminar">Caminar</option>
						<option value="Ir de compras">Ir de compras</option>
						<option value="Hacer deporte">Hacer deporte</option>

					</select>

					<p>??Qu?? red social usas con m??s frecuencia?</p>
					<select class="form-select mt-2 mb-2 w-75 mx-auto" name="atributo4" type="text">
						<option value="" selected></option>
						<option value="Facebook">Facebook</option>
						<option value="Instagram">Instagram</option>
						<option value="Twitter">Twitter</option>
						<option value="Snapchat">Snapchat</option>
						<option value="Whatsapp">Whatsapp</option>

					</select>

					<p>??C??mo te gusta vestirte?</p>
					<select class="form-select mt-2 mb-2 w-75 mx-auto" name="atributo5" type="text">
						<option value="" selected></option>
						<option value="Casual">Casual</option>
						<option value="A la moda">A la moda</option>
						<option value="Como a mi me guste">Como a mi me guste</option>
						<option value="Arreglado/a">Arreglado/a</option>
						<option value="Descuidado/a">Descuidado/a</option>

					</select>

				</div>
				<div class="col col-25">
					
					<p>??Cu??l es tu sue??o?</p>
					<select class="form-select mt-2 mb-2 w-75 mx-auto" name="atributo6" type="text">
						<option value="" selected></option>
						<option value="Ser rico">Ser rico</option>
						<option value="Ser famoso">Ser famoso</option>
						<option value="Tener salud">Tener salud</option>
						<option value="Tener amor">Tener amor</option>
						<option value="Viajar mucho">Viajar mucho</option>

					</select>
					
					<p>??Cu??l de estos animales te gusta m??s?</p>
					<select class="form-select mt-2 mb-2 w-75 mx-auto" name="atributo7" type="text">
						<option value="" selected></option>
						<option value="Perro">Perro</option>
						<option value="Gato">Gato</option>
						<option value="H??mster">H??mster</option>
						<option value="P??jaro">P??jaro</option>
						<option value="Pez">Pez</option>

					</select>

					<p>??Cual ser??a tu prototipo de pareja ideal en un futuro?</p>
					<select class="form-select mt-2 mb-2 w-75 mx-auto" name="atributo8" type="text">
						<option value="" selected></option>
						<option value="T??mido/a">T??mido/a</option>
						<option value="Travieso/a">Travieso/a</option>
						<option value="Rom??ntico/a">Rom??ntico/a</option>
						<option value="Flaco/a">Detallista</option>
						<option value="Buenorro/a">Buenorro/a</option>

					</select>
					
					<p>??Cu??l de estos platos te gusta m??s?</p>
					<select class="form-select mt-2 mb-2 w-75 mx-auto" name="atributo9" type="text">
						<option value="" selected></option>
						<option value="Br??coli">Br??coli</option>
						<option value="Patatas fritas">Patatas fritas</option>
						<option value="Filete de pollo">Filete de pollo</option>
						<option value="Guisantes">Guisantes</option>
						<option value="Costillas de ternera">Costillas de ternera</option>

					</select>

					<p>??Qu?? g??nero de pel??culas te gustan?</p>
					<select class="form-select mt-2 mb-2 w-75 mx-auto" name="atributo10" type="text">
						<option value="" selected></option>
						<option value="Comedia">Comedia</option>
						<option value="Miedo">Miedo</option>
						<option value="Rom??tica">Rom??ntica</option>
						<option value="Aventura">Aventura</option>
						<option value="Ciencia ficci??n">Ciencia ficci??n</option>

					</select>

				</div>

				<div class="col col-25">
					<p>??D??nde te gustar??a viajar?</p>
					<select class="form-select mt-2 mb-2 w-75 mx-auto" name="atributo11" type="text">
						<option value="" selected></option>
						<option value="Francia">Francia</option>
						<option value="Inglaterra">Inglaterra</option>
						<option value="Jap??n">Jap??n</option>
						<option value="India">India</option>
						<option value="Finlandia">Finlandia</option>

					</select>

					<p>??C??mo te describir??as mejor?</p>
					<select class="form-select mt-2 mb-2 w-75 mx-auto" name="atributo12" type="text">
						<option value="" selected></option>
						<option value="Ordenado y limpio">Ordenado y limpio</option>
						<option value="Desordenado y sucio">Desordenado y sucio</option>
						<option value="Casero">Casero</option>
						<option value="Fiestero">Fiestero</option>
						<option value="Cocinillas">Cocinillas</option>

					</select>

					<p>??Cu??l de estas asiganturas odiabas en el colegio?</p>
					<select class="form-select mt-2 mb-2 w-75 mx-auto" name="atributo13" type="text">
						<option value="" selected></option>
						<option value="Ingl??s">Ingl??s</option>
						<option value="Matem??ticas">Matem??ticas</option>
						<option value="Historia">Historia</option>
						<option value="Educaci??n F??sica">Educaci??n F??sica</option>
						<option value="M??sica">M??sica</option>

					</select>

					<p>??Que superpoder tendr??as?</p>
					<select class="form-select mt-2 mb-2 w-75 mx-auto" name="atributo14" type="text">
						<option value="" selected></option>
						<option value="Leer mentes">Leer mentes</option>
						<option value="Viajar en el tiempo">Viajar en el tiempo</option>
						<option value="Volar">Volar</option>
						<option value="Volver a ver a tu ser querido fallecido">Volver a ver a tu ser querido fallecido</option>
						<option value="Ser el/la m??s listo/a">Ser el/la m??s listo/a</option>

					</select>

					<p>??C??mo te ves en el futuro?</p>
					<select class="form-select mt-2 mb-2 w-75 mx-auto" name="atributo15" type="text">
						<option value="" selected></option>
						<option value="Debajo de un puente">Debajo de un puente</option>
						<option value="En una mansi??n">En una mansi??n</option>
						<option value="En un pueblo">En un pueblo</option>
						<option value="En otro pa??s">En otro pa??s</option>
						<option value="Con muchos hijos">Con muchos hijos</option>

					</select>

				</div>
			</div>
			
			<div class="d-flex justify-content-end me-4">
				<a href="main.jsp" id="boton" class="btn m-1">Volver</a>
				<button type="submit" id="boton" class="btn m-1">Aplicar cambios</button>
			</div>
		</form>
	</div>
	<%
	HttpSession misesion = request.getSession();
	String user = (String) misesion.getAttribute("user");
	%>
	<footer class="text-center fixed-bottom">
		<p>&copy; 2022 MyMatcher from IES P??o Baroja</p>
	</footer>
</body>

</html>
