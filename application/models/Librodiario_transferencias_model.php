<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Librodiario_transferencias_model extends CI_Model
{
    public function _construct()
    {
      parent::_construct();
    }



     /*public function get_ingresos(){
         $this->db->select('a.idficha.*, a.carnet.*, a.detalle.*,a.forma_pago.*,a.monto.*,b.nombre.*,d.tipo.*,c.nombre');
         $this->db->from('ficha.a,cliente.b,cuenta_ingreso.c,tipo_ficha.d');
         $this->db->join('cliente','cliente.idcliente = ficha.cliente_idcliente');
         $this->db->join('tipo_ficha','tipo_ficha.idtipo_ficha = ficha.tipo_ficha_idtipo_ficha');
         $this->db->join('cuenta_ingreso','cuenta_ingreso.codigo = ficha.cuenta_ingreso_id');
         $this->db->where('ficha.tipo_ficha',1);
         return $query = $this->db->get();*/
    public function get_transferencias_ingreso_filtro($inicio, $fin)
    {
      # code...
      $query = "SELECT *
                   FROM transferencias t
                   WHERE t.tipo_cuentas_idtipo_cuentas = '1'
                   AND t.fecha BETWEEN '$inicio' AND '$fin'
                   GROUP BY t.idtransferencias";
        return $this->db->query($query)->result();
    }
     public function get_transferencias_egreso_filtro($inicio, $fin)
    {
      # code...
      $query = "SELECT *
                   FROM transferencias t
                   WHERE t.tipo_cuentas_idtipo_cuentas = '2'
                   AND t.fecha BETWEEN '$inicio' AND '$fin'
                   GROUP BY t.idtransferencias";
        return $this->db->query($query)->result();
    }
public function get_transferecias_filtro($inicio, $fin)
    {
      # code...
      $query = "SELECT *
                   FROM transferencias t
                   where t.fecha BETWEEN '$inicio' AND '$fin'
                   GROUP BY t.idtransferencias";
        return $this->db->query($query)->result();
    }

    public function get_transferencias(){
        $this->db->select('transferencias.*');
         $this->db->from('transferencias');

        return $query = $this->db->get()->result();



 /*$this->db->select('cuentas.*');
         $this->db->from('cuentas');
        $this->db->where('cuentas.tipo_cuentas_idtipo_cuentas',1);
         return $query = $this->db->get()->result();*/

     }
     public function get_transferencias_ingreso(){
        $this->db->select('transferencias.*');
         $this->db->from('transferencias');
         $this->db->where('transferencias.tipo_cuentas_idtipo_cuentas',1);

        return $query = $this->db->get()->result();



 /*$this->db->select('cuentas.*');
         $this->db->from('cuentas');
        $this->db->where('cuentas.tipo_cuentas_idtipo_cuentas',1);
         return $query = $this->db->get()->result();*/

     }
     public function get_transferencias_egreso(){
        $this->db->select('transferencias.*');
         $this->db->from('transferencias');
         $this->db->where('transferencias.tipo_cuentas_idtipo_cuentas',2);

        return $query = $this->db->get()->result();



 /*$this->db->select('cuentas.*');
         $this->db->from('cuentas');
        $this->db->where('cuentas.tipo_cuentas_idtipo_cuentas',1);
         return $query = $this->db->get()->result();*/

     }
}
?>
