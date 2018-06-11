<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ingresos extends CI_Controller {
	public function __construct()
     {
        parent::__construct();
      	if(!$this->session->userdata('tipo'))
      	{
        	redirect(base_url());
      	}
        
   		$this->load->model('Fichaingresos_model');
                
                
     }

	public function index()
	{
            $data['arraydecontrolador'] = $this->Fichaingresos_model->obtener_Tipoingreso();
            $this->load->view('formulario');
            $this->load->view('operacion/ingresos2', $data);
            $this->load->library('calendar');	
       } 
	 public function registrar()
	   {
                        $cliente =       $this->input->post('cliente');
                        $carnet =        $this->input->post('carnet');
                        $fecha =        $this->input->post('fecha');
			$monto =        $this->input->post('monto');
			$detalle =      $this->input->post('detalle');
			$forma_pago =   $this->input->post('forma_pago');
			$tipo_documento = $this->input->post('tipo_documento');
                        $idcuentas= $this->input->post('tipo_ingreso');// saca de cuentas el id
			
                        $data = array(
			'nombre' => $cliente
			);
                        
                        $idcliente = $this->Fichaingresos_model->registrar_cliente('cliente',$data);
                        

			$data1 = array(
			'carnet'        => $carnet,
			'monto'		=> $monto,
			'fecha'		=> $fecha,
			'detalle'	=> $detalle,
			'forma_pago'	=> $forma_pago,
			'tipo_cuenta'	=> 'caja',
			'tipo_documento'	=> $tipo_documento,
			'cliente_idcliente'	=> $idcliente,        // id que vuelve
                         'cuentas_codigo'	=> $idcuentas   //entra el id de cuentas
			);

		if ($this->Fichaingresos_model->registrar_ficha('ficha',$data1))
		{
	    	$this->load->view('formulario');
	        $this->load->view('operacion/ingresos2');
		}
		else
        {
 			
		 	$this->load->view('formulario');
			$this->load->view('operacion/ingresos2');
		 }
    




         }
              
	   }
              
       



