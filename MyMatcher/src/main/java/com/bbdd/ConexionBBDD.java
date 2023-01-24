package com.bbdd;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

import com.model.Usuarios;

/**
 * Clase que centraliza los métodos de acceso a BBDD
 * 
 * @author AK y AM
 * @since 10/05/2022
 */

public class ConexionBBDD {

	Connection conexion; 
	int port = 3306;
	String host = "localhost";
	String db = "mymatcher";
	String user = "root";
	String password = "";
	//String host = "eu-cdbr-west-02.cleardb.net";
	//String db = "heroku_4b4de71ed0ef072";
	//String user = "b38baf450a6201";
	//String password = "aa0ce1a4";

	String url = String.format("jdbc:mysql://%s:%d/%s?useSSL=false", host, port, db);

	public void conectar() throws SQLException {

		conexion =  DriverManager.getConnection(url, user, password);
	}	


	public void desconectar() {

		try {
			
			conexion.close();
		} catch (SQLException sqlex) {
			
			System.out.println("Error: " + sqlex.getMessage());
		}
	}

	/**
	 * ejecutarConsulta
	 * @param consulta
	 * @return
	 */
	public ResultSet ejecutarConsulta(String consulta) {

		ResultSet rsResultado = null;
		try {
			System.out.println("Ejecutando: " + consulta);
			PreparedStatement prepStatement = conexion.prepareStatement(consulta);
			rsResultado = prepStatement.executeQuery();
		} catch (SQLException sqlex) {
			System.out.println("Error: " + sqlex.getMessage());
		}
		return rsResultado;
	}
	
	public int ejecutarUpdate(String consulta) {

		int iUpd = 0;
		try {
			System.out.println("Ejecutando: " + consulta);
			PreparedStatement prepStatement = conexion.prepareStatement(consulta);
			iUpd = prepStatement.executeUpdate();
		} catch (SQLException sqlex) {
			System.out.println("Error: " + sqlex.getMessage());
		}
		return iUpd;
	}

	/**
	 * insertarUsuario
	 * @param usuario
	 * @return
	 */
	public int insertarUsuario(Usuarios usuario) {

		int iRes = 0;
		String sInsert = "insert into usuarios (user, password, nombre, apellidos, fechanac, correo)"
				+ "values (?, ?, ?, ?, ?, ?)"; 

		try {

			System.out.println("Ejecutando: "+ sInsert);
			System.out.println("Datos a insertar: "+ usuario);
			PreparedStatement prepStatement = conexion.prepareStatement(sInsert);
			prepStatement.setString(1, usuario.getUser());
			prepStatement.setString(2, usuario.getPassword());
			prepStatement.setString(3, usuario.getNombre());
			prepStatement.setString(4, usuario.getApellidos());
			prepStatement.setString(5, usuario.getFechanac());
			prepStatement.setString(6, usuario.getCorreo());
			
			iRes = prepStatement.executeUpdate();

		} catch (SQLException sqlex) {

			System.out.println("*Error*"+ sqlex.getMessage());
			sqlex.printStackTrace();
		}

		return iRes; 
	}
	
	
	
}
