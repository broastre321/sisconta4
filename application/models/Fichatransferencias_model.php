<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Fichatransferencias_model extends CI_Model
{
    public function _construct()
    {
      parent::_construct();
    }

    public function registrar_transferencias($table, $data)
    {
        $this->db->insert($table,$data);
    }
    public function registrar_ficha($table, $data)
    {
        $this->db->insert($table,$data);
    }
    

}
?>
