<?php
class Registro_controller extends CI_Controller{
function __construct()
{
parent::__construct();
$this ->load->model('usuario_model');
}
/**
*
*/
function index()
{
//Genero las reglas de validacion
$this->form_validation->set_rules('nombre','Nombre', 'required');
$this->form_validation->set_rules('apellido','Apellido', 'required');
$this->form_validation->set_rules('email','Email', 'required|trim|valid_email|is_unique[usuarios.email]');
/*$this->form_validation->set_rules('username', 'Usuario','trim|required|xss_clean|is_unique[usuarios.username]');*/
$this->form_validation->set_rules('usuario','Usuario','trim|required|is_unique[usuarios.usuario]');
//$this->form_validation->set_rules('password', 'Contraseña','required|xss_clean');
$this->form_validation->set_rules('pass','Contraseña','required');
$this->form_validation->set_rules('re_pass','Repetir contraseña', 'required|matches[pass]');
//Mensaje de error si no pasan las reglas
$this->form_validation->set_message('required','<div class="alert alert-danger">El campo %s es obligatorio</div>');
$this->form_validation->set_message('matches','<div class="alert alert-danger">Los contraseña ingresada nocoincide</div>');
$this->form_validation->set_message('is_unique','<div class="alert alert-danger">El campo %s ya existe</div>');
$pass = $this->input->post('re_pass',true);
//Preparo los datos para guardar en la base,en caso de que pase la validacion
$data = array('nombre'=>$this->input->post('nombre',true),'apellido'=>$this->input->post('apellido',true),'email'=>$this->input->post('email',true),'usuario'=>$this->input->post('usuario',true),'pass'=>($pass),'perfil_id'=>'2');
//Si no pasa la validacion de datos
if ($this->form_validation->run() == FALSE)
{
//Muestra la página de registro con el título de error
$data = array('titulo' => 'Error deformulario');
$this->load->view('Front/head',$data);
$this->load->view('Front/Navbar');
$this->load->view('back/usuarios/registro');
$this->load->view('Front/footer');
}
else //Pasa la validacion
{

$usuarios = $this->usuario_model->add_usuario($data);

redirect('');
}
}
}
/* End of file
*/