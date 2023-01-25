package com.ies.baroja;

import java.util.Scanner;

public class Validaciones {

	public static void main(String[] args) {

		System.out.println(validacionAtributo());
		System.out.println(validacionUser());
		System.out.println(validacionPassword());
		System.out.println(validacionNombre());
		System.out.println(validacionApellidos());
		System.out.println(validacionCorreo());
		System.out.println(validacionDescripcion());
		System.out.println(validacionFechanac());

	}

	//VALIDACION ATRIBUTOS
	public static boolean validacionAtributo() {

		Scanner sc = new Scanner(System.in);

		do {
			try {
				System.out.println("Introduce un atributo: ");
				String atributoIntroducido = sc.nextLine();

				for (int x = 0; x < atributoIntroducido.length(); x++) {
					char c = atributoIntroducido.charAt(x);

					if (!((c >= 'a' && c <= 'z') || (c >= 'A' && c <= 'Z'))) {
						return false;
					}
				}

			} catch (Exception e) {

				e.printStackTrace();
			}
			return true;

		} while (false);
	}



	//VALIDACION USER
	public static boolean validacionUser() {

		Scanner sc = new Scanner(System.in);

		do {
			try {
				System.out.println("Introduce un usuario: ");
				String userIntroducido = sc.nextLine();

				for (int x = 0; x < userIntroducido.length(); x++) {
					char c = userIntroducido.charAt(x);

					if (!((c >= 'a' && c <= 'z') || (c >= 'A' && c <= 'Z') || (c >= '0' && c <= '9'))) {
						return false;
					}
				}

			} catch (Exception e) {

				e.printStackTrace();
			}
			return true;

		} while (false);
	}


	//VALIDACION PASSWORD
	public static boolean validacionPassword() {

		Scanner sc = new Scanner(System.in);

		do {
			try {
				System.out.println("Introduce una password: ");
				String passwordIntroducida = sc.nextLine();

				for (int x = 0; x < passwordIntroducida.length(); x++) {
					char c = passwordIntroducida.charAt(x);

					if (!((c >= 'a' && c <= 'z') || (c >= 'A' && c <= 'Z') || (c >= '0' && c <= '9'))) {
						return false;
					}
				}

			} catch (Exception e) {

				e.printStackTrace();
			}
			return true;

		} while (false);
	}

	//VALIDACION NOMBRE
	public static boolean validacionNombre() {

		Scanner sc = new Scanner(System.in);

		do {
			try {
				System.out.println("Introduce un nombre: ");
				String nombreIntroducido = sc.nextLine();

				for (int x = 0; x < nombreIntroducido.length(); x++) {
					char c = nombreIntroducido.charAt(x);

					if (!((c >= 'a' && c <= 'z') || (c >= 'A' && c <= 'Z'))) {
						return false;
					}
				}

			} catch (Exception e) {

				e.printStackTrace();
			}
			return true;

		} while (false);
	}



	//VALIDACION APELLIDOS
	public static boolean validacionApellidos() {

		Scanner sc = new Scanner(System.in);

		do {
			try {
				System.out.println("Introduce un apellido: ");
				String apellidosIntroducido = sc.nextLine();

				for (int x = 0; x < apellidosIntroducido.length(); x++) {
					char c = apellidosIntroducido.charAt(x);

					if (!((c >= 'a' && c <= 'z') || (c >= 'A' && c <= 'Z'))) {
						return false;
					}
				}

			} catch (Exception e) {

				e.printStackTrace();
			}
			return true;

		} while (false);
	}

	//VALIDACION CORREO
	public static boolean validacionCorreo() {

		Scanner sc = new Scanner(System.in);

		do {
			try {
				System.out.println("Introduce un correo: ");
				String correoIntroducido = sc.nextLine();

				for (int x = 0; x < correoIntroducido.length(); x++) {
					char c = correoIntroducido.charAt(x);

					if (!((c >= 'a' && c <= 'z') || (c >= '0' && c <= '9') || (c == '@') || (c == '.'))) {
						return false;
					}
				}

			} catch (Exception e) {

				e.printStackTrace();
			}
			return true;

		} while (false);
	}



	//VALIDACION DESCRIPCION
	public static boolean validacionDescripcion() {

		Scanner sc = new Scanner(System.in);

		do {
			try {
				System.out.println("Introduce una descripcion: ");
				String descripcionIntroducida = sc.nextLine();

				for (int x = 0; x < descripcionIntroducida.length(); x++) {
					char c = descripcionIntroducida.charAt(x);

					if (!((c >= 'a' && c <= 'z') || (c >= 'A' && c <= 'Z'))) {
						return false;
					}
				}

			} catch (Exception e) {

				e.printStackTrace();
			}
			return true;

		} while (false);
	}

	//VALIDACION FECHA DE NACIMIENTO
	public static boolean validacionFechanac() {

		Scanner sc = new Scanner(System.in);

		do {
			try {
				System.out.println("Introduce una fecha: ");
				String fechanacIntroducida = sc.nextLine();

				for (int x = 0; x < fechanacIntroducida.length(); x++) {
					char c = fechanacIntroducida.charAt(x);

					if (!((c >= '0' && c <= '9') || (c == '/'))) {
						return false;
					}
				}

			} catch (Exception e) {

				e.printStackTrace();
			}
			return true;

		} while (false);
	}
}


