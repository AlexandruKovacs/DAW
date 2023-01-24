package com.test;

import java.util.LinkedList;

import com.ies.baroja.Controller;
import com.model.Usuarios;

public class TestController {

	public static void main(String[] args) {
		
		System.out.println("Inicio TEST");
		LinkedList<Usuarios> lista = Controller.getUsuarios();
		
		System.out.println("Lista: "+ lista);
	}

}
