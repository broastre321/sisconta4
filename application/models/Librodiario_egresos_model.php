<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Librodiario_egresos_model extends CI_Model
{
    public function _construct()
    {
      parent::_construct();
    }

    public function registrar_cliente($table, $data)
    {
        $this->db->insert($table,$data);
        return $this->db->insert_id(); //  registra en la base y luego extrae los datos como return
    }

    
     /*public function get_ingresos(){
         $this->db->select('a.idficha.*, a.carnet.*, a.detalle.*,a.forma_pago.*,a.monto.*,b.nombre.*,d.tipo.*,c.nombre');
         $this->db->from('ficha.a,cliente.b,cuenta_ingreso.c,tipo_ficha.d');
         $this->db->join('cliente','cliente.idcliente = ficha.cliente_idcliente');
         $this->db->join('tipo_ficha','tipo_ficha.idtipo_ficha = ficha.tipo_ficha_idtipo_ficha');
         $this->db->join('cuenta_ingreso','cuenta_ingreso.codigo = ficha.cuenta_ingreso_id');
         $this->db->where('ficha.tipo_ficha',1);
         return $query = $this->db->get();*/
public function get_egresos_filtro($inicio, $fin)
    {
      # code...
      $query = "SELECT *, c.nombre as nombre_cliente,f.fecha as fechaor
                   FROM ficha f,cliente c,cuentas u,tipo_cuentas t
                   WHERE c.idcliente = f.cliente_idcliente
                   AND u.codigo = f.cuentas_codigo
                   AND t.idtipo_cuentas = u.tipo_cuentas_idtipo_cuentas
                   AND f.fecha BETWEEN '$inicio' AND '$fin'
                   and t.idtipo_cuentas = 2
                   GROUP BY f.idficha";
        return $this->db->query($query)->result();
    }
     
    public function get_egresos(){
        $this->db->select('ficha.*,ficha.fecha as fechaor,cliente.*,cuentas.*,tipo_cuentas.*,cliente.nombre as nombre_cliente');
         $this->db->from('ficha');
        $this->db->join('cliente','cliente.idcliente = ficha.cliente_idcliente');
        $this->db->join('cuentas','cuentas.codigo = ficha.cuentas_codigo');
         $this->db->join('tipo_cuentas','tipo_cuentas.idtipo_cuentas = cuentas.tipo_cuentas_idtipo_cuentas');
        
         $this->db->where('tipo_cuentas.idtipo_cuentas',2);
        return $query = $this->db->get()->result();
 


 /*$this->db->select('cuentas.*');
         $this->db->from('cuentas');
        $this->db->where('cuentas.tipo_cuentas_idtipo_cuentas',1);
         return $query = $this->db->get()->result();*/
        
     }
}
?>
