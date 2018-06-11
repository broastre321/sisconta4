<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class listascuentas_model extends CI_Model
{
    public function _construct()
    {
      parent::_construct();
    }

    public function registrar($table, $data)
    {
        $this->db->insert($table,$data);
    }
    
    
   public function obteneringreso()
    {
   
      return  $query = $this->db->query('SELECT `codigo` ,`nombre`,`fecha` FROM `cuentas`
       where  tipo_cuentas_idtipo_cuentas="1"')->result();
       
      
 
        
        
    }
     public function obteneregreso()
    {
      //  return $this->db->get('cuentas')->result();
           return  $query = $this->db->query('SELECT `codigo` ,`nombre`,`fecha` FROM `cuentas`
       where  tipo_cuentas_idtipo_cuentas="2" ')->result();
           
    }
  

}
?>
