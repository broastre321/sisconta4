<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Libromayor_egresos extends CI_Controller {
	public function __construct()
  {
        parent::__construct();
      	if(!$this->session->userdata('tipo')){
        	redirect(base_url());
      	}
   		$this->load->model('Libromayor_egresos_model');
                
  }

	public function index()
	{
$data['cuentas_ingresos'] = $this->Libromayor_egresos_model->get_libromayor_egresos();	
		$this->load->view('formulario');
		$this->load->view('operacion/Libromayor_egresos',$data);
		
                
       
   
	      
	  }
}
