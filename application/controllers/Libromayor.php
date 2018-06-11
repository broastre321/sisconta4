<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Libromayor extends CI_Controller
{	public function __construct()
      {
        parent::__construct();
      	if(!$this->session->userdata('tipo'))
        {
        	redirect(base_url());
      	}
   		$this->load->model('libromayor_model');             
      }

	public function index()
	{       $this->load->view('formulario');
		$this->load->view('operacion/libromayor');
  
		$btn_enviar =$this->input->post('enviar');
	      if (isset($btn_enviar)) 
              { 
		//$this->load->view('operacion/libromayor2');
               
                       $tipo =       $this->input->post('tipo');
                        $mes =        $this->input->post('mes');
                        $gestion =        $this->input->post('gestion');
                        
		//$this->libromayor_model->consulta($tipo,$mes,$gestion);
               // $uno = $this->libromayor_model->consultahasta($tipo,$mes,$gestion);
                //  $datos['array1'] = $uno; // en la vista se maneja con "array2"
                //  
                //  
                   $uno = $this->libromayor_model->consultacuentas($tipo,$mes,$gestion);
                  $datos['array1'] = $uno; // en la vista se maneja con "array2"
                  
                  $dos= $this->libromayor_model->consultaanterior($tipo,$mes,$gestion);
                  $datos['array2'] = $dos; // en la vista se maneja con "array2"
                  
                   $tres= $this->libromayor_model->consultahastames($tipo,$mes,$gestion);
                  $datos['array3'] = $tres; // en la vista se maneja con "array2"
                  
                  //////////////////////////////////////////////////////////////////////////////
                   $cuatro = $this->libromayor_model->consultames($tipo,$mes,$gestion);
                  $datos['array8'] = $cuatro; // en la vista se maneja con "array2"
                  
                   $cinco = $this->libromayor_model->consultaantes($tipo,$mes,$gestion);
                  $datos['array9'] = $cinco; // en la vista se maneja con "array2"
                  
                $seis = $this->libromayor_model->consultatotal($tipo,$mes,$gestion);
                  $datos['array10'] = $seis; // en la vista se maneja con "array2"
                  
                  
                  
                $this->load->view('operacion/libromayor2',$datos);
                
                
              }
	  
                
        }
        
        
        
}
