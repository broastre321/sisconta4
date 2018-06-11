<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agregarempleados extends CI_Controller
{
	public function __construct()
  {
      	parent::__construct();
      	if(!$this->session->userdata('tipo'))
        {redirect(base_url());
      	}
        
    	$this->load->model('Abm_model'); //carga el modelo
  }

	public function index()
	{
                    /* en lugar de admin carga agregar empleado*/
		$this->load->view('formulario');
		$this->load->view('empleados/agregarempleados');
		
                
		$boton_enviar =$this->input->post('enviar');
                $boton_atras =$this->input->post('atras');
	      if (isset($boton_enviar))
             {
	        $ci_empleado=$this->security->xss_clean(strip_tags($this->input->post('ci_empleado')));
	        $nombre_empleado=$this->security->xss_clean(strip_tags($this->input->post('nombre_empleado')));
	        $apellido_empleado=$this->security->xss_clean(strip_tags($this->input->post('apellido_empleado')));
	        $telefono=$this->security->xss_clean(strip_tags($this->input->post('telefono')));
	        $direccion=$this->security->xss_clean(strip_tags($this->input->post('direccion')));
                
          $usuario=$this->security->xss_clean(strip_tags($this->input->post('usuario')));
          $password=$this->security->xss_clean(strip_tags($this->input->post('password')));
          $tipo=$this->security->xss_clean(strip_tags($this->input->post('tipo')));
          $ci_gar=$this->security->xss_clean(strip_tags($this->input->post('ci_gar')));
          $garante=$this->security->xss_clean(strip_tags($this->input->post('garante')));
          $tef_gar=$this->security->xss_clean(strip_tags($this->input->post('tef_gar')));
          $dir_gar=$this->security->xss_clean(strip_tags($this->input->post('dir_gar')));

	        $data = array
              (
	          'ci_empleado'  => $ci_empleado,
	          'nombre_empleado' => $nombre_empleado,
	          'apellido_empleado' => $apellido_empleado,
	          'telefono'      => $telefono,
	          'direccion'     => $direccion,
              'usuario'  => $usuario,
              'password' => $password,
              'tipo'      => $tipo,
              'ci_gar'      => $ci_gar,
              'garante'     => $garante,
              'tef_gar'      => $tef_gar,
              'dir_gar'     => $dir_gar
	       );

	        //COMPROBAMOS QUE TODOS LOS CAMPOS TENGAN DATOS

	        if(isset($nombre_empleado) && !empty($nombre_empleado) && isset($ci_empleado) && !empty($ci_empleado)){

	          //SI LOS CAMPOS ESTAN CORRECTOS LOS INSERTAMOS EN LA BASE DE DATOS
	          //LLAMAMOS AL MODELO Clientes_model QUE SE ENCARGARÁ DE INGRESAR LOS DATOS

	          $this->Abm_model->insert_data_empleado("empleado",$data);

	          redirect(base_url("agregarempleados"));

	        }
	      }
                    
	  }
}
