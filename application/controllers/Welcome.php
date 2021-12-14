<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	 
	public function index() {
	
	   if($session_data = $this->session->userdata('logged_in')) {

		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];
		
		$data["titulo"] = "Home";
		$this->load->view('Front/head',$data);
		$this->load->view('Front/Navbar');
		$this->load->view('Home');
		$this->load->view('Front/Footer');

	   } else {

		$data["titulo"] = "Home";
		$this->load->view('Front/head',$data);
		$this->load->view('Front/Navbar');
		$this->load->view('Home');
		$this->load->view('Front/Footer');


	   };
		
		
	}

    public function Terminos() {

		if($session_data = $this->session->userdata('logged_in')) {

			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			
			$data["titulo"] = "Terminos"; 
		$this->load->view('Front/head',$data);
		$this->load->view('Front/Navbar');
		$this->load->view('Terminos');
		$this->load->view('Front/Footer');
			
		   } else {
	
			$data["titulo"] = "Terminos"; 
		$this->load->view('Front/head',$data);
		$this->load->view('Front/Navbar');
		$this->load->view('Terminos');
		$this->load->view('Front/Footer');
	
	
		   };
		
	}

	public function contacto() {

		if($session_data = $this->session->userdata('logged_in')) {

			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			
			$data["titulo"] = "contactos";
		$this->load->view('Front/head',$data);
		$this->load->view('Front/Navbar');
		$this->load->view('contacto');
		$this->load->view('Front/Footer');
	
		   } else {
	
			$data["titulo"] = "contactos";
		$this->load->view('Front/head',$data);
		$this->load->view('Front/Navbar');
		$this->load->view('contacto');
		$this->load->view('Front/Footer');
	
	
		   };
		
		
	}


	public function Comercio() {

        if($session_data = $this->session->userdata('logged_in')) {

			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			
			$data["titulo"] = "Comercio";
		$this->load->view('Front/head',$data);
		$this->load->view('Front/Navbar');
		$this->load->view('Comercio');
		$this->load->view('Front/Footer');
		
	
		   } else {
	
			$data["titulo"] = "Comercio";
		$this->load->view('Front/head',$data);
		$this->load->view('Front/Navbar');
		$this->load->view('Comercio');
		$this->load->view('Front/Footer');
		
	
	
		   }; 

	}



	public function Nosotros() {

		if($session_data = $this->session->userdata('logged_in')) {

			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			
			$data["titulo"] = "Nosotros";
		$this->load->view('Front/head',$data);
		$this->load->view('Front/Navbar');
		$this->load->view('Nosotros');
		$this->load->view('Front/Footer');
	
		   } else {
	
			$data["titulo"] = "Nosotros";
		$this->load->view('Front/head',$data);
		$this->load->view('Front/Navbar');
		$this->load->view('Nosotros');
		$this->load->view('Front/Footer');
	
		   }; 
		
	}

	public function muestraproducto() {

		if($session_data = $this->session->userdata('logged_in')) {

			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			
			$data["titulo"] = "Muestra productos";
		$this->load->view('Front/head',$data);
		$this->load->view('Front/Navbar');
		$this->load->view('back/productos/muestraproductos');
		$this->load->view('Front/Footer');

	
		   } else {
	
			$data["titulo"] = "Muestra productos";
		$this->load->view('Front/head',$data);
		$this->load->view('Front/Navbar');
		$this->load->view('back/productos/muestraproductos');
		$this->load->view('Front/Footer');

	
	
		   };
		
	}

	
	public function catalogo() {

		if($session_data = $this->session->userdata('logged_in')) {

			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			
			$data["titulo"] = "Catalogo";
		$this->load->view('Front/head',$data);
		$this->load->view('Front/Navbar');
		$this->load->view('back/catalogo');
		$this->load->view('Front/Footer');
	
		   } else {
	
			$data["titulo"] = "Catalogo";
			$this->load->view('Front/head',$data);
			$this->load->view('Front/Navbar');
			$this->load->view('back/catalogo');
			$this->load->view('Front/Footer');
	
	
		   };
		
	}

	public function consulta() {

		if($session_data = $this->session->userdata('logged_in')) {

			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			
			
		$data["titulo"] = "consultas";
		$this->load->view('Front/head',$data);
		$this->load->view('Front/Navbar');
		$this->load->view('back/consulta/consultas');
		$this->load->view('Front/Footer');
	
		   } else {
	
		
			$data["titulo"] = "consultas";
			$this->load->view('Front/head',$data);
			$this->load->view('Front/Navbar');
			$this->load->view('back/consulta/consultas');
			$this->load->view('Front/Footer');
	
	
		   };
	}



	public function registro() {

        if($session_data = $this->session->userdata('logged_in')) {

			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			
			$data['titulo'] = 'Registro';
			$this->load->view('Front/head',$data); 
			$this->load->view('Front/navbar'); 
			$this->load->view('back/usuarios/registro'); 
			$this->load->view('Front/footer');
	
		   } else {
			$data['titulo'] = 'Registro';
			$this->load->view('Front/head',$data); 
			$this->load->view('Front/navbar'); 
			$this->load->view('back/usuarios/registro'); 
			$this->load->view('Front/footer');
	
		   };
	}


public function login()
{

	$data['titulo'] = 'login';
	if($session_data = $this->session->userdata('logged_in')) {

		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];
		
		$this->load->view('Front/head',$data);
		$this->load->view('Front/navbar'); 
		$this->load->view('back/usuarios/login'); 
		$this->load->view('Front/footer');

	   } else {

		$this->load->view('Front/head',$data);
		$this->load->view('Front/navbar'); 
		$this->load->view('back/usuarios/login'); 
		$this->load->view('Front/footer');
}



}

public function us_logueado(){
$data['titulo']='Usuario Logueado'; 

$session_data = $this->session->userdata('logged_in');
$data['perfil_id'] = $session_data['perfil_id'];
$data['nombre'] = $session_data['nombre'];

$this->load->view('Front/head',$data); 
$this->load->view('Front/Navbar');
$this->load->view('Home'); 
$this->load->view('Front/footer');
}


public function logout()
		{
			$this->session->unset_userdata('logged_in');
        	session_destroy();
			//Pagina que carga despues del logout
			redirect('');
		}

	// final
}

