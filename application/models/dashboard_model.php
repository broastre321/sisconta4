<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class dashboard_model extends CI_Model
{
    public function _construct()
    {
      parent::_construct();
    }

    public function getIngresos()
    {
      $query = $this->db->query("SELECT sum(a.monto) as contador 
              FROM ficha a, cliente b, cuentas c, tipo_cuentas d
                WHERE b.idcliente = a.cliente_idcliente
                AND c.codigo = a.cuentas_codigo
                AND d.idtipo_cuentas = c.tipo_cuentas_idtipo_cuentas
                And c.tipo_cuentas_idtipo_cuentas = 1
                ORDER BY c.codigo");
      return $query->row();
   }
/* 


 */


   public function getEgresos()
    {
      $query = $this->db->query("SELECT  sum(a.monto) as contador2
               FROM ficha a, cliente b, cuentas c, tipo_cuentas d
                WHERE b.idcliente = a.cliente_idcliente
                AND c.codigo = a.cuentas_codigo
                AND d.idtipo_cuentas = c.tipo_cuentas_idtipo_cuentas
                And c.tipo_cuentas_idtipo_cuentas = 2
                ORDER BY c.codigo");
      return $query->row();
      
   }

public function getEnero()
    {
      $query = $this->db->query("SELECT count(a.idficha) as contador3
              FROM ficha a, cliente b, cuentas c, tipo_cuentas d
                WHERE b.idcliente = a.cliente_idcliente
                AND c.codigo = a.cuentas_codigo
                AND d.idtipo_cuentas = c.tipo_cuentas_idtipo_cuentas
                AND c.tipo_cuentas_idtipo_cuentas = 1
        AND a.fecha between '2017-01-01' and  '2017-01-30'
                ");
      return $query->row();
      
   }
   public function getfebrero()
    {
      $query = $this->db->query("SELECT count(a.idficha) as contador4
              FROM ficha a, cliente b, cuentas c, tipo_cuentas d
                WHERE b.idcliente = a.cliente_idcliente
                AND c.codigo = a.cuentas_codigo
                AND d.idtipo_cuentas = c.tipo_cuentas_idtipo_cuentas
                AND c.tipo_cuentas_idtipo_cuentas = 1
        AND a.fecha between '2017-02-01' and  '2017-02-30'
                ");
      return $query->row();
      
   }
   public function getmarzo()
    {
      $query = $this->db->query("SELECT count(a.idficha) as contador5
              FROM ficha a, cliente b, cuentas c, tipo_cuentas d
                WHERE b.idcliente = a.cliente_idcliente
                AND c.codigo = a.cuentas_codigo
                AND d.idtipo_cuentas = c.tipo_cuentas_idtipo_cuentas
                AND c.tipo_cuentas_idtipo_cuentas = 1
        AND a.fecha between '2017-03-01' and  '2017-03-30'
                ");
      return $query->row();
      
   }
   public function getabril()
    {
      $query = $this->db->query("SELECT count(a.idficha) as contador6
              FROM ficha a, cliente b, cuentas c, tipo_cuentas d
                WHERE b.idcliente = a.cliente_idcliente
                AND c.codigo = a.cuentas_codigo
                AND d.idtipo_cuentas = c.tipo_cuentas_idtipo_cuentas
                AND c.tipo_cuentas_idtipo_cuentas = 1
        AND a.fecha between '2017-04-01' and  '2017-04-30'
                ");
      return $query->row();
      
   }
   public function getmayo()
    {
      $query = $this->db->query("SELECT count(a.idficha) as contador7
              FROM ficha a, cliente b, cuentas c, tipo_cuentas d
                WHERE b.idcliente = a.cliente_idcliente
                AND c.codigo = a.cuentas_codigo
                AND d.idtipo_cuentas = c.tipo_cuentas_idtipo_cuentas
                AND c.tipo_cuentas_idtipo_cuentas = 1
        AND a.fecha between '2017-05-01' and  '2017-05-30'
                ");
      return $query->row();
      
   }
   public function getjunio()
    {
      $query = $this->db->query("SELECT count(a.idficha) as contador8
              FROM ficha a, cliente b, cuentas c, tipo_cuentas d
                WHERE b.idcliente = a.cliente_idcliente
                AND c.codigo = a.cuentas_codigo
                AND d.idtipo_cuentas = c.tipo_cuentas_idtipo_cuentas
                AND c.tipo_cuentas_idtipo_cuentas = 1
        AND a.fecha between '2017-06-01' and  '2017-06-30'
                ");
      return $query->row();
      
   }
   public function getjulio()
    {
      $query = $this->db->query("SELECT count(a.idficha) as contador9
              FROM ficha a, cliente b, cuentas c, tipo_cuentas d
                WHERE b.idcliente = a.cliente_idcliente
                AND c.codigo = a.cuentas_codigo
                AND d.idtipo_cuentas = c.tipo_cuentas_idtipo_cuentas
                AND c.tipo_cuentas_idtipo_cuentas = 1
        AND a.fecha between '2017-07-01' and  '2017-07-30'
                ");
      return $query->row();
      
   }
   public function getagosto()
    {
      $query = $this->db->query("SELECT count(a.idficha) as contador10
              FROM ficha a, cliente b, cuentas c, tipo_cuentas d
                WHERE b.idcliente = a.cliente_idcliente
                AND c.codigo = a.cuentas_codigo
                AND d.idtipo_cuentas = c.tipo_cuentas_idtipo_cuentas
                AND c.tipo_cuentas_idtipo_cuentas = 1
        AND a.fecha between '2017-08-01' and  '2017-08-30'
                ");
      return $query->row();
      
   }
   public function getseptiembre()
    {
      $query = $this->db->query("SELECT count(a.idficha) as contador11
              FROM ficha a, cliente b, cuentas c, tipo_cuentas d
                WHERE b.idcliente = a.cliente_idcliente
                AND c.codigo = a.cuentas_codigo
                AND d.idtipo_cuentas = c.tipo_cuentas_idtipo_cuentas
                AND c.tipo_cuentas_idtipo_cuentas = 1
        AND a.fecha between '2017-09-01' and  '2017-09-30'
                ");
      return $query->row();
      
   }
    public function getoctubre()
    {
      $query = $this->db->query("SELECT count(a.idficha) as contador12
              FROM ficha a, cliente b, cuentas c, tipo_cuentas d
                WHERE b.idcliente = a.cliente_idcliente
                AND c.codigo = a.cuentas_codigo
                AND d.idtipo_cuentas = c.tipo_cuentas_idtipo_cuentas
                AND c.tipo_cuentas_idtipo_cuentas = 1
        AND a.fecha between '2017-10-01' and  '2017-10-30'
                ");
      return $query->row();
      
   }
   public function getnoviembre()
    {
      $query = $this->db->query("SELECT count(a.idficha) as contador13
              FROM ficha a, cliente b, cuentas c, tipo_cuentas d
                WHERE b.idcliente = a.cliente_idcliente
                AND c.codigo = a.cuentas_codigo
                AND d.idtipo_cuentas = c.tipo_cuentas_idtipo_cuentas
                AND c.tipo_cuentas_idtipo_cuentas = 1
        AND a.fecha between '2017-11-01' and  '2017-11-30'
                ");
      return $query->row();
      
   }
   public function getdiciembre()
    {
      $query = $this->db->query("SELECT count(a.idficha) as contador14
              FROM ficha a, cliente b, cuentas c, tipo_cuentas d
                WHERE b.idcliente = a.cliente_idcliente
                AND c.codigo = a.cuentas_codigo
                AND d.idtipo_cuentas = c.tipo_cuentas_idtipo_cuentas
                AND c.tipo_cuentas_idtipo_cuentas = 1
        AND a.fecha between '2017-12-01' and  '2017-12-30'
                ");
      return $query->row();
      
   }

//////////////////////////////////////////////////////////////////////
   public function getEnero2()
    {
      $query = $this->db->query("SELECT count(a.idficha) as contador3
              FROM ficha a, cliente b, cuentas c, tipo_cuentas d
                WHERE b.idcliente = a.cliente_idcliente
                AND c.codigo = a.cuentas_codigo
                AND d.idtipo_cuentas = c.tipo_cuentas_idtipo_cuentas
                AND c.tipo_cuentas_idtipo_cuentas = 2
        AND a.fecha between '2017-01-01' and  '2017-01-30'
                ");
      return $query->row();
      
   }
   public function getfebrero2()
    {
      $query = $this->db->query("SELECT count(a.idficha) as contador4
              FROM ficha a, cliente b, cuentas c, tipo_cuentas d
                WHERE b.idcliente = a.cliente_idcliente
                AND c.codigo = a.cuentas_codigo
                AND d.idtipo_cuentas = c.tipo_cuentas_idtipo_cuentas
                AND c.tipo_cuentas_idtipo_cuentas = 2
        AND a.fecha between '2017-02-01' and  '2017-02-30'
                ");
      return $query->row();
      
   }
   public function getmarzo2()
    {
      $query = $this->db->query("SELECT count(a.idficha) as contador5
              FROM ficha a, cliente b, cuentas c, tipo_cuentas d
                WHERE b.idcliente = a.cliente_idcliente
                AND c.codigo = a.cuentas_codigo
                AND d.idtipo_cuentas = c.tipo_cuentas_idtipo_cuentas
                AND c.tipo_cuentas_idtipo_cuentas = 2
        AND a.fecha between '2017-03-01' and  '2017-03-30'
                ");
      return $query->row();
      
   }
   public function getabril2()
    {
      $query = $this->db->query("SELECT count(a.idficha) as contador6
              FROM ficha a, cliente b, cuentas c, tipo_cuentas d
                WHERE b.idcliente = a.cliente_idcliente
                AND c.codigo = a.cuentas_codigo
                AND d.idtipo_cuentas = c.tipo_cuentas_idtipo_cuentas
                AND c.tipo_cuentas_idtipo_cuentas = 2
        AND a.fecha between '2017-04-01' and  '2017-04-30'
                ");
      return $query->row();
      
   }
   public function getmayo2()
    {
      $query = $this->db->query("SELECT count(a.idficha) as contador7
              FROM ficha a, cliente b, cuentas c, tipo_cuentas d
                WHERE b.idcliente = a.cliente_idcliente
                AND c.codigo = a.cuentas_codigo
                AND d.idtipo_cuentas = c.tipo_cuentas_idtipo_cuentas
                AND c.tipo_cuentas_idtipo_cuentas = 2
        AND a.fecha between '2017-05-01' and  '2017-05-30'
                ");
      return $query->row();
      
   }
   public function getjunio2()
    {
      $query = $this->db->query("SELECT count(a.idficha) as contador8
              FROM ficha a, cliente b, cuentas c, tipo_cuentas d
                WHERE b.idcliente = a.cliente_idcliente
                AND c.codigo = a.cuentas_codigo
                AND d.idtipo_cuentas = c.tipo_cuentas_idtipo_cuentas
                AND c.tipo_cuentas_idtipo_cuentas = 2
        AND a.fecha between '2017-06-01' and  '2017-06-30'
                ");
      return $query->row();
      
   }
   public function getjulio2()
    {
      $query = $this->db->query("SELECT count(a.idficha) as contador9
              FROM ficha a, cliente b, cuentas c, tipo_cuentas d
                WHERE b.idcliente = a.cliente_idcliente
                AND c.codigo = a.cuentas_codigo
                AND d.idtipo_cuentas = c.tipo_cuentas_idtipo_cuentas
                AND c.tipo_cuentas_idtipo_cuentas = 2
        AND a.fecha between '2017-07-01' and  '2017-07-30'
                ");
      return $query->row();
      
   }
   public function getagosto2()
    {
      $query = $this->db->query("SELECT count(a.idficha) as contador10
              FROM ficha a, cliente b, cuentas c, tipo_cuentas d
                WHERE b.idcliente = a.cliente_idcliente
                AND c.codigo = a.cuentas_codigo
                AND d.idtipo_cuentas = c.tipo_cuentas_idtipo_cuentas
                AND c.tipo_cuentas_idtipo_cuentas = 2
        AND a.fecha between '2017-08-01' and  '2017-08-30'
                ");
      return $query->row();
      
   }
   public function getseptiembre2()
    {
      $query = $this->db->query("SELECT count(a.idficha) as contador11
              FROM ficha a, cliente b, cuentas c, tipo_cuentas d
                WHERE b.idcliente = a.cliente_idcliente
                AND c.codigo = a.cuentas_codigo
                AND d.idtipo_cuentas = c.tipo_cuentas_idtipo_cuentas
                AND c.tipo_cuentas_idtipo_cuentas = 2
        AND a.fecha between '2017-09-01' and  '2017-09-30'
                ");
      return $query->row();
      
   }
    public function getoctubre2()
    {
      $query = $this->db->query("SELECT count(a.idficha) as contador12
              FROM ficha a, cliente b, cuentas c, tipo_cuentas d
                WHERE b.idcliente = a.cliente_idcliente
                AND c.codigo = a.cuentas_codigo
                AND d.idtipo_cuentas = c.tipo_cuentas_idtipo_cuentas
                AND c.tipo_cuentas_idtipo_cuentas = 2
        AND a.fecha between '2017-10-01' and  '2017-10-30'
                ");
      return $query->row();
      
   }
   public function getnoviembre2()
    {
      $query = $this->db->query("SELECT count(a.idficha) as contador13
              FROM ficha a, cliente b, cuentas c, tipo_cuentas d
                WHERE b.idcliente = a.cliente_idcliente
                AND c.codigo = a.cuentas_codigo
                AND d.idtipo_cuentas = c.tipo_cuentas_idtipo_cuentas
                AND c.tipo_cuentas_idtipo_cuentas = 2
        AND a.fecha between '2017-11-01' and  '2017-11-30'
                ");
      return $query->row();
      
   }
   public function getdiciembre2()
    {
      $query = $this->db->query("SELECT count(a.idficha) as contador14
              FROM ficha a, cliente b, cuentas c, tipo_cuentas d
                WHERE b.idcliente = a.cliente_idcliente
                AND c.codigo = a.cuentas_codigo
                AND d.idtipo_cuentas = c.tipo_cuentas_idtipo_cuentas
                AND c.tipo_cuentas_idtipo_cuentas = 2
        AND a.fecha between '2017-12-01' and  '2017-12-30'
                ");
      return $query->row();
      
   }

}
?>
