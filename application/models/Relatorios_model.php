<?php
class Relatorios_model extends CI_Model {


    function __construct() {
        parent::__construct();
    }


    function get($table,$fields,$where='',$perpage=0,$start=0,$one=false,$array='array'){

        $this->db->select($fields);
        $this->db->from($table);
        $this->db->limit($perpage,$start);
        if($where){
            $this->db->where($where);
        }

        $query = $this->db->get();

        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    }


    function add($table,$data){
        $this->db->insert($table, $data);
        if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}

		return FALSE;
    }

    function edit($table,$data,$fieldID,$ID){
        $this->db->where($fieldID,$ID);
        $this->db->update($table, $data);

        if ($this->db->affected_rows() >= 0)
		{
			return TRUE;
		}

		return FALSE;
    }

    function delete($table,$fieldID,$ID){
        $this->db->where($fieldID,$ID);
        $this->db->delete($table);
        if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}

		return FALSE;
    }

    function count($table) {
        return $this->db->count_all($table);
    }



    public function vendasCustom($dataInicial = null,$dataFinal = null){
        $whereData = "";
        $whereStatus = "";
        if($dataInicial != null){
            $whereData = "AND fecha BETWEEN ".$this->db->escape($dataInicial)." AND ".$this->db->escape($dataFinal);
        }

        $query = "SELECT a.*, b.*, c.*, d.* FROM venta a, cliente b, detalle c, producto d
                WHERE cod_detalle != 0 $whereData
                AND d.cod_producto=c.cod_producto
                AND a.numero_factura=c.numero_factura
                AND a.cliente_nitci=b.nitci
                ORDER BY a.numero_factura";
        return $this->db->query($query)->result();
    }



    public function vendasRapid(){
        $this->db->select('venta.*,cliente.nitci, detalle.*, producto.*');
        $this->db->join('venta','venta.numero_factura = detalle.numero_factura');
        $this->db->join('producto','producto.cod_producto = detalle.cod_producto');
        $this->db->from('detalle', 'venta.numero_factura = detalle.numero_factura');
        $this->db->join('cliente','cliente.nitci = venta.cliente_nitci');
        $this->db->order_by('venta.numero_factura');
        return $this->db->get()->result();
    }
}
