<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    if(!$this->session->userdata('login')){
      redirect(base_url());
    }
    $this->load->helper('codegen_helper');
	  $this->load->model('ventas_model','',TRUE);
    $this->data['menuVentas'] = 'Ventas';
    
  }

  function index()
  {
      $this->gerenciar();
  }

  function gerenciar(){

  		  $this->data['results'] = $this->ventas_model->get('venta','*','',$limit=10,$this->uri->segment(3));
        $this->load->view('templates/header');
        $this->load->view('ventas/ventas',$this->data);
        $this->load->view('templates/footer');
      }

      function adicionar(){


        $this->load->library('form_validation');

        $data['custom_error'] = '';


        if ($this->form_validation->run('vendas') == false) {
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



            $nitci = $this->input->post('clientes_id');
            $sucursal = $this->ventas_model->datoSucursal();
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
                'nitci' => $nitci

            );

           //$this->ventas_model->add('venta', $data, true);

            //redirect(base_url('ventas/editar'));

            if (is_numeric($id = $this->ventas_model->add('venta', $data, true)) ) {
             //$this->session->set_flashdata('success','Venda iniciada com sucesso, adicione os produtos.');
             redirect(base_url('ventas/editar/'.$id));
         } else {

             $data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro.</p></div>';
         }

        }

        $data['sucursal'] = $this->ventas_model->datoSucursal();
        $this->load->view('templates/header');
        $this->load->view('ventas/adicionarVenta',$data);
        $this->load->view('templates/footer');
      }




      function editar() {


      if(!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))){
          $this->session->set_flashdata('error','Item não pode ser encontrado, parâmetro não foi passado corretamente.');
          redirect('admin');
      }

       $this->load->library('form_validation');
       $data['custom_error'] = '';

       if ($this->form_validation->run('vendas') == false) {
           $data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
       } else {

           /*$dataVenda = $this->input->post('dataVenda');

           try {

               $dataVenda = explode('/', $dataVenda);
               $dataVenda = $dataVenda[2].'-'.$dataVenda[1].'-'.$dataVenda[0];

           } catch (Exception $e) {
              $dataVenda = date('Y/m/d');
           }*/
           $fecha = date('d/m/Y');

           try {

             $fecha  = explode('/', $fecha );
             $fecha  = $fecha [2].'-'.$fecha [1].'-'.$fecha [0];

           } catch (Exception $e) {
            $fecha  = date('Y/m/d');
           }

           $ci_empleado = $this->session->userdata('ci_empleado');



           $nitci = $this->input->post('clientes_id');
           $sucursal = $this->ventas_model->datoSucursal();
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
             'nitci' => $nitci

           );


           /*$data = array(
               //'dataVenda' => $dataVenda,
            //   'usuarios_id' => $this->input->post('usuarios_id'),
               'nitci' => $this->input->post('clientes_id')
           );*/

           $data = array(

               'fecha' => $fecha,
               'nit_sucursal' => $key->nit_sucursal,
               'ci_empleado' => $ci_empleado,
               'nitci' => $nitci

           );
           if ($this->ventas_model->edit('venta', $data, 'numero_factura', $this->input->post('idVendas')) == TRUE) {
               redirect(base_url() . 'venta/editar'.$this->input->post('idVendas'));
           } else {
               $data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro</p></div>';
           }
       }
       $data['sucursal'] = $this->ventas_model->datoSucursal();
       $data['result'] = $this->ventas_model->getById($this->uri->segment(3));
       $data['produtos'] = $this->ventas_model->getProdutos($this->uri->segment(3));
       $data['venta'] = $this->ventas_model->datosVenta($this->uri->segment(3));
       $this->load->view('templates/header');
       $this->load->view('ventas/editarVenta',$data);
       $this->load->view('templates/footer');

   }


   public function faturar() {

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';


        if ($this->form_validation->run('receita') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {

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

                $venda = $this->input->post('vendas_id');
                #$this->db->set('faturado',1);
                $this->db->set('monto',$bolivianos);
                $this->db->set('venta_total',$this->input->post('valor'));
                $this->db->set('estado','FACTURADO');
                $this->db->where('numero_factura', $venda);
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

        }

        $this->session->set_flashdata('error','Ocorreu um erro ao tentar faturar venda.');
        $json = array('result'=>  false);
        echo json_encode($json);

    }


    public function adicionarProduto(){


        $this->load->library('form_validation');
        $this->form_validation->set_rules('quantidade', 'Quantidade', 'trim|required|xss_clean');
        $this->form_validation->set_rules('idProduto', 'Produto', 'trim|required|xss_clean');
        $this->form_validation->set_rules('idVendasProduto', 'Vendas', 'trim|required|xss_clean');

        if($this->form_validation->run() == false){
           echo json_encode(array('result'=> false));
        }
        else{

            $preco = $this->input->post('preco');
            $quantidade = $this->input->post('quantidade');
            //$subtotal = $this->input->post('preco') + $this->input->post('quantidade');
            $subtotal= ($quantidade * $preco);
            echo $subtotal;
            $produto = $this->input->post('idProduto');
            $data = array(
                'cantidad'=> $quantidade,
                'sub_total'=> $subtotal,
                'cod_producto'=> $produto,
                'numero_factura'=> $this->input->post('idVendasProduto'),
            );

            if($this->ventas_model->add('detalle', $data) == true){
                echo json_encode(array('result'=> true));
            }else{
                echo json_encode(array('result'=> false));
            }

        }
    }

    function excluir(){

      $id =  $this->uri->segment(3);
      if ($id == null){
            $this->session->set_flashdata('error','Erro ao tentar excluir venda.');
            redirect(base_url().'admin');
        }

      echo '$id';

      #$this->db->where('vendas_id', $id);
      #$this->db->delete('itens_de_vendas');
      $estado = 'ANULADO';
      $this->db->set('estado',$estado);
      $this->db->where('numero_factura', $id);
      $this->db->update('venta');


      $this->session->set_flashdata('success','Venda excluída com sucesso!');
      redirect(base_url().'ventas');

  }

    function excluirProduto(){

         $ID = $this->input->post('idProduto');
         if($this->ventas_model->delete('detalle','cod_detalle',$ID) == true){
             $quantidade = $this->input->post('quantidade');
             $produto = $this->input->post('produto');
          //   $sql = "UPDATE produtos set estoque = estoque + ? WHERE idProdutos = ?";
            // $this->db->query($sql, array($quantidade, $produto));

             echo json_encode(array('result'=> true));
         }
         else{
             echo json_encode(array('result'=> false));
         }
 }



      public function autoCompleteProduto(){

        if (isset($_GET['term'])){
            $q = strtolower($_GET['term']);
            $this->ventas_model->autoCompleteProduto($q);
        }

    }

    public function autoCompleteCliente(){

        if (isset($_GET['term'])){

            $q = strtolower($_GET['term']);
            $this->ventas_model->autoCompleteCliente($q);
        }

    }

    public function autoCompleteUsuario(){

        if (isset($_GET['term'])){
            $q = strtolower($_GET['term']);
            $this->ventas_model->autoCompleteUsuario($q);
        }

    }

    }