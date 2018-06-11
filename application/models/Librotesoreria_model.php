<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Librotesoreria_model extends CI_Model
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


    public function buscarLibroTesoreria($tipo, $mes){
    /*  $this->db->select('cuentas.*');
      $this->db->from('cuentas');
      $this->db->where('cuentas.tipo_cuentas_idtipo_cuentas',1);
      return $query = $this->db->get()->result();*/
      $query = "SELECT c.*, SUM(f.monto) AS monto FROM ficha f, cuentas c, tipo_cuentas t
                WHERE t.idtipo_cuentas = c.tipo_cuentas_idtipo_cuentas
                AND c.codigo = f.cuentas_codigo
                AND f.tipo_cuenta = '$tipo'
                AND month(f.fecha) = $mes
                AND year(f.fecha)= '2017'
                GROUP BY c.nombre";
        return $this->db->query($query)->result();

   }
   public function totalLibroTesoreria($tipo, $mes)
   {
     $query = "SELECT c.*, SUM(f.monto) AS monto FROM ficha f, cuentas c, tipo_cuentas t
               WHERE t.idtipo_cuentas = c.tipo_cuentas_idtipo_cuentas
               AND c.codigo = f.cuentas_codigo
               AND f.tipo_cuenta = '$tipo'
               AND month(f.fecha) = 01 <= $mes
               AND year(f.fecha)= '2017'
               GROUP BY c.nombre";
       return $this->db->query($query)->result();
   }
}
