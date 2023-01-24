package com.ies.baroja;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import com.model.Usuarios;

/**
 * Servlet implementation class ServletForm
 */
@WebServlet("/ServletForm")
public class ServletForm extends HttpServlet {
	private static final long serialVersionUID = 1L;

	/**
	 * @see HttpServlet#HttpServlet()
	 */
	public ServletForm() {
		super();
		// TODO Auto-generated constructor stub
	}

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse
	 *      response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		// TODO Auto-generated method stub
		response.getWriter().append("Served at: ").append(request.getContextPath());
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse
	 *      response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {

		try {

			response.setContentType("text/html;charset:UTF-8");
			request.setCharacterEncoding("UTF-8");

			if (request.getParameter("user") != null) {

				String sUser = request.getParameter("user");
				System.out.println(" user=" + sUser);
				if (sUser.equals("admin")) {
					loginAdmin(request, response);
				}
				else {
					loginUsuario(request, response);
				}

			} else if (request.getParameter("nombre") != null) {

				insertarUsuario(request, response);

			} else if (request.getParameter("atributo1") != null) {

				actualizarAtributos(request, response);

			} else {

				mostrarError(response);

			}

		} catch (

		Exception ex) {

			System.out.println("Error en servlet");
			ex.printStackTrace();
			mostrarError(response);
		}
	}

	private static void loginUsuario(HttpServletRequest request, HttpServletResponse response) throws Exception {

		HttpSession sesion = request.getSession();
		String sUser = request.getParameter("user");
		String sPwd = request.getParameter("password");

		Usuarios objUsu = Controller.getUsuario(sUser);
		System.out.println("Usuario de BBDD=" + objUsu);

		if (sPwd.equals(objUsu.getPassword()) && sesion.getAttribute("user") == null) {

			sesion.setAttribute("objUser", objUsu);
			response.sendRedirect("main.jsp");

		} else {

			sesion.removeAttribute("user");
			mostrarError(response);

		}
	}

	private static void loginAdmin(HttpServletRequest request, HttpServletResponse response) throws Exception {

		HttpSession sesion = request.getSession();
		String sUser = request.getParameter("user");
		String sPwd = request.getParameter("password");

		Usuarios objUsu = Controller.getUsuario(sUser);
		System.out.println("Usuario de BBDD=" + objUsu);

		if (sPwd.equals(objUsu.getPassword()) && sesion.getAttribute("user") == null) {

			sesion.setAttribute("objUser", objUsu);
			response.sendRedirect("mainAdmin.jsp");

		} else {

			sesion.removeAttribute("user");
			mostrarError(response);

		}
	}

	private static void insertarUsuario(HttpServletRequest request, HttpServletResponse response) throws Exception {

		/** 1- recogida de datos */
		Usuarios usuario = new Usuarios(request.getParameter("userNuevo"), request.getParameter("password"),
				request.getParameter("nombre"), request.getParameter("apellidos"), request.getParameter("fechanac"),
				request.getParameter("correo"), request.getParameter("descripcion"), request.getParameter("atributo1"),
				request.getParameter("atributo2"), request.getParameter("atributo3"), request.getParameter("atributo4"),
				request.getParameter("atributo5"), request.getParameter("atributo6"), request.getParameter("atributo7"),
				request.getParameter("atributo8"), request.getParameter("atributo9"),
				request.getParameter("atributo10"), request.getParameter("atributo11"),
				request.getParameter("atributo12"), request.getParameter("atributo13"),
				request.getParameter("atributo14"), request.getParameter("atributo15"));

		/** 2- Insertar usuario en la base de datos */
		int iRes = Controller.insertarUsuario(usuario);

		/** 3- Mostrar resultado por pantalla */
		if (iRes == 1) {

			response.setContentType("text/html");
			PrintWriter out = response.getWriter();
			out.println("<!DOCTYPE html>\r\n" + "<html lang=\"es\" dir=\"ltr\">\r\n" + "\r\n" + "<head>\r\n"
					+ "  <meta charset=\"utf-8\">\r\n"
					+ "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">\r\n"
					+ "  <title>MyMatcher | Éxito</title>\r\n" + "  <link rel=\"icon\" href=\"img/icon.png\">\r\n"
					+ "  <link rel=\"stylesheet\" href=\"css/master.css\">\r\n"
					+ "  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css\">\r\n"
					+ "  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">\r\n"
					+ "  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>\r\n"
					+ "  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" crossorigin=\"anonymous\">\r\n"
					+ "  <link href=\"https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap\" rel=\"stylesheet\">\r\n"
					+ "  <script src=\"js/master.js\"></script>\r\n"
					+ "  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>\r\n"
					+ "</head>\r\n" + "<style media=\"screen\">\r\n" + "  textarea:focus,\r\n" + "  input:focus,\r\n"
					+ "  input[type]:focus {\r\n" + "    border-color: #E9B0BF;\r\n"
					+ "    box-shadow: 0 1px 1px #E9B0BF inset, 0 0 8px #E9B0BF;\r\n" + "  }\r\n" + "\r\n"
					+ "  textarea:focus,\r\n" + "  button:focus,\r\n" + "  button[type]:focus {\r\n"
					+ "    border-color: #E9B0BF;\r\n" + "    box-shadow: 0 1px 1px #E9B0BF inset, 0 0 8px #E9B0BF;\r\n"
					+ "  }\r\n" + "</style>\r\n" + "\r\n" + "<body style=\"background-color: #FFF6F5\">\r\n" + "\r\n"
					+ "  <div class=\"container\">\r\n" + "    <div class=\"row mt-2\">\r\n"
					+ "      <div class=\"col mt-5\">\r\n"
					+ "        <img id=\"logo\" src=\"img/main.png\" alt=\"main\" class=\"w-75\">\r\n"
					+ "      </div>\r\n"
					+ "      <div class=\"col mt-5 align-items-center justify-content-center text-center\" >\r\n"
					+ "\r\n" + "        <p class=\"mt-5\">Usuario registrado correctamente.</p>"
					+ "			<img src=\"img/exito.png\" alt=\"exito\" id=\"registerExito\">\r\n" + "        <br>\r\n"
					+ "        <a href=\"index.jsp\" id=\"boton\" class=\"btn mt-5\"><button type=\"button\" class=\"btn\">Ir a Iniciar sesión</button></a>\r\n"
					+ "\r\n" + "      </div>\r\n" + "    </div>\r\n" + "  </div>\r\n"
					+ "  <footer class=\"text-center fixed-bottom\">\r\n"
					+ "    <p>&copy; 2022 MyMatcher from IES Pío Baroja</p>\r\n" + "  </footer>\r\n" + "</body>\r\n"
					+ "\r\n" + "</html>\r\n" + "");
			out.close();

		} else {

			response.setContentType("text/html");
			PrintWriter out = response.getWriter();
			out.println("<!DOCTYPE html>\r\n" + "<html lang=\"es\" dir=\"ltr\">\r\n" + "\r\n" + "<head>\r\n"
					+ "  <meta charset=\"utf-8\">\r\n"
					+ "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">\r\n"
					+ "  <title>MyMatcher | Error</title>\r\n" + "  <link rel=\"icon\" href=\"img/icon.png\">\r\n"
					+ "  <link rel=\"stylesheet\" href=\"css/master.css\">\r\n"
					+ "  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css\">\r\n"
					+ "  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">\r\n"
					+ "  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>\r\n"
					+ "  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" crossorigin=\"anonymous\">\r\n"
					+ "  <link href=\"https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap\" rel=\"stylesheet\">\r\n"
					+ "  <script src=\"js/master.js\"></script>\r\n"
					+ "  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>\r\n"
					+ "</head>\r\n" + "<style media=\"screen\">\r\n" + "  textarea:focus,\r\n" + "  input:focus,\r\n"
					+ "  input[type]:focus {\r\n" + "    border-color: #E9B0BF;\r\n"
					+ "    box-shadow: 0 1px 1px #E9B0BF inset, 0 0 8px #E9B0BF;\r\n" + "  }\r\n" + "\r\n"
					+ "  textarea:focus,\r\n" + "  button:focus,\r\n" + "  button[type]:focus {\r\n"
					+ "    border-color: #E9B0BF;\r\n" + "    box-shadow: 0 1px 1px #E9B0BF inset, 0 0 8px #E9B0BF;\r\n"
					+ "  }\r\n" + "</style>\r\n" + "\r\n" + "<body style=\"background-color: #FFF6F5\">\r\n" + "\r\n"
					+ "  <div class=\"container\">\r\n" + "    <div class=\"row mt-2\">\r\n"
					+ "      <div class=\"col mt-5\">\r\n"
					+ "        <img id=\"logo\" src=\"img/main.png\" alt=\"main\" class=\"w-75\">\r\n"
					+ "      </div>\r\n"
					+ "      <div class=\"col mt-5 align-items-center justify-content-center text-center\" >\r\n"
					+ "\r\n" + "        <p class=\"mt-5\">¡UPS! Ese usuario ya existe.</p>\r\n"
					+ "			<img src=\"img/error.png\" alt=\"error\">\r\n" + "        <br>\r\n"
					+ "        <a href=\"register.html\" id=\"boton\" class=\"btn mt-5\"><button type=\"button\" class=\"btn\">Volver a intentar</button></a>\r\n"
					+ "\r\n" + "      </div>\r\n" + "    </div>\r\n" + "  </div>\r\n"
					+ "  <footer class=\"text-center fixed-bottom\">\r\n"
					+ "    <p>&copy; 2022 MyMatcher from IES Pío Baroja</p>\r\n" + "  </footer>\r\n" + "</body>\r\n"
					+ "\r\n" + "</html>\r\n" + "");
			out.close();

		}
	}

	private static void actualizarAtributos(HttpServletRequest request, HttpServletResponse response) throws Exception {

		/** 1- recogida de datos */
		Usuarios usuario = new Usuarios(request.getParameter("user"), request.getParameter("password"),
				request.getParameter("nombre"), request.getParameter("apellidos"), request.getParameter("fechanac"),
				request.getParameter("correo"), request.getParameter("descripcion"), request.getParameter("atributo1"),
				request.getParameter("atributo2"), request.getParameter("atributo3"), request.getParameter("atributo4"),
				request.getParameter("atributo5"), request.getParameter("atributo6"), request.getParameter("atributo7"),
				request.getParameter("atributo8"), request.getParameter("atributo9"),
				request.getParameter("atributo10"), request.getParameter("atributo11"),
				request.getParameter("atributo12"), request.getParameter("atributo13"),
				request.getParameter("atributo14"), request.getParameter("atributo15"));

		// recupero el usuario de la sesion
		HttpSession sesion = request.getSession();
		Usuarios objUsu = (Usuarios) sesion.getAttribute("objUser");

		/** 2- Insertar usuarios en la base de datos */
		boolean bRes = Controller.actualizarAtributos(objUsu.getUser(), usuario);

		/** 3- Mostrar resultado por pantalla */
		if (bRes) {
			// creamos un nuevo objeto usuario con los nuevos atributos
			Usuarios objUsu2 = Controller.getUsuario(objUsu.getUser());

			// cambiamos los atributos del objUser a los nuevos del objUsu2
			sesion.setAttribute("objUser", objUsu2);

			response.setContentType("text/html");
			PrintWriter out = response.getWriter();
			out.println("<!DOCTYPE html>\r\n" + "<html lang=\"es\" dir=\"ltr\">\r\n" + "\r\n" + "<head>\r\n"
					+ "  <meta charset=\"utf-8\">\r\n"
					+ "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">\r\n"
					+ "  <title>MyMatcher | Éxito</title>\r\n" + "  <link rel=\"icon\" href=\"img/icon.png\">\r\n"
					+ "  <link rel=\"stylesheet\" href=\"css/master.css\">\r\n"
					+ "  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css\">\r\n"
					+ "  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">\r\n"
					+ "  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>\r\n"
					+ "  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" crossorigin=\"anonymous\">\r\n"
					+ "  <link href=\"https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap\" rel=\"stylesheet\">\r\n"
					+ "  <script src=\"js/master.js\"></script>\r\n"
					+ "  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>\r\n"
					+ "</head>\r\n" + "<style media=\"screen\">\r\n" + "  textarea:focus,\r\n" + "  input:focus,\r\n"
					+ "  input[type]:focus {\r\n" + "    border-color: #E9B0BF;\r\n"
					+ "    box-shadow: 0 1px 1px #E9B0BF inset, 0 0 8px #E9B0BF;\r\n" + "  }\r\n" + "\r\n"
					+ "  textarea:focus,\r\n" + "  button:focus,\r\n" + "  button[type]:focus {\r\n"
					+ "    border-color: #E9B0BF;\r\n" + "    box-shadow: 0 1px 1px #E9B0BF inset, 0 0 8px #E9B0BF;\r\n"
					+ "  }\r\n" + "</style>\r\n" + "\r\n" + "<body style=\"background-color: #FFF6F5\">\r\n" + "\r\n"
					+ "  <div class=\"container\">\r\n" + "    <div class=\"row mt-2\">\r\n"
					+ "      <div class=\"col mt-5\">\r\n"
					+ "        <img id=\"logo\" src=\"img/main.png\" alt=\"main\" class=\"w-75\">\r\n"
					+ "      </div>\r\n"
					+ "      <div class=\"col mt-5 align-items-center justify-content-center text-center\" >\r\n"
					+ "\r\n" + "        <p class=\"mt-5\">Usuario actualizado correctamente.</p>"
					+ "			<img src=\"img/exito.png\" alt=\"exito\" id=\"registerExito\">\r\n" + "        <br>\r\n"
					+ "        <a href=\"main.jsp\" id=\"boton\" class=\"btn mt-5\"><button type=\"button\" class=\"btn\">Ir al menú principal</button></a>\r\n"
					+ "\r\n" + "      </div>\r\n" + "    </div>\r\n" + "  </div>\r\n"
					+ "  <footer class=\"text-center fixed-bottom\">\r\n"
					+ "    <p>&copy; 2022 MyMatcher from IES Pío Baroja</p>\r\n" + "  </footer>\r\n" + "</body>\r\n"
					+ "\r\n" + "</html>\r\n" + "");
			out.close();

		} else {

			response.setContentType("text/html");
			PrintWriter out = response.getWriter();
			out.println("<!DOCTYPE html>\r\n" + "<html lang=\"es\" dir=\"ltr\">\r\n" + "\r\n" + "<head>\r\n"
					+ "  <meta charset=\"utf-8\">\r\n"
					+ "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">\r\n"
					+ "  <title>MyMatcher | Error</title>\r\n" + "  <link rel=\"icon\" href=\"img/icon.png\">\r\n"
					+ "  <link rel=\"stylesheet\" href=\"css/master.css\">\r\n"
					+ "  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css\">\r\n"
					+ "  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">\r\n"
					+ "  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>\r\n"
					+ "  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" crossorigin=\"anonymous\">\r\n"
					+ "  <link href=\"https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap\" rel=\"stylesheet\">\r\n"
					+ "  <script src=\"js/master.js\"></script>\r\n"
					+ "  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>\r\n"
					+ "</head>\r\n" + "<style media=\"screen\">\r\n" + "  textarea:focus,\r\n" + "  input:focus,\r\n"
					+ "  input[type]:focus {\r\n" + "    border-color: #E9B0BF;\r\n"
					+ "    box-shadow: 0 1px 1px #E9B0BF inset, 0 0 8px #E9B0BF;\r\n" + "  }\r\n" + "\r\n"
					+ "  textarea:focus,\r\n" + "  button:focus,\r\n" + "  button[type]:focus {\r\n"
					+ "    border-color: #E9B0BF;\r\n" + "    box-shadow: 0 1px 1px #E9B0BF inset, 0 0 8px #E9B0BF;\r\n"
					+ "  }\r\n" + "</style>\r\n" + "\r\n" + "<body style=\"background-color: #FFF6F5\">\r\n" + "\r\n"
					+ "  <div class=\"container\">\r\n" + "    <div class=\"row mt-2\">\r\n"
					+ "      <div class=\"col mt-5\">\r\n"
					+ "        <img id=\"logo\" src=\"img/main.png\" alt=\"main\" class=\"w-75\">\r\n"
					+ "      </div>\r\n"
					+ "      <div class=\"col mt-5 align-items-center justify-content-center text-center\" >\r\n"
					+ "\r\n" + "        <p class=\"mt-5\">¡UPS! Error al actualizar el usuario.</p>\r\n"
					+ "			<img src=\"img/error.png\" alt=\"error\">\r\n" + "        <br>\r\n"
					+ "        <a href=\"main.jsp\" id=\"boton\" class=\"btn mt-5\"><button type=\"button\" class=\"btn\">Volver a intentar</button></a>\r\n"
					+ "\r\n" + "      </div>\r\n" + "    </div>\r\n" + "  </div>\r\n"
					+ "  <footer class=\"text-center fixed-bottom\">\r\n"
					+ "    <p>&copy; 2022 MyMatcher from IES Pío Baroja</p>\r\n" + "  </footer>\r\n" + "</body>\r\n"
					+ "\r\n" + "</html>\r\n" + "");
			out.close();

		}
	}

	private static void mostrarError(HttpServletResponse response) throws IOException {
		response.setContentType("text/html");
		PrintWriter out = response.getWriter();
		out.println("<!DOCTYPE html>\r\n" + "<html lang=\"es\" dir=\"ltr\">\r\n" + "\r\n" + "<head>\r\n"
				+ "  <meta charset=\"utf-8\">\r\n"
				+ "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">\r\n"
				+ "  <title>MyMatcher | Error</title>\r\n" + "  <link rel=\"icon\" href=\"img/icon.png\">\r\n"
				+ "  <link rel=\"stylesheet\" href=\"css/master.css\">\r\n"
				+ "  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css\">\r\n"
				+ "  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">\r\n"
				+ "  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>\r\n"
				+ "  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" crossorigin=\"anonymous\">\r\n"
				+ "  <link href=\"https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap\" rel=\"stylesheet\">\r\n"
				+ "  <script src=\"js/master.js\"></script>\r\n"
				+ "  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>\r\n"
				+ "</head>\r\n" + "<style media=\"screen\">\r\n" + "  textarea:focus,\r\n" + "  input:focus,\r\n"
				+ "  input[type]:focus {\r\n" + "    border-color: #E9B0BF;\r\n"
				+ "    box-shadow: 0 1px 1px #E9B0BF inset, 0 0 8px #E9B0BF;\r\n" + "  }\r\n" + "\r\n"
				+ "  textarea:focus,\r\n" + "  button:focus,\r\n" + "  button[type]:focus {\r\n"
				+ "    border-color: #E9B0BF;\r\n" + "    box-shadow: 0 1px 1px #E9B0BF inset, 0 0 8px #E9B0BF;\r\n"
				+ "  }\r\n" + "</style>\r\n" + "\r\n" + "<body style=\"background-color: #FFF6F5\">\r\n" + "\r\n"
				+ "  <div class=\"container\">\r\n" + "    <div class=\"row mt-2\">\r\n"
				+ "      <div class=\"col mt-5\">\r\n"
				+ "        <img id=\"logo\" src=\"img/main.png\" alt=\"main\" class=\"w-75\">\r\n" + "      </div>\r\n"
				+ "      <div class=\"col mt-5 align-items-center justify-content-center text-center\" >\r\n" + "\r\n"
				+ "        <p class=\"mt-5\">¡UPS! Ha ocurrido un error inesperado.</p>"
				+ "			<img src=\"img/error.png\" alt=\"error\">\r\n" + "        <br>\r\n"
				+ "        <a href=\"index.jsp\" id=\"boton\" class=\"btn mt-5\"><button type=\"button\" class=\"btn\">Volver a intentar</button></a>\r\n"
				+ "\r\n" + "      </div>\r\n" + "    </div>\r\n" + "  </div>\r\n"
				+ "  <footer class=\"text-center fixed-bottom\">\r\n"
				+ "    <p>&copy; 2022 MyMatcher from IES Pío Baroja</p>\r\n" + "  </footer>\r\n" + "</body>\r\n"
				+ "\r\n" + "</html>\r\n" + "");
		out.close();
	}
}
