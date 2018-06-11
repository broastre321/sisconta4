<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Librodiario_ingreso extends CI_Controller {
	public function __construct()
  {
        parent::__construct();
      	if(!$this->session->userdata('tipo')){
        	redirect(base_url());
      	}
   		$this->load->model('Librodiario_ingresos_model');
   		$this->load->model('Librodiario_transferencias_model');

  }

	public function index()
	{

		$btn_enviar =$this->input->post('enviar');
		 if (isset($btn_enviar)){
			 $inicio = $this->input->post('inicio');
	 		$fin = $this->input->post('fin');
			$data['ingresos'] = $this->Librodiario_ingresos_model->get_ingresos_filtro($inicio, $fin);
			$data['transferencias_ingreso'] = $this->Librodiario_transferencias_model->get_transferencias_ingreso_filtro($inicio, $fin);
		 }
		 else{
			 $data['ingresos'] = $this->Librodiario_ingresos_model->get_ingresos();
	 		$data['transferencias_ingreso'] = $this->Librodiario_transferencias_model->get_transferencias_ingreso();
		 }
		$this->load->view('formulario');
		$this->load->view('operacion/librodiario_ingreso',$data);
	}
}
