package com.ies.baroja;

import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.LinkedList;

import com.bbdd.ConexionBBDD;
import com.model.Usuarios;

public class Controller {

	private static String sConsultaTodos = "select user, password, nombre, apellidos, fechanac, correo, descripcion, "
			+ "atributo1, atributo2, atributo3, atributo4, atributo5, "
			+ "atributo6, atributo7, atributo8, atributo9, atributo10, "
			+ "atributo11, atributo12, atributo13, atributo14, atributo15 from usuarios;";
	
	/**
	 * getJugadores
	 * 
	 * @return LinkedList<Jugadores>
	 * @author Alexandru Kovacs y Adrián Mata
	 */
	public static LinkedList<Usuarios> getUsuarios() {

		// OBJETO CON LA LISTA DE LOS USUARIOS
		LinkedList<Usuarios> listaUsuarios = new LinkedList<Usuarios>();
		ConexionBBDD miConexion = new ConexionBBDD();

		try {
			miConexion.conectar();
			// LANZAMOS LA CONSULTA
			ResultSet rsResultado = miConexion.ejecutarConsulta(sConsultaTodos);

			if (rsResultado != null) {

				while (rsResultado.next()) {

					Usuarios usuario = new Usuarios(rsResultado.getString("user"), rsResultado.getString("password"),
							rsResultado.getString("nombre"), rsResultado.getString("apellidos"),
							rsResultado.getString("fechanac"), rsResultado.getString("correo"),
							rsResultado.getString("descripcion"), rsResultado.getString("atributo1"),
							rsResultado.getString("atributo2"), rsResultado.getString("atributo3"),
							rsResultado.getString("atributo4"), rsResultado.getString("atributo5"),
							rsResultado.getString("atributo6"), rsResultado.getString("atributo7"),
							rsResultado.getString("atributo8"), rsResultado.getString("atributo9"),
							rsResultado.getString("atributo10"), rsResultado.getString("atributo11"),
							rsResultado.getString("atributo12"), rsResultado.getString("atributo13"),
							rsResultado.getString("atributo14"), rsResultado.getString("atributo15"));

					listaUsuarios.add(usuario);
				}

			} else {

				System.out.println("Error: NO HAY DATOS");
			}

		} catch (SQLException sqlex) {

			sqlex.printStackTrace();
		} finally {

			// DESCONEXION BBDD
			miConexion.desconectar();
		}

		return listaUsuarios;
	}
	
	public static LinkedList<Usuarios> getMyMatch(String sNombreUsuario) {

		LinkedList<Usuarios> listaMyMatch = new LinkedList<Usuarios>();
		ConexionBBDD miConexion = new ConexionBBDD();
		try {
			String sConsultaMyMatch = "SELECT * FROM usuarios \r\n"
					+ "	WHERE user NOT IN (SELECT user FROM usuarios WHERE user='"+sNombreUsuario+"' OR user = 'admin') AND atributo1 IN (SELECT atributo1 FROM usuarios WHERE user='"+sNombreUsuario+"') AND atributo1 NOT IN (SELECT atributo1 FROM usuarios WHERE atributo1='')\r\n"
					+ "		OR user NOT IN (SELECT user FROM usuarios WHERE user='"+sNombreUsuario+"' OR user = 'admin') AND atributo2 IN (SELECT atributo2 FROM usuarios WHERE user='"+sNombreUsuario+"') AND atributo2 NOT IN (SELECT atributo2 FROM usuarios WHERE atributo2='')\r\n"
					+ "		OR user NOT IN (SELECT user FROM usuarios WHERE user='"+sNombreUsuario+"' OR user = 'admin') AND atributo3 IN (SELECT atributo3 FROM usuarios WHERE user='"+sNombreUsuario+"') AND atributo3 NOT IN (SELECT atributo3 FROM usuarios WHERE atributo3='')\r\n"
					+ "		OR user NOT IN (SELECT user FROM usuarios WHERE user='"+sNombreUsuario+"' OR user = 'admin') AND atributo4 IN (SELECT atributo4 FROM usuarios WHERE user='"+sNombreUsuario+"') AND atributo4 NOT IN (SELECT atributo4 FROM usuarios WHERE atributo4='')\r\n"
					+ "		OR user NOT IN (SELECT user FROM usuarios WHERE user='"+sNombreUsuario+"' OR user = 'admin') AND atributo5 IN (SELECT atributo5 FROM usuarios WHERE user='"+sNombreUsuario+"') AND atributo5 NOT IN (SELECT atributo5 FROM usuarios WHERE atributo5='')\r\n"
					+ "		OR user NOT IN (SELECT user FROM usuarios WHERE user='"+sNombreUsuario+"' OR user = 'admin') AND atributo6 IN (SELECT atributo6 FROM usuarios WHERE user='"+sNombreUsuario+"') AND atributo6 NOT IN (SELECT atributo6 FROM usuarios WHERE atributo6='')\r\n"
					+ "		OR user NOT IN (SELECT user FROM usuarios WHERE user='"+sNombreUsuario+"' OR user = 'admin') AND atributo7 IN (SELECT atributo7 FROM usuarios WHERE user='"+sNombreUsuario+"') AND atributo7 NOT IN (SELECT atributo7 FROM usuarios WHERE atributo7='')\r\n"
					+ "		OR user NOT IN (SELECT user FROM usuarios WHERE user='"+sNombreUsuario+"' OR user = 'admin') AND atributo8 IN (SELECT atributo8 FROM usuarios WHERE user='"+sNombreUsuario+"') AND atributo8 NOT IN (SELECT atributo8 FROM usuarios WHERE atributo8='')\r\n"
					+ "		OR user NOT IN (SELECT user FROM usuarios WHERE user='"+sNombreUsuario+"' OR user = 'admin') AND atributo9 IN (SELECT atributo9 FROM usuarios WHERE user='"+sNombreUsuario+"') AND atributo9 NOT IN (SELECT atributo9 FROM usuarios WHERE atributo9='')\r\n"
					+ "		OR user NOT IN (SELECT user FROM usuarios WHERE user='"+sNombreUsuario+"' OR user = 'admin') AND atributo10 IN (SELECT atributo10 FROM usuarios WHERE user='"+sNombreUsuario+"') AND atributo10 NOT IN (SELECT atributo10 FROM usuarios WHERE atributo10='')\r\n"
					+ "		OR user NOT IN (SELECT user FROM usuarios WHERE user='"+sNombreUsuario+"' OR user = 'admin') AND atributo11 IN (SELECT atributo11 FROM usuarios WHERE user='"+sNombreUsuario+"') AND atributo11 NOT IN (SELECT atributo11 FROM usuarios WHERE atributo11='')\r\n"
					+ "		OR user NOT IN (SELECT user FROM usuarios WHERE user='"+sNombreUsuario+"' OR user = 'admin') AND atributo12 IN (SELECT atributo12 FROM usuarios WHERE user='"+sNombreUsuario+"') AND atributo12 NOT IN (SELECT atributo12 FROM usuarios WHERE atributo12='')\r\n"
					+ "		OR user NOT IN (SELECT user FROM usuarios WHERE user='"+sNombreUsuario+"' OR user = 'admin') AND atributo13 IN (SELECT atributo13 FROM usuarios WHERE user='"+sNombreUsuario+"') AND atributo13 NOT IN (SELECT atributo13 FROM usuarios WHERE atributo13='')\r\n"
					+ "		OR user NOT IN (SELECT user FROM usuarios WHERE user='"+sNombreUsuario+"' OR user = 'admin') AND atributo14 IN (SELECT atributo14 FROM usuarios WHERE user='"+sNombreUsuario+"') AND atributo14 NOT IN (SELECT atributo14 FROM usuarios WHERE atributo14='')\r\n"
					+ "		OR user NOT IN (SELECT user FROM usuarios WHERE user='"+sNombreUsuario+"' OR user = 'admin') AND atributo15 IN (SELECT atributo15 FROM usuarios WHERE user='"+sNombreUsuario+"') AND atributo15 NOT IN (SELECT atributo15 FROM usuarios WHERE atributo15='');";

			miConexion.conectar();

			// LANZAMOS LA CONSULTA
			ResultSet rsResultado = miConexion.ejecutarConsulta(sConsultaMyMatch);

			if (rsResultado != null) {

				while (rsResultado.next()) {

					Usuarios usuario = new Usuarios(rsResultado.getString("user"), rsResultado.getString("password"),
							rsResultado.getString("nombre"), rsResultado.getString("apellidos"),
							rsResultado.getString("fechanac"), rsResultado.getString("correo"),
							rsResultado.getString("descripcion"), rsResultado.getString("atributo1"),
							rsResultado.getString("atributo2"), rsResultado.getString("atributo3"),
							rsResultado.getString("atributo4"), rsResultado.getString("atributo5"),
							rsResultado.getString("atributo6"), rsResultado.getString("atributo7"),
							rsResultado.getString("atributo8"), rsResultado.getString("atributo9"),
							rsResultado.getString("atributo10"), rsResultado.getString("atributo11"),
							rsResultado.getString("atributo12"), rsResultado.getString("atributo13"),
							rsResultado.getString("atributo14"), rsResultado.getString("atributo15"));

					listaMyMatch.add(usuario);
				}

			} else {

				System.out.println("Error: NO HAY USUARIO");
			}

		} catch (SQLException sqlex) {

			sqlex.printStackTrace();
		} finally {

			// DESCONEXION BBDD
			miConexion.desconectar();
		}

		return listaMyMatch;
	}

	/**
	 * @param sNombreUsuario
	 * @return
	 */
	public static Usuarios getUsuario(String sNombreUsuario) {

		ConexionBBDD miConexion = new ConexionBBDD();
		Usuarios miUsuario = null;
		try {
			String sConsultaUser = "select user, password, nombre, apellidos, fechanac, correo, descripcion, "
					+ "atributo1, atributo2, atributo3, atributo4, atributo5, "
					+ "atributo6, atributo7, atributo8, atributo9, atributo10, "
					+ "atributo11, atributo12, atributo13, atributo14, atributo15 from usuarios where user= '"
					+ sNombreUsuario + "';";

			miConexion.conectar();

			// LANZAMOS LA CONSULTA
			ResultSet rsResultado = miConexion.ejecutarConsulta(sConsultaUser);

			if (rsResultado != null) {

				while (rsResultado.next()) {

					miUsuario = new Usuarios(rsResultado.getString("user"), rsResultado.getString("password"),
							rsResultado.getString("nombre"), rsResultado.getString("apellidos"),
							rsResultado.getString("fechanac"), rsResultado.getString("correo"),
							rsResultado.getString("descripcion"), rsResultado.getString("atributo1"),
							rsResultado.getString("atributo2"), rsResultado.getString("atributo3"),
							rsResultado.getString("atributo4"), rsResultado.getString("atributo5"),
							rsResultado.getString("atributo6"), rsResultado.getString("atributo7"),
							rsResultado.getString("atributo8"), rsResultado.getString("atributo9"),
							rsResultado.getString("atributo10"), rsResultado.getString("atributo11"),
							rsResultado.getString("atributo12"), rsResultado.getString("atributo13"),
							rsResultado.getString("atributo14"), rsResultado.getString("atributo15"));

				}

			} else {

				System.out.println("Error: NO HAY USUARIO");
			}

		} catch (SQLException sqlex) {

			sqlex.printStackTrace();
		} finally {

			// DESCONEXION BBDD
			miConexion.desconectar();
		}

		return miUsuario;
	}

	public static int insertarUsuario(Usuarios usuario) {

		int iRes = 0;

		/** 1. Conectar a la base de datos **/
		ConexionBBDD miConn = new ConexionBBDD();

		try {

			/** 2. Obtener conexion */
			miConn.conectar();

			/** 3. Insertar jugador */
			iRes = miConn.insertarUsuario(usuario);
			System.out.println("Resultado de insertar usuario = " + iRes);

		} catch (SQLException sqlex) {

			System.out.println("*Error*" + sqlex.getMessage());
			sqlex.printStackTrace();

		} finally {

			/** 4. Desconectar la BBDD */
			miConn.desconectar();

		}

		return iRes;
	}

	public static boolean actualizarAtributos(String sNombreUsuario, Usuarios objUser) {

		ConexionBBDD miConexion = new ConexionBBDD();
		boolean bRes = true;

		try {

			String sConsultaUpdate = "UPDATE usuarios SET descripcion = '" + objUser.getDescripcion()+ "', "
					+ "atributo1 = '" + objUser.getAtributo1()+ "', atributo2 = '" + objUser.getAtributo2()+ "', "
					+ "atributo3 = '" + objUser.getAtributo3()+ "', atributo4 = '" + objUser.getAtributo4()+ "', "
					+ "atributo5 = '" + objUser.getAtributo5()+ "', atributo6 = '" + objUser.getAtributo6()+ "', "
					+ "atributo7 = '" + objUser.getAtributo7()+ "', atributo8 = '" + objUser.getAtributo8()+ "', "
					+ "atributo9 = '" + objUser.getAtributo9()+ "', atributo10 = '" + objUser.getAtributo10()+ "', "
					+ "atributo11 = '" + objUser.getAtributo11()+ "', atributo12 = '" + objUser.getAtributo12()+ "', "
					+ "atributo13 = '" + objUser.getAtributo13()+ "', atributo14 = '" + objUser.getAtributo14()+ "', "
					+ "atributo15 = '" + objUser.getAtributo15()+ "' where user= '"+ sNombreUsuario + "';";

			miConexion.conectar();

			// LANZAMOS LA CONSULTA
			int iRes = miConexion.ejecutarUpdate(sConsultaUpdate);

			System.out.println("Ejecutando: " + sConsultaUpdate);
			System.out.println("rsResultado: " + iRes);
			
			
		} catch (SQLException sqlex) {
			
			System.out.println("*Error*" + sqlex.getMessage());
			sqlex.printStackTrace();
			bRes = false;
		}
		return bRes;

	}

}