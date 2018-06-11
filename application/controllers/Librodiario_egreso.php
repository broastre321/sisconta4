<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Librodiario_egreso extends CI_Controller {
	public function __construct()
  {
        parent::__construct();
      	if(!$this->session->userdata('tipo')){
        	redirect(base_url());
      	}
   			$this->load->model('Librodiario_egresos_model');
            $this->load->model('Librodiario_transferencias_model');
  }

	public function index()
	{
		$data1['egresos'] = $this->Librodiario_egresos_model->get_egresos();
          $data1['transferencias_egreso'] = $this->Librodiario_transferencias_model->get_transferencias_egreso();

		$this->load->view('formulario');
		$this->load->view('operacion/librodiario_egreso',$data1);
		
                
       
                
		
	      
	  }
	   public function Filtrar()
	 {
 $inicio = $this->input->post('inicio');
	        $fin = $this->input->post('fin');
	        $data['egresos'] = $this->Librodiario_egresos_model->get_egresos_filtro($inicio, $fin);
	        $data['transferencias_egreso'] = $this->Librodiario_transferencias_model->get_transferencias_egreso_filtro($inicio, $fin);
	        $this->load->view('formulario');
		$this->load->view('operacion/librodiario_egreso',$data);
	 }

}
