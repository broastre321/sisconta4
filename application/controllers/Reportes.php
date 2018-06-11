<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller {
	public function __construct()
  {
        parent::__construct();
      	if(!$this->session->userdata('tipo')){
        	redirect(base_url());
      	}
   		$this->load->model('Abm_model');
                
  }

	public function index()
	{

		$this->load->view('templates/header');
		$this->load->view('operacion/reportes');
		$this->load->view('templates/footer');
                
       
                
		$btn_enviar =$this->input->post('enviar');
	      if (isset($btn_enviar)) {

	        //ASIGNAMOS UNA VARIABLE A CADA CAMPO RECIBIDO

	        $cod_producto=$this->security->xss_clean(strip_tags($this->input->post('cod_producto')));
	        $nombre_producto=$this->security->xss_clean(strip_tags($this->input->post('nombre_producto')));
	        $precio=$this->security->xss_clean(strip_tags($this->input->post('precio')));
	        $categoria=$this->security->xss_clean(strip_tags($this->input->post('categoria')));
	        $stock=$this->security->xss_clean(strip_tags($this->input->post('stock')));

	        $data = array(
	          'cod_producto'  => $cod_producto,
	          'nombre_producto' => $nombre_producto,
	          'precio'      => $precio,
	          'categoria'      => $categoria,
	          'stock'     => $stock,


	         );

	        //COMPROBAMOS QUE TODOS LOS CAMPOS TENGAN DATOS

	        if(isset($nombre_producto) && !empty($nombre_producto) && isset($cod_producto) && !empty($cod_producto)){

	          //SI LOS CAMPOS ESTAN CORRECTOS LOS INSERTAMOS EN LA BASE DE DATOS
	          //LLAMAMOS AL MODELO Clientes_model QUE SE ENCARGARÁ DE INGRESAR LOS DATOS

	          $this->Abm_model->insert_data_producto("producto",$data);

	          redirect(base_url("agregarproductos"));

	        }

	      }
	      
	  }
}
