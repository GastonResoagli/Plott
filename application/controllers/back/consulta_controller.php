<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class consulta_controller extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->model('consulta_model');
  }

  public function index()
  {
    $this->form_validation->set_rules('nombre', 'Nombre', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[consultas.email]');
    $this->form_validation->set_rules('mensaje', 'Mensaje', 'trim|required|is_unique[consultas.mensaje]');


    $data = array(
      'nombre' => $this->input->post('nombre', true),
      'email' => $this->input->post('email', true),
      'mensaje' => $this->input->post('mensaje', true)
    );


    //Envio array
    $consultas = $this->consulta_model->add_mensaje($data);

    redirect('');
  }

  private function _veri_log()
  {
    if ($this->session->userdata('logged_in')) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function consultas()
  {
    if ($this->_veri_log()) {
      $data = array('titulo' => 'Panel de Consultas');

      $session_data = $this->session->userdata('logged_in');
      $data['perfil_id'] = $session_data['perfil_id'];
      $data['nombre'] = $session_data['nombre'];

      $dat = array('consultas' => $this->consulta_model->get_consultas());

      $this->load->view('Front/head', $data);
      $this->load->view('Front/navbar');
      $this->load->view('back/consulta/consulta_view', $dat);
      $this->load->view('Front/footer');
    } else {
      redirect('Login', 'refresh');
    }
  }
}