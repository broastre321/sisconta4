<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Abm_model extends CI_Model 
{

    	public function insert_data_producto($tabla,$data)
                {$this->db->insert($tabla,$data);}
		
		public function insert_data_empleado($tabla,$data)
                {$this->db->insert($tabla,$data);}

		public function insert_data_cliente($table,$data)
                {$this->db->insert($table,$data);}

		function view()
                {
				$ambil = $this->db->get('empleado');
                                    if ($ambil->num_rows() > 0) 
                                    {  foreach ($ambil->result() as $data)
                                            {
                                               $hasil[] = $data;
                                            }
                                      return $hasil;
                                    }
		}
			function view_producto() {
				$ambil = $this->db->get('producto');
				if ($ambil->num_rows() > 0) {
					foreach ($ambil->result() as $data) {
						$hasil[] = $data;
					}
					return $hasil;
				}
			}

			function delete_empleados($a) {
				$this->db->delete('empleado', array('ci_empleado' => $a));
				return;
			}


			function delete_producto($a) {
				$this->db->delete('producto', array('cod_producto' => $a));
				return;
			}


			function edit($a) {
				$d = $this->db->get_where('empleado', array('ci_empleado' => $a))->row();
				return $d;
			}

			function edit_producto($a) {
				$d = $this->db->get_where('producto', array('cod_producto' => $a))->row();
				return $d;
			}

			function update($ci_empleado)
                        {
				$nombre_empleado = $this->input->post('nombre_empleado');
				$apellido_empleado = $this->input->post('apellido_empleado');
				$telefono = $this->input->post('telefono');
				$direccion = $this->input->post('direccion');
				$usuario = $this->input->post('usuario');
				$password = $this->input->post('password');
				$tipo = $this->input->post('tipo');
				$ci_gar = $this->input->post('ci_gar');
				$garante = $this->input->post('garante');
				$tef_gar = $this->input->post('tef_gar');
				$dir_gar = $this->input->post('dir_gar');
				$data = array(
					'nombre_empleado' => $nombre_empleado,
					'apellido_empleado' => $apellido_empleado,
					'telefono' => $telefono,
					'direccion' => $direccion,
					'usuario' => $usuario,
					'password' => $password,
					'tipo' => $tipo,
					'ci_gar' => $ci_gar,
					'garante' => $garante,
					'tef_gar' => $tef_gar,
					'dir_gar' => $dir_gar
				);
				$this->db->where('ci_empleado', $ci_empleado);
				$this->db->update('empleado', $data);
			}
                        
           //////////////////////////////////////////////////////////////////////////             

			function update_producto($cod_producto)
                        {

				$nombre_producto = $this->input->post('nombre_producto');
				$precio = $this->input->post('precio');
				$categoria = $this->input->post('categoria');
				$stock = $this->input->post('stock');

				$data = array(
					'nombre_producto' => $nombre_producto,
					'precio' => $precio,
					'categoria' => $categoria,
					'stock' => $stock

				);
				$this->db->where('cod_producto', $cod_producto);
				$this->db->update('producto', $data);

			}
			public function autoCompleteNitci($nitci){
		        $this->db->select('*');
		        $this->db->limit(5);
		        $this->db->like('nitci', $nitci);
		        $query = $this->db->get('cliente');
		        if($query->num_rows() > 0){
		            foreach ($query->result_array() as $row){
		                $row_set[] = array('label'=>$row['nitci'].'  -  '.$row['apellido_cliente'], 'id'=>$row['nitci']);
		            }
		            echo json_encode($row_set);
		    	}
   			}
			
			public function Cliente($datos)
			{
				$this->db->insert('cliente', $datos);
				if ($this->db->affected_rows() > 0) {
					return true;
				}
				else
				{
					return false;
				}
			}
	}
