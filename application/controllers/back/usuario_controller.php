<?php 
if ( !defined('BASEPATH')) exit('No direct script access allowed');

	class Usuario_controller extends CI_Controller{
		
		function __construct() 
		{
			parent::__construct();
			$this ->load->model('usuario_model');
			
		}

		private function _veri_log()
    	{
	    	if ($this->session->userdata('logged_in')) 
	    	{
	    		return TRUE;
	    	} else {
	    		return FALSE;
	    	}
    	}


	public function usuarios()
     {
    if ($this->_veri_log()) {
      $data = array('titulo' => 'Usuarios');

      $session_data = $this->session->userdata('logged_in');
      $data['perfil_id'] = $session_data['perfil_id'];
      $data['nombre'] = $session_data['nombre'];

      $dat = array('usuarios' => $this->usuario_model->get_usuarios_no_elim());

      $this->load->view('Front/head', $data);
      $this->load->view('Front/navbar');
      $this->load->view('back/usuarios/usuario_view', $dat);
      $this->load->view('Front/footer');
    } else {
      redirect('Login', 'refresh');
    }
  }


  function muestra_modificar()
  {
	  $id = $this->uri->segment(2);
	  $datos_usuario = $this->usuario_model->edit_usuario($id);

	  if ( $datos_usuario != FALSE) {
		  foreach ( $datos_usuario->result() as $row) 
		  {
			  $nombre = $row->nombre;
			  $apellido = $row->apellido;
			  $usuario = $row->usuario;
			  $email = $row->email;
			  
		  }

		  $dat = array('usuario' => $datos_usuario,
			  'id'=>$id,
			  'nombre'=>$nombre,
			  'apellido'=>$apellido,
			  'usuario'=>$usuario,
			  'email'=>$email,
			  
		  );
	  } 
	  else 
	  {
		  return FALSE;
	  }
	  if($this->_veri_log()){
	  $data = array('titulo' => 'Modificar usuario');
	  $session_data = $this->session->userdata('logged_in');
	  $data['perfil_id'] = $session_data['perfil_id'];
	  $data['nombre'] = $session_data['nombre'];

	  $this->load->view('Front/head', $data);
	  $this->load->view('Front/Navbar');
	  $this->load->view('back/usuarios/modificar_view', $dat);
	  $this->load->view('Front/Footer');
	  }else{
	  redirect('login', 'refresh');}
  }



 

  function modificar_usuario()
		{
			//Validación del formulario
			$this->form_validation->set_rules('nombre', 'Nombre', 'required');
			$this->form_validation->set_rules('apellido', 'Apellido', 'required');
			$this->form_validation->set_rules('usuario', 'Usuario', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			

			//Mensaje del form_validation
			$this->form_validation->set_message('required','<div class="alert alert-danger">El campo %s es obligatorio, al intentar modificar estaba vacio</div>');

			$this->form_validation->set_message('numeric','<div class="alert alert-danger">El campo %s debe contener un valor numérico, al intentar modificar estaba vacio</div>'); 

			$id = $this->uri->segment(2);
			$datos_usuario = $this->usuario_model->update_usuario($id);

			$dat = array(
				'id'=>$id,
				'nombre'=>$this->input->post('nombre',true),
				'apellido'=>$this->input->post('apellido',true),
				'usuario'=>$this->input->post('usuario',true),
				'email'=>$this->input->post('email',true),
			);

			if ($this->form_validation->run()==FALSE)
			{
				$data = array('titulo' => 'Error de formulario');
				$session_data = $this->session->userdata('logged_in');
				$data['perfil_id'] = $session_data['perfil_id'];
				$data['nombre'] = $session_data['nombre'];

				$this->load->view('Front/head', $data);
				$this->load->view('Front/Navbar');
				$this->load->view('back/usuarios/modificar_view', $dat);
				$this->load->view('Front/Footer');
			}
		
			
		}


		function eliminar_usuario(){
	    	$id = $this->uri->segment(2); 
	    	$data = array(
	    		'baja'=>'SI'
	    	);

	    	$this->usuario_model->update_usuario($id, $data);
	    	redirect('usuarios', 'refresh');
	    }


		function muestra_eliminados()
	    {    	
	    	if($this->_veri_log()){
	    	$data = array('titulo' => 'usuarios eliminados');
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			
			$dat = array(
		        'usuarios' => $this->usuario_model->not_active_usuarios()
			);

			$this->load->view('Front/head', $data);
			$this->load->view('Front/Navbar');
			$this->load->view('back/usuarios/eliminados_view', $dat);
			$this->load->view('Front/footer');
			}else{
			redirect('login', 'refresh');}
		}

	}       