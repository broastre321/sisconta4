<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autorizacion extends CI_Controller{

  public function __construct()
  {
        parent::__construct();
        if(!$this->session->userdata('tipo')){
          redirect(base_url());
        }
        $this->load->model('autorizacion_model','',TRUE);
        $this->load->model('ventas_model','',TRUE);
  }

  function index()
  {
     $this->load->library('form_validation');
     $data['custom_error'] = '';

    # $data['sucursal'] = $this->ventas_model->datoSucursal();
    # $data['result'] = $this->ventas_model->getById($this->uri->segment(3));
    # $data['produtos'] = $this->ventas_model->getProdutos($this->uri->segment(3));
    # $data['venta'] = $this->ventas_model->datosVenta($this->uri->segment(3));
     $this->load->view('templates/header');
     $this->load->view('Autorizacion/autorizacion',$data);
     $this->load->view('templates/footer');
  }
  public function registrar()
  {
    if(isset($_POST['grabar']) and $_POST['grabar'] == 'si')
    {
      //SI EXISTE EL CAMPO OCULTO LLAMADO GRABAR CREAMOS LAS VALIDACIONES
      $this->form_validation->set_rules('autorizacion','Numero de Autorizacion','required|trim');

      //SI HAY ALGÚNA REGLA DE LAS ANTERIORES QUE NO SE CUMPLE MOSTRAMOS EL MENSAJE
      //EL COMODÍN %s SUSTITUYE LOS NOMBRES QUE LE HEMOS DADO ANTERIORMENTE, EJEMPLO,
      //SI EL NOMBRE ESTÁ VACÍO NOS DIRÍA, EL NOMBRE ES REQUERIDO, EL COMODÍN %s
      //SERÁ SUSTITUIDO POR EL NOMBRE DEL CAMPO
      $this->form_validation->set_message('required', 'El %s es requerido');

      //SI ALGO NO HA IDO BIEN NOS DEVOLVERÁ AL INDEX MOSTRANDO LOS ERRORES
      if($this->form_validation->run()==FALSE)
      {
        $this->index();
      }
      else{
      //EN CASO CONTRARIO PROCESAMOS LOS DATOS

      #	$correo = $this->input->post('correo');
      #	$password = $this->input->post('pass');
        //ENVÍAMOS LOS DATOS AL MODELO CON LA SIGUIENTE LÍNEA
        #$this->Autorizacion_model->update($autorizacion);
        $sucursal = $this->ventas_model->datoSucursal();
        foreach ($sucursal as $key ) {
              $key->nit_sucursal;
              $key->llave_dosificacion;
              $key->numero_autorizacion;
              $key->direccion;
              $key->telefono;
        }
        $this->db->truncate('detalle');
        $sql = "SET foreign_key_checks = 0";
        $this->db->query($sql);
        $this->db->truncate('venta');
        $sql = "SET foreign_key_checks = 1";
        $this->db->query($sql);
        $autorizacion = $this->input->post('autorizacion');
        $nit = $key->nit_sucursal;
        $this->db->set('numero_autorizacion',$autorizacion);
        $this->db->where('nit_sucursal', $nit);
        $this->db->update('sucursal');

        redirect(base_url().'admin');

      }
    }

  }

}