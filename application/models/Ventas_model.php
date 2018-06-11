<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ventas_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		
	}

	public function Sucursal()
	{
		$sucursal = $this->db->get('sucursal');
			if ($sucursal -> num_rows() > 0) {
					foreach ($sucursal->result() as $key ) {
							$datos[] = $key;
			}
			return $datos;
		}
	}

	public function add($table,$data,$returnId = false){
				$this->db->insert($table,$data);
				if ($this->db->affected_rows() == '1')
		{
                    if($returnId == true)
                    {
                       	return $this->db->insert_id($table);
                    }
                    
			return TRUE;
		}

		return FALSE;
    }

    public function edit($table,$data,$fieldID,$ID){
        $this->db->where($fieldID,$ID);
        $this->db->update($table, $data);

        if ($this->db->affected_rows() >= 0)
		{
			return TRUE;
		}

		return FALSE;
    }


    public function reducir($tabla, $producto, $cantidad){
    	$this->db->set('stock',$cantidad);
        $this->db->where('cod_producto',$producto);
        $this->db->update($tabla);

        if ($this->db->affected_rows() >= 0)
		{
			return TRUE;
		}

		return FALSE;
    }

    public function total($producto)
    {
    	$query = " SELECT stock FROM producto WHERE cod_producto=".$producto;
    	return $this->db->query($query)->row();
    }
    

    public function getById($id){
		 $this->db->select('venta.*, cliente.*, empleado.*');
		 $this->db->from('venta');
		 $this->db->join('cliente','cliente.nitci = venta.cliente_nitci');
		 $this->db->join('empleado','empleado.ci_empleado = venta.ci_empleado');
		 $this->db->where('venta.numero_factura',$id);
		 return $query = $this->db->get()->row();

	 }

	public function getProdutos($id){
        $this->db->select('detalle.*, producto.*');
        $this->db->from('detalle');
        $this->db->join('producto','producto.cod_producto = detalle.cod_producto');
        $this->db->where('numero_factura',$id);
			return $query = $this->db->get()->result();

    }

    public function datosVenta($id){
			$this->db->where('numero_factura',$id);
			$venta = $this->db->get('venta');
			if ($venta -> num_rows() > 0) {
					foreach ($venta->result() as $key ) {
							$datos[] = $key;
					}
					return $datos;
			}

	}

    public function autoCompleteCod($codigo)
    {
    	$this->db->select('*');
		$this->db->limit(5);
		$this->db->like('cod_producto', $codigo);
		$query = $this->db->get('producto');
		if($query->num_rows() > 0){
		     foreach ($query->result_array() as $row){
		     $row_set[] = array('label'=>'Producto :'.$row['nombre_producto'].' | Precio: '.$row['precio']. ' | Stock: '.$row['stock'], 'id'=>$row['cod_producto'],'precio'=>$row['precio']);
			}
		 echo json_encode($row_set);
		}
    }

    public function autoCompleteProd($producto)
    {
    	$this->db->select('*');
		$this->db->limit(5);
		$this->db->like('nombre_producto', $producto);
		$query = $this->db->get('producto');
		if($query->num_rows() > 0){
		    foreach ($query->result_array() as $row){
		        $row_set[] = array('label'=> 'Codigo:'.$row['cod_producto'].'| Producto: '.$row['nombre_producto']. ' | Precio: ' .$row['precio'].' | Stock:'.$row['stock'], 'id'=>$row['cod_producto'],'precio'=>$row['precio']);
		    }
		echo json_encode($row_set);}
    }


    function datoSucursal(){

		$sucursal = $this->db->get('sucursal');
		if ($sucursal -> num_rows() > 0) {
			foreach ($sucursal->result() as $key ) {
					$datos[] = $key;
			}
			return $datos;
		}

	}

	function get($table,$fields,$where='',$limit=0,$start=0,$one=false,$array='array'){

        $this->db->select($fields.', cliente.apellido_cliente, cliente.nitci');
        $this->db->from($table);
        $this->db->limit($limit,$start);
        $this->db->join('cliente', 'cliente.nitci = '.$table.'.cliente_nitci');
        $this->db->order_by('numero_factura','desc');
        if($where){
            $this->db->where($where);
        }
        $query = $this->db->get();
        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    }
}

/* End of file Ventas_model.php */
/* Location: ./application/models/Ventas_model.php */