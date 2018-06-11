<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autorizacion_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();

  }
  function update($autorizacion) {
    $numautorizacion = $this->input->post('autorizacion');
    $nit_sucursal = '1665979';
    $data = array(
			'numero_autorizacion' => $numautorizacion
		);
    $this->db->where('nit_sucursal', $nit_sucursal);
    $this->db->update('sucursal', $data);
  }

}
