<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facturacion extends CI_Controller {
	public function __construct()
  {
        parent::__construct();
        if(!$this->session->userdata('tipo')){
          redirect(base_url());
        }
        $this->load->model('abm_model');
        $this->load->model('ventas_model');

  }
  public function facturar()
  {
      $data['custom_error'] = '';



            $bolivianos = $this->input->post('bolivianos');

          //  $recebimento = $this->input->post('recebimento');
            $this->session->set_userdata('numero_factura_session',set_value('descricao'));

            $data = array(
                #'numero_factura' => set_value('descricao'),
                'venta_total' => $this->input->post('valor'),
              //  'clientes_id' => $this->input->post('clientes_id'),
                'monto' => $bolivianos,
              #  'data_vencimento' => $vencimento,
              #  'data_pagamento' => $recebimento,
              #  'baixado' => $this->input->post('recebido'),
              #  'cliente_fornecedor' => set_value('cliente'),
              #  'forma_pgto' => $this->input->post('formaPgto'),
              #  'tipo' => $this->input->post('tipo')
            );

            if (TRUE) {

                $venta = $this->input->post('ventas_id');
                #$this->db->set('faturado',1);
                $this->db->set('monto',$bolivianos);
                $this->db->set('venta_total',$this->input->post('valor'));
                $this->db->set('estado','FACTURADO');
                $this->db->where('numero_factura', $venta);
                $this->db->update('venta');
                $json = array('result'=>  true);
                echo json_encode($json);
                die();
            } else {
                $this->session->set_flashdata('error','Ocorreu um erro ao tentar faturar venda.');
                $json = array('result'=>  false);
                echo json_encode($json);
                die();
            }

        

        $this->session->set_flashdata('error','Ocorreu um erro ao tentar faturar venda.');
        $json = array('result'=>  false);
        echo json_encode($json);
  }

	public function edit()
	{

		if(!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))){
          $this->session->set_flashdata('error','no es un numero de factura valido.');
          redirect('admin');
      	}

       $data['custom_error'] = '';
	    $this->form_validation->set_rules('nitci_id', 'Carnet Identidad o el NITCI', 'trim|required');

		$this->form_validation->set_message('required', 'El %s esta vacio');

       if ($this->form_validation->run() == false) {
           $data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
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

           if ($this->ventas_model->edit('venta', $data, 'numero_factura', $this->uri->segment(3))) {
               redirect(base_url() . 'facturacion/edit/'.$this->input->post('idVendas'));
           } else {
               $data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro</p></div>';
           }
       }

       $data['sucursal'] = $this->ventas_model->Sucursal();
       $data['result'] = $this->ventas_model->getById($this->uri->segment(3));
       $data['produtos'] = $this->ventas_model->getProdutos($this->uri->segment(3));
       $data['venta'] = $this->ventas_model->datosVenta($this->uri->segment(3));
       
     $this->load->view('templates/header');
     $this->load->view('ventas/facturacion', $data);
	$this->load->view('templates/footer');

		
	  }

    public function adicionarProducto(){
        $this->form_validation->set_rules('cantidad', 'Cantidad', 'trim|required');
        $this->form_validation->set_rules('cod_prod_id', 'Producto', 'trim|required');
        $this->form_validation->set_rules('precio', 'Precio', 'trim|required');


        if($this->form_validation->run() == false){
           echo json_encode(array('result'=> false));
           redirect('admin','refresh');
        }
        else{

            $precio = $this->input->post('precio');
            $cantidad = $this->input->post('cantidad');
            $subtotal= ($cantidad * $precio);
            
            $producto = $this->input->post('cod_prod_id');
            $data = array(
                'sub_total'=> $subtotal,
                'cantidad'=> $cantidad,
                'cod_producto'=> $producto,
                'numero_factura'=> $this->input->post('idVendasProduto'),
            );

            if($this->ventas_model->add('detalle', $data, true) == true){
                $stockSelect = $this->ventas_model->total($producto);
                $data= $stockSelect->stock;
                $nuevaCantidad = $data -$cantidad;
                $this->ventas_model->reducir('producto',$producto,$nuevaCantidad);
                echo json_encode(array('result'=> print_r($data)));

            }else{
              
                echo json_encode(array('result'=> false));
              
            }

        }
    }

	  public function AutocompleteCodProd()
	  {
	  	if (is_numeric($_GET['term'])) {
	  		if (isset($_GET['term'])){
		            $codigo = strtolower($_GET['term']);
		            $this->ventas_model->autoCompleteCod($codigo);
		        }
	  	}
	  	else
	  	{
	  		if (isset($_GET['term'])){
		            $nombre = strtolower($_GET['term']);
		            $this->ventas_model->autoCompleteProd($nombre);
		        }
	  	}
			  	 
	  }
}