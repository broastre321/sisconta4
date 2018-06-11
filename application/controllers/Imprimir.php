<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Imprimir extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
                if(!$this->session->userdata('tipo'))
                 {
                        redirect(base_url());
                  }
                      //  $this->load->helper('numero');
                       // $this->load->helper('codigo');
                        $this->load->model('pdf_model');
         }

	public function index()
	{
		//$this->load->library('ciqrcode');

		//$factura = $this->session->userdata('numero_factura_session');
		//$data['sucursal'] = $this->ventas_model->Sucursal();
   		//$data['venta'] = $this->ventas_model->getById($factura); //scar los datos de venta mediante el numero de factura
               //	$data['produtos'] = $this->ventas_model->getProdutos($factura); //sacanos los datos de los productos comprados con el numero de factura
   		$data['tabla2'] = $this->pdf_model->tabla();
        $this->load->view('impresion',$data);
	}

}

/* End of file Imprimir.php */
/* Location: ./application/controllers/Imprimir.php */