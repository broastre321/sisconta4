<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agregarventa extends CI_Controller {
	public function __construct()
  {
    parent::__construct();
      if(!$this->session->userdata('tipo')){
        redirect(base_url());
      }
    $this->load->model('abm_model');
    $this->load->model('ventas_model');
     
  }

	public function index()
	{

		$data['custom_error'] = '';

		$this->form_validation->set_rules('nitci_id', 'Carnet Identidad o el NITCI', 'trim|required');

		$this->form_validation->set_message('required', 'El %s esta vacio');
		$this->form_validation->set_message('min_length', 'El %s debe tener al menos %s caracteres');
		$this->form_validation->set_message('max_length','El %s debe tener un maximo %s caracteres');

        if ($this->form_validation->run() == false) {
           $data['custom_error'] = (validation_errors() ? true : false);
        } else {

              $fecha = date('d/m/Y');

            try {

                $fecha  = explode('/', $fecha );
                $fecha  = $fecha [2].'-'.$fecha [1].'-'.$fecha [0];

            } catch (Exception $e) {
               $fecha  = date('Y/m/d');
            }

            $ci_empleado = $this->session->userdata('ci_empleado');

            $nitci = $this->input->post('nitci_id');

            $sucursal = $this->ventas_model->Sucursal();

            foreach ($sucursal as $key ) {
                    $key->nit_sucursal;
                    $key->llave_dosificacion;
                    $key->numero_autorizacion;
                    $key->direccion;
                    $key->telefono;
            }

            $data = array(

                'fecha' => $fecha,
                'nit_sucursal' => $key->nit_sucursal,
                'ci_empleado' => $ci_empleado,
                'cliente_nitci' => $nitci
            );

           //$this->ventas_model->add('venta', $data, true);

            //redirect(base_url('ventas/editar'));

            if (is_numeric($id = $this->ventas_model->add('venta', $data, true )) ) {
             //$this->session->set_flashdata('success','Venda iniciada com sucesso, adicione os produtos.');
             redirect(base_url('facturacion/edit/'.$id));
         } else {

             $data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro.</p></div>';
         }

        }
    $data['sucursal'] = $this->ventas_model->datoSucursal();
		$this->load->view('templates/header');
	//$this->load->view('ventas/adicionarventas',$data); //(realizar Ficha de EGRESOS con la vista de Ingresos)
		$this->load->view('templates/footer');

		
	  }
	  public function AutocompleteNitci()
	  {
	  	 if (isset($_GET['term'])){

            $nitci = strtolower($_GET['term']);
            $this->abm_model->autoCompleteNitci($nitci);
        }
	  }
}