<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Carrito_model extends CI_Model {

  public function __construct(){
    parent::__construct();
  }

  public function insert_venta($data)
  {
      $this->db->insert('venta_cabecera', $data);
      $id= $this->db->insert_id();

      return (isset($id)) ? $id : FALSE;
  }

  public function insert_venta_detalle($data)
  {
      $this->db->insert('venta_detalle', $data);
  }
}