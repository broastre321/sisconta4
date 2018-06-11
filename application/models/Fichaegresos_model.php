<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Fichaegresos_model extends CI_Model
{
    public function _construct()
    {
      parent::_construct();
      $this->load->model('Fichaegresos_model');
    }

    public function registrar_cliente($table, $data)
    {
        $this->db->insert($table,$data);
          return $this->db->insert_id(); 
    }
    public function registrar_ficha($table, $data)
    {
        $this->db->insert($table,$data);
    }
    
     public function obtener_Tipoegresos()
    {
          return  $query = $this->db->query('SELECT `codigo` ,`nombre`,`fecha` FROM `cuentas`
       where  tipo_cuentas_idtipo_cuentas="2" ')->result();
         // return $this->db->get('cuenta_egreso')->result();
    }
}
?>
