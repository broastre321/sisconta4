<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Agregarcuentas extends CI_Controller

{
       public function __construct()
     {             parent::__construct();
                if(!$this->session->userdata('tipo'))
                {
                        redirect(base_url());
                }

                        $this->load->model('agregarcuentas_model');
                       $this->load->model('listascuentas_model');
                       
                 
      }
	public function index()
      {    $this->load->library('calendar'); //cargar el calendario
      
            //capturamos para las listas

         $uno = $this->listascuentas_model->obteneringreso();
          $datos['array1'] = $uno;// en la vista se maneja con "array1"
           
           $dos = $this->listascuentas_model->obteneregreso();
          $datos['array2'] = $dos; // en la vista se maneja con "array2"
            
      
           //capturamos para las listas
       
		$this->load->view('formulario');
		$this->load->view('operacion/vista_agregarcuentas');
                
               $this->load->view('operacion/vista_listacuentas',$datos);
               
                $this->load->library('calendar');
                   
      }
  
      
      
      
	   public function registrar()
	  {     $codigo = $this->input->post('codigo');
	        $nombre = $this->input->post('nombre');
                $fecha = $this->input->post('fecha');
                $tipo_cuentas = $this->input->post('tipo_cuentas');//1 o 2 ,ingreso o egreso
 		
 			$data1 = array(
			'codigo'                => $codigo,
			'nombre'		=> $nombre,
                        'fecha'		        => $fecha,
                       'tipo_cuentas_idtipo_cuentas'=> $tipo_cuentas //llave foranea 1 y 2
			);

                  $this->agregarcuentas_model->registrar('cuentas',$data1);      
                        
                    /*    
                      if($tipo_cuentas==1)
                      {    
			$this->agregarcuentas_model->registrar('cuenta_ingreso',$data1);
                       }
                      else
                      {
                          if($tipo_cuentas==2)
                          {
                          $this->agregarcuentas_model->registrar('cuenta_egreso',$data1);
                          }   
                     }  
                   
                   */
           }
 
                public function recargar()
                 {   //capturamos DOS veces
                  $uno = $this->listascuentas_model->obteneringreso();
                  $datos3['array1'] = $uno;// en la vista se maneja con "array1"
                  $dos = $this->listascuentas_model->obteneregreso();
                  $datos3['array2'] = $dos; // en la vista se maneja con "array2

                                $this->load->view('formulario');
                                $this->load->view('operacion/vista_agregarcuentas');
                                $this->load->view('operacion/vista_listacuentas',$datos3);
                                $this->load->library('calendar');   
                 }
 }
              
       



