<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Relatorios extends CI_Controller{

    public function __construct() {
        parent::__construct();
        if(!$this->session->userdata('tipo')){
            redirect(base_url());
        }

        $this->load->model('Relatorios_model','',TRUE);
        $this->data['menuRelatorios'] = 'Relatórios';

    }


    public function index(){
        
        $this->load->view('templates/header');
        $this->load->view('relatorios/rel_vendas');
        $this->load->view('templates/footer');
    }

    public function vendasRapid(){
        
        $data['venta'] = $this->Relatorios_model->vendasRapid();
        

        $this->load->helper('mpdf');
        //$this->load->view('relatorios/imprimir/imprimirOs', $data);
        $html = $this->load->view('relatorios/imprimir/imprimirVendas', $data, true);
        pdf_create($html, 'relatorio_vendas' . date('d/m/y'), TRUE);
    }

    public function vendasCustom(){
        
        $dataInicial = $this->input->get('dataInicial');
        $dataFinal = $this->input->get('dataFinal');

        $data['venta'] = $this->Relatorios_model->vendasCustom($dataInicial,$dataFinal);
        $this->load->helper('mpdf');
        //$this->load->view('relatorios/imprimir/imprimirOs', $data);
        $html = $this->load->view('relatorios/imprimir/imprimirVendas', $data, true);
        pdf_create($html, 'relatorio_vendas' . date('d/m/y'), TRUE);
    }
}
