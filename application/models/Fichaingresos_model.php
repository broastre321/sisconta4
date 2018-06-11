<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Fichaingresos_model extends CI_Model
{
    public function _construct()
    {
      parent::_construct();
    }

    public function registrar_cliente($table, $data)
    {
        $this->db->insert($table,$data);
        return $this->db->insert_id(); //  registra en la base y luego extrae los datos como return
    }
     public function registrar_ficha($table, $data)
    {
        $this->db->insert($table,$data);
     
    }
    
    public function obtener_Tipoingreso()
    {
        //return $this->db->get('cuentas')->result();
        
        return  $query = $this->db->query('SELECT `codigo` ,`nombre`,`fecha`,`tipo_cuentas_idtipo_cuentas` FROM `cuentas`
       where  tipo_cuentas_idtipo_cuentas="1"')->result();
        
        
    }
   
}
?>
