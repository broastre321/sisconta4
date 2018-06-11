<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class libromayor_model extends CI_Model
{
    public function _construct()
    {
      parent::_construct();
    }
       public function consultames($tipo,$mes,$gestion)
    {
      $this->db->select('tipo_cuentas.tipo as tablaTIPOCUENTAS , count(*) as CONTAR, sum(ficha.monto) as sumagrupos');
      $this->db->from('conta.ficha  , conta.cuentas  ,conta.tipo_cuentas');
      $this->db->where('ficha.cuentas_codigo =   cuentas.codigo');
      $this->db->where(' cuentas.tipo_cuentas_idtipo_cuentas = tipo_cuentas.idtipo_cuentas');
       $mes2=$gestion.'-'.$mes.'-01';
       $mes3=$gestion.'-'.$mes.'-30';
     //  '2017-11-30'
      // '2017-11-01'
      
       $this->db->where('ficha.fecha >=',$mes2);
       $this->db->where('ficha.fecha <=',$mes3);
       $this->db->where('tipo_cuentas.tipo', $tipo);
      $this->db->group_by('tipo_cuentas.tipo');
      $consulta = $this->db->get();
      $resultado = $consulta->result();
     return $resultado;
//return $mes2;
      
   }
     public function consultaantes($tipo,$mes,$gestion)
    {
      $this->db->select('tipo_cuentas.tipo as tablaTIPOCUENTAS , count(*) as CONTAR, sum(ficha.monto) as sumagrupos');
      $this->db->from('conta.ficha  , conta.cuentas  ,conta.tipo_cuentas');
      $this->db->where('ficha.cuentas_codigo =   cuentas.codigo');
      $this->db->where(' cuentas.tipo_cuentas_idtipo_cuentas = tipo_cuentas.idtipo_cuentas');
       $mes2=$gestion.'-'.$mes.'-01';
       //$mes3=$gestion.'-'.$mes.'-30';
     //  '2017-11-30'
      // '2017-11-01'
      
       $this->db->where('ficha.fecha <',$mes2);
       $this->db->where('tipo_cuentas.tipo', $tipo);
      $this->db->group_by('tipo_cuentas.tipo');
      $consulta = $this->db->get();
      $resultado = $consulta->result();
     return $resultado;
//return $mes2;
      
   }

    
     public function consultatotal($tipo,$mes,$gestion)
    {
         if($tipo=="ingresos")
         {
       return  $query = $this->db->query('select tipo_cuentas.tipo as tablaTIPOCUENTAS , count(*) as CONTAR, sum(ficha.monto) as sumagrupos
FROM conta.ficha  , conta.cuentas  ,conta.tipo_cuentas
where ficha.cuentas_codigo  =   cuentas.codigo
			and  cuentas.tipo_cuentas_idtipo_cuentas = tipo_cuentas.idtipo_cuentas
		
	and tipo_cuentas.tipo= "ingresos"

group by tipo_cuentas.tipo')->result();
       
        
         }
         if($tipo=="egresos")
         {
                return  $query = $this->db->query('select tipo_cuentas.tipo as tablaTIPOCUENTAS , count(*) as CONTAR, sum(ficha.monto) as sumagrupos
FROM conta.ficha  , conta.cuentas  ,conta.tipo_cuentas
where ficha.cuentas_codigo  =   cuentas.codigo
			and  cuentas.tipo_cuentas_idtipo_cuentas = tipo_cuentas.idtipo_cuentas
		
	and tipo_cuentas.tipo= "egresos"

group by tipo_cuentas.tipo')->result();
             
         }
    }
    
    
    /////////////////////////////////////////////////////////////////////////////////////////
    //PRIMERA PARTE
    public function consultacuentas($tipo,$mes,$gestion)
    { 
      $this->db->select('tipo_cuentas.tipo as tablaTIPOCUENTAS ,   cuentas.nombre, 
  ficha.cuentas_codigo, count(*) as CONTAR, sum(ficha.monto) as sumacuentas');
      $this->db->from('conta.ficha  , conta.cuentas  ,conta.tipo_cuentas');
      $this->db->where('ficha.cuentas_codigo =   cuentas.codigo');
      $this->db->where(' cuentas.tipo_cuentas_idtipo_cuentas = tipo_cuentas.idtipo_cuentas');
       $mes2=$gestion.'-'.$mes.'-01';
       $mes3=$gestion.'-'.$mes.'-30';
     //  '2017-11-30'
      // '2017-11-01'
      
       $this->db->where('ficha.fecha >=',$mes2);
       $this->db->where('ficha.fecha <=',$mes3);
       $this->db->where('tipo_cuentas.tipo', $tipo);//ingreso o egreso
      $this->db->group_by('ficha.cuentas_codigo');
      $consulta = $this->db->get();
      $resultado = $consulta->result();
     return $resultado;
//return $mes2;

    }
    //consultaanterior
    
   public function consultaanterior($tipo,$mes,$gestion)
    {
      $this->db->select('tipo_cuentas.tipo as tablaTIPOCUENTAS ,   cuentas.nombre, 
     ficha.cuentas_codigo, count(*) as CONTAR, sum(ficha.monto) as sumacuentas');
      $this->db->from('conta.ficha  , conta.cuentas  ,conta.tipo_cuentas');
      $this->db->where('ficha.cuentas_codigo =   cuentas.codigo');
      $this->db->where(' cuentas.tipo_cuentas_idtipo_cuentas = tipo_cuentas.idtipo_cuentas');
       $mes2=$gestion.'-'.$mes.'-01';
       //$mes3=$gestion.'-'.$mes.'-30';
     //  '2017-11-30'
      // '2017-11-01'
      
       $this->db->where('ficha.fecha <',$mes2);
     
       $this->db->where('tipo_cuentas.tipo', $tipo);//ingreso o egreso
      $this->db->group_by('ficha.cuentas_codigo');
      $consulta = $this->db->get();
      $resultado = $consulta->result();
     return $resultado;
//return $mes2;

    }
      public function consultahastames($tipo,$mes,$gestion)
    {
      $this->db->select('tipo_cuentas.tipo as tablaTIPOCUENTAS ,   cuentas.nombre, 
     ficha.cuentas_codigo, count(*) as CONTAR, sum(ficha.monto) as sumacuentas');
      $this->db->from('conta.ficha  , conta.cuentas  ,conta.tipo_cuentas');
      $this->db->where('ficha.cuentas_codigo =   cuentas.codigo');
      $this->db->where(' cuentas.tipo_cuentas_idtipo_cuentas = tipo_cuentas.idtipo_cuentas');
      // $mes2=$gestion.'-'.$mes.'-01';
       //$mes3=$gestion.'-'.$mes.'-30';
     //  '2017-11-30'
      // '2017-11-01'
      
      // $this->db->where('ficha.fecha <',$mes2);
     
       $this->db->where('tipo_cuentas.tipo', $tipo);//ingreso o egreso
      $this->db->group_by('ficha.cuentas_codigo');
      $consulta = $this->db->get();
      $resultado = $consulta->result();
     return $resultado;
//return $mes2;

    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
     public function obteneregreso()
    {
      //  return $this->db->get('cuentas')->result();
           return  $query = $this->db->query('SELECT `codigo` ,`nombre`,`fecha` FROM `cuentas`
       where  tipo_cuentas_idtipo_cuentas="2" ')->result();
           
    }
  

}
?>
