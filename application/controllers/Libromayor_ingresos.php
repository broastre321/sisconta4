<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Libromayor_ingresos extends CI_Controller {
	public function __construct()
  {
        parent::__construct();
      	if(!$this->session->userdata('tipo')){
        	redirect(base_url());
      	}
   		$this->load->model('Libromayor_ingresos_model');

  }

	public function index()
	{
			//$data['cuentas_ingresos'] = $this->Libromayor_ingresos_model->get_libromayor_ingresos();
			$data['cuentas'] = '';
			$this->load->view('layouts/head');
			$this->load->view('operacion/Libromayor_ingresos',$data);
	 }

	 public function buscarLibro()
	 {
		 $tipo_cuenta = $this->input->post('tipo_cuenta');
		 $mes = $this->input->post('mes');
		 $data['cuentas'] = $this->Libromayor_ingresos_model->get_libromayor_ingresos($tipo_cuenta, $mes);
		 $data['cuentas_anterior'] = $this->Libromayor_ingresos_model->get_libromayor_ingresos($tipo_cuenta, $mes-1);
		 $data['cuentas_anterior2'] = $this->Libromayor_ingresos_model->get_libromayor_ingresos($tipo_cuenta, $mes-2	);

		 $this->load->view('layouts/head');
		 $this->load->view('operacion/Libromayor_ingresos',$data);
	 }
}
