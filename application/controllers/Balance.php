<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Balance extends CI_Controller {
	public function __construct()
  {
        parent::__construct();
      	if(!$this->session->userdata('tipo')){
        	redirect(base_url());
      	}
			$this->load->model('Balance_model');
  }

	public function index()
	{
		$data['fichas'] = '';
		$this->load->view('formulario');
		$this->load->view('operacion/Balance1', $data);

        $btn_enviar =$this->input->post('enviar');
	      if (isset($btn_enviar)){
	        $tipo=$this->security->xss_clean(strip_tags($this->input->post('tipo_cuentas')));
	        if(isset($tipo) && !empty($tipo)){
	          $data['Balances_totales'] = $this->Balance_model->Total_balance($tipo);


						$this->load->view('operacion/Balance2', $data);
	       }
	      }
		$this->load->view('layouts/footer');

	  }
}
