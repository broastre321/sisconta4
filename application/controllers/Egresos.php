<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Egresos extends CI_Controller {
	public function __construct()
     {
        parent::__construct();
      	if(!$this->session->userdata('tipo'))
      	{
        	redirect(base_url());
      	}

   		$this->load->model('Fichaegresos_model');


     }

	public function index()
	{
             $data['arraydecontrolador'] = $this->Fichaegresos_model->obtener_Tipoegresos();
		$this->load->view('formulario');
		$this->load->view('operacion/egresos',$data);


        $this->load->library('calendar');
                //$this->load->model('FichaIngresos_model');

    }
	 public function registrar()
	   {            $cliente =       $this->input->post('cliente');
                        $carnet =        $this->input->post('carnet');
                        $fecha =        $this->input->post('fecha');
			$monto =        $this->input->post('monto');
			$detalle =      $this->input->post('detalle');
			$forma_pago =   $this->input->post('forma_pago');
			$tipo_documento = $this->input->post('tipo_documento');
                        $tipo_cuenta = $this->input->post('tipo_cuenta');
                        $idcuentas= $this->input->post('tipo_egreso');// saca de cuentas el id
			$data = array(
			'nombre'=> $cliente
			);
      $idcliente = $this->Fichaegresos_model->registrar_cliente('cliente',$data);
			//HACER UN QUERY CON EL ID DEL CLIENTE DONDE SE OBTIENEN TODOS SUS DATOS.
			// $datos_cliente;

			$data1 = array(
                        'carnet'        => $carnet,
			'monto'		=> $monto,
			'fecha'		=> $fecha,
			'detalle'	=> $detalle,
			'forma_pago'	=> $forma_pago,
			'tipo_cuenta'	=> $tipo_cuenta,
			'tipo_documento'	=> $tipo_documento,
			'cliente_idcliente'	=> $idcliente,        // id que vuelve
                        'cuentas_codigo'	=> $idcuentas   //entra el id de cuentas
			);


		if ($this->Fichaegresos_model->registrar_ficha('ficha',$data1))
		// TIENES QUE OBTENER EL ID DE LA FICHA
		
		{
	    	$this->load->view('formulario');
	        $this->load->view('operacion/engresos');

                $this->load->model('Fichaegresos_model');
		}
		else
        {

		 	$this->load->view('formulario');
			$this->load->view('operacion/egresos');
      $this->load->model('Fichaegresos_model');
		 }

         }

	   }
