<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class consulta_model extends CI_Model {
  
   public function __construct()
   {
       parent::__construct();
   }


   function add_mensaje($data) {

    $this->db->insert('consultas',$data);
    $insert_id = $this->db->insert_id();
    return $insert_id;
   }


   function get_consultas() {
       $query = $this->db->get('consultas');

       if($query->num_rows() > 0) {
           return $query;
        } else{
            return FALSE;
        }
   }


}