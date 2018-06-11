<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class agregarcuentas_model extends CI_Model
{
    public function _construct()
    {
      parent::_construct();
            $this->load->model('agregarcuentas_model');
                        $this->load->model('listascuentas_model');
    }

    public function registrar($table, $data)
    {
        $this->db->insert($table,$data);
        
        
        
         //capturamos DOS veces
       $uno = $this->listascuentas_model->obteneringreso();
         $datos3['array1'] = $uno;// en la vista se maneja con "array1"
            $dos = $this->listascuentas_model->obteneregreso();
               $datos3['array2'] = $dos; // en la vista se maneja con "array2
               
               
                         $this->load->view('formulario');
			 $this->load->view('operacion/vista_agregarcuentas');
                       $this->load->view('operacion/vista_listacuentas',$datos3);
                         $this->load->library('calendar');
                         
        
    }

    

}
?>
