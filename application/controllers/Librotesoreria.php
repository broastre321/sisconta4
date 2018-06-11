<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Librotesoreria extends CI_Controller {
	public function __construct()
  {
        parent::__construct();
      	if(!$this->session->userdata('tipo')){
        	redirect(base_url());
      	}
			$this->load->model('Librotesoreria_model');
  }

	public function index()
	{
		$data['fichas'] = '';
		$this->load->view('formulario');
		$this->load->view('operacion/librotesoreria', $data);

			$btn_enviar =$this->input->post('enviar');
	      if (isset($btn_enviar)) {
	        $tipo=$this->security->xss_clean(strip_tags($this->input->post('tipo')));
	        $mes=$this->security->xss_clean(strip_tags($this->input->post('mes')));
	        if(isset($tipo) && !empty($tipo) && isset($mes) && !empty($mes)){
	          $data['fichas'] = $this->Librotesoreria_model->buscarLibroTesoreria($tipo, $mes);
						$anterior = $mes-1;
						$data['anteriores'] = $this->Librotesoreria_model->buscarLibroTesoreria($tipo, $anterior);

						$data['totales'] = $this->Librotesoreria_model->totalLibroTesoreria($tipo, $anterior);

						$this->load->view('operacion/busquedalibrotesoreria', $data);
	        }
	      }
		$this->load->view('layouts/footer');

	  }
}
