<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transferencias extends CI_Controller {
	public function __construct()
     {
        parent::__construct();
      	if(!$this->session->userdata('tipo'))
      	{
        	redirect(base_url());
      	}
        
   		$this->load->model('Fichatransferencias_model');     
     }

	public function index()
	{
		$this->load->view('formulario');
		$this->load->view('operacion/vista_transferencias');
	
                
        $this->load->library('calendar');
                //$this->load->model('FichaIngresos_model')	
    }
	 public function registrar()
	   {      	

              //  motivo
             //  monto 
             //fecha
	        	$motivo = $this->input->post('motivo');
                         $monto = $this->input->post('monto');
	        	$fecha = $this->input->post('fecha');
	        	$hacia=$this->input->post('tipo_tesoreria');//si es caja es ingreso
	      		$de='CAJA';
	      		$tipo_tesoreria=2;
              if ($hacia=='CAJA')
              {
                 $de='BANCO';
                 $tipo_tesoreria=1;
              };

                
		
			$data1 = array(
			'MOTIVO'    	=> $motivo,
			'MONTO'		=> $monto,
			'fecha'		=> $fecha,
                        'A'		=> $hacia,
			'DE'            => $de,
            'tipo_cuentas_idtipo_cuentas'	=> $tipo_tesoreria,
			
			);


			
		if ($this->Fichatransferencias_model->registrar_transferencias('transferencias',$data1))
		{
	    	$this->load->view('formulario');
	        $this->load->view('operacion/vista_transferencias');
		}
		else
                 {
 			//$this->session->set_flashdata('error','No se registraron los datos');
		 	$this->load->view('formulario');
			$this->load->view('operacion/vista_transferencias');
		 }
    




         }
              
	   }
              
       



