package com.model;

public class Usuarios {
	
	private String user;
	private String password;
	private String nombre;
	private String apellidos;
	private String fechanac;
	private String correo;
	private String descripcion;
	private String atributo1;
	private String atributo2;
	private String atributo3;
	private String atributo4;
	private String atributo5;
	private String atributo6;
	private String atributo7;
	private String atributo8;
	private String atributo9;
	private String atributo10;
	private String atributo11;
	private String atributo12;
	private String atributo13;
	private String atributo14;
	private String atributo15;
	

	/**
	 * @param user
	 * @param password
	 * @param nombre
	 * @param apellidos
	 * @param fechanac
	 * @param correo
	 * @param descripcion
	 * @param atributo1
	 * @param atributo2
	 * @param atributo3
	 * @param atributo4
	 * @param atributo5
	 * @param atributo6
	 * @param atributo7
	 * @param atributo8
	 * @param atributo9
	 * @param atributo10
	 * @param atributo11
	 * @param atributo12
	 * @param atributo13
	 * @param atributo14
	 * @param atributo15
	 */
	
	public Usuarios(String user, String password, String nombre, String apellidos, String fechanac, String correo,
			String descripcion, String atributo1, String atributo2, String atributo3, String atributo4,
			String atributo5, String atributo6, String atributo7, String atributo8, String atributo9, String atributo10,
			String atributo11, String atributo12, String atributo13, String atributo14, String atributo15) {
		
		super();
		this.user = user;
		this.password = password;
		this.nombre = nombre;
		this.apellidos = apellidos;
		this.fechanac = fechanac;
		this.correo = correo;
		this.descripcion = descripcion;
		this.atributo1 = atributo1;
		this.atributo2 = atributo2;
		this.atributo3 = atributo3;
		this.atributo4 = atributo4;
		this.atributo5 = atributo5;
		this.atributo6 = atributo6;
		this.atributo7 = atributo7;
		this.atributo8 = atributo8;
		this.atributo9 = atributo9;
		this.atributo10 = atributo10;
		this.atributo11 = atributo11;
		this.atributo12 = atributo12;
		this.atributo13 = atributo13;
		this.atributo14 = atributo14;
		this.atributo15 = atributo15;
	}

	
	
	public String getUser() {
		return user;
	}



	public void setUser(String user) {
		this.user = user;
	}



	public String getPassword() {
		return password;
	}



	public void setPassword(String password) {
		this.password = password;
	}



	public String getNombre() {
		return nombre;
	}



	public void setNombre(String nombre) {
		this.nombre = nombre;
	}



	public String getApellidos() {
		return apellidos;
	}



	public void setApellidos(String apellidos) {
		this.apellidos = apellidos;
	}



	public String getFechanac() {
		return fechanac;
	}



	public void setFechanac(String fechanac) {
		this.fechanac = fechanac;
	}



	public String getCorreo() {
		return correo;
	}



	public void setCorreo(String correo) {
		this.correo = correo;
	}



	public String getDescripcion() {
		return descripcion;
	}



	public void setDescripcion(String descripcion) {
		this.descripcion = descripcion;
	}



	public String getAtributo1() {
		return atributo1;
	}



	public void setAtributo1(String atributo1) {
		this.atributo1 = atributo1;
	}



	public String getAtributo2() {
		return atributo2;
	}



	public void setAtributo2(String atributo2) {
		this.atributo2 = atributo2;
	}



	public String getAtributo3() {
		return atributo3;
	}



	public void setAtributo3(String atributo3) {
		this.atributo3 = atributo3;
	}



	public String getAtributo4() {
		return atributo4;
	}



	public void setAtributo4(String atributo4) {
		this.atributo4 = atributo4;
	}



	public String getAtributo5() {
		return atributo5;
	}



	public void setAtributo5(String atributo5) {
		this.atributo5 = atributo5;
	}



	public String getAtributo6() {
		return atributo6;
	}



	public void setAtributo6(String atributo6) {
		this.atributo6 = atributo6;
	}



	public String getAtributo7() {
		return atributo7;
	}



	public void setAtributo7(String atributo7) {
		this.atributo7 = atributo7;
	}



	public String getAtributo8() {
		return atributo8;
	}



	public void setAtributo8(String atributo8) {
		this.atributo8 = atributo8;
	}



	public String getAtributo9() {
		return atributo9;
	}



	public void setAtributo9(String atributo9) {
		this.atributo9 = atributo9;
	}



	public String getAtributo10() {
		return atributo10;
	}



	public void setAtributo10(String atributo10) {
		this.atributo10 = atributo10;
	}



	public String getAtributo11() {
		return atributo11;
	}



	public void setAtributo11(String atributo11) {
		this.atributo11 = atributo11;
	}



	public String getAtributo12() {
		return atributo12;
	}



	public void setAtributo12(String atributo12) {
		this.atributo12 = atributo12;
	}



	public String getAtributo13() {
		return atributo13;
	}



	public void setAtributo13(String atributo13) {
		this.atributo13 = atributo13;
	}



	public String getAtributo14() {
		return atributo14;
	}



	public void setAtributo14(String atributo14) {
		this.atributo14 = atributo14;
	}



	public String getAtributo15() {
		return atributo15;
	}



	public void setAtributo15(String atributo15) {
		this.atributo15 = atributo15;
	}



	public String toString() {
		
		StringBuffer sbResultado = new StringBuffer();
		sbResultado.append(user);
		sbResultado.append(", ");
		sbResultado.append(password);
		sbResultado.append(", ");
		sbResultado.append(nombre);
		sbResultado.append(", ");
		sbResultado.append(apellidos);
		sbResultado.append(", ");
		sbResultado.append(fechanac);
		sbResultado.append(", ");
		sbResultado.append(correo);
		
		return sbResultado.toString();
	}
}
