<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Librodiario_transferencias extends CI_Controller {
	public function __construct()
  {
        parent::__construct();
      	if(!$this->session->userdata('tipo')){
        	redirect(base_url());
      	}
   		$this->load->model('Librodiario_transferencias_model');
                
  }

	public function index()
	{
		$data['transferencias'] = $this->Librodiario_transferencias_model->get_transferencias();

		$this->load->view('formulario');
		$this->load->view('operacion/librodiario_transferencias',$data);
	      
	  }
	   public function Filtrar()
	 {
 $inicio = $this->input->post('inicio');
	        $fin = $this->input->post('fin');
	        $data['transferencias'] = $this->Librodiario_transferencias_model->get_transferecias_filtro($inicio, $fin);
	       $this->load->view('formulario');
		$this->load->view('operacion/librodiario_transferencias',$data);
	 }
}
