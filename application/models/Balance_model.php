<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Balance_model extends CI_Model
{
    public function _construct()
    {
      parent::_construct();
    }


    public function Total_balance($tipo)
      {

      $query = "SELECT c.*, SUM(f.monto) AS monto FROM ficha f, cuentas c, tipo_cuentas t
                WHERE t.idtipo_cuentas = c.tipo_cuentas_idtipo_cuentas
                AND c.codigo = f.cuentas_codigo
                AND t.idtipo_cuentas = '$tipo'
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
