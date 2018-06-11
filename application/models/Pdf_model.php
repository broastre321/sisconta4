<?php
defined("BASEPATH") OR die("El acceso al script no está permitido");
 
class Pdf_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
 
    public function tabla()
    {  return  $query = $this->db->query('select ficha.idficha,
ficha.fecha,
ficha.detalle,
ficha.monto,
cliente.nombre as nombre1,
ficha.carnet
,cuentas.nombre as nombre2
,ficha.forma_pago
,ficha.tipo_cuenta,
ficha.tipo_documento

from ficha
INNER JOIN cliente
on ficha.cliente_idcliente=cliente.idcliente
INNER JOIN cuentas
on ficha.cuentas_codigo=cuentas.codigo
INNER JOIN  tipo_cuentas
on cuentas.tipo_cuentas_idtipo_cuentas=tipo_cuentas.idtipo_cuentas

where ficha.idficha=(
select max(ficha.idficha)

from ficha
INNER JOIN cliente
on ficha.cliente_idcliente=cliente.idcliente
INNER JOIN cuentas
on ficha.cuentas_codigo=cuentas.codigo
INNER JOIN  tipo_cuentas
on cuentas.tipo_cuentas_idtipo_cuentas=tipo_cuentas.idtipo_cuentas

where  tipo_cuentas.idtipo_cuentas=2)
')->result();
    }
    public function idfecha()
    {
        
        return  $query = $this->db->query('select ficha.idficha

from ficha
INNER JOIN cliente
on ficha.cliente_idcliente=cliente.idcliente
INNER JOIN cuentas
on ficha.cuentas_codigo=cuentas.codigo
INNER JOIN  tipo_cuentas
on cuentas.tipo_cuentas_idtipo_cuentas=tipo_cuentas.idtipo_cuentas

where ficha.idficha=(
select max(ficha.idficha)

from ficha
INNER JOIN cliente
on ficha.cliente_idcliente=cliente.idcliente
INNER JOIN cuentas
on ficha.cuentas_codigo=cuentas.codigo
INNER JOIN  tipo_cuentas
on cuentas.tipo_cuentas_idtipo_cuentas=tipo_cuentas.idtipo_cuentas

where  tipo_cuentas.idtipo_cuentas=2)')->result();
        
        
       
    }
}