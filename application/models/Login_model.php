<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Login_model extends CI_Model
{
    public function _construct()
    {
      parent::_construct();
    }
    
    
    function login($usuario,$password)
    {
      $this->db->where('usuario',$usuario);
      $this->db->where('password',$password);
      
      $consulta = $this->db->get('empleado'); //tabla empleado
      
                if($consulta->num_rows()>0)
                {
                    $consulta = $consulta->row();

                    $this->session->set_userdata('nombre_usuario',$consulta->usuario);
                    $this->session->set_userdata('tipo',$consulta->tipo);

                   //  $this->session->set_userdata('nombre',$consulta->nombre_empleado);
                   // $this->session->set_userdata('ci_empleado',$consulta->ci_empleado);
                    $this->session->set_userdata('nombre',$consulta->nombre_empleado);
                  $this->session->set_userdata('ci_empleado',$consulta->ci_empleado);
                  return true;
                }
                else
                {
                  return false;
                }
    }
}
?>
