<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Empleados extends CI_Controller {

	public function index()
	{
		$data['data_get'] = $this->abm_model->view();
		$this->load->view('formulario');
		$this->load->view('empleados/usuarios', $data);
		
	}
	public function add() {
		$this->load->view('formulario');
		$this->load->view('agregarp');
		
	}
	public function edit() 
        {
		$ci_empleado = $this->uri->segment(3);
		if ($ci_empleado == NULL) {
			redirect('Empleados');
		}
		$dt = $this->abm_model->edit($ci_empleado);
		$data['nombre_empleado'] = $dt->nombre_empleado;
		$data['apellido_empleado'] = $dt->apellido_empleado;
		$data['telefono'] = $dt->telefono;
		$data['direccion'] = $dt->direccion;
    $data['usuario'] = $dt->usuario;
    $data['password'] = $dt->password;
    $data['tipo'] = $dt->tipo;
    $data['ci_gar'] = $dt->ci_gar;
    $data['garante'] = $dt->garante;
    $data['tef_gar'] = $dt->tef_gar;
    $data['dir_gar'] = $dt->dir_gar;
		$data['ci_empleado'] = $ci_empleado;

		
		$this->load->view('empleados/edit', $data);
                
              
		
	}

	public function delete() {
		$u = $this->uri->segment(3);
		$this->abm_model->delete_empleados($u);
		redirect('Empleados');
	}
	public function save() {
		if ($this->input->post('mit')) {
			$this->abm_model->add();
			redirect('Empleados');
		} else{
			redirect('Empleados/tambah');
		}
	}
	public function update() {

		if ($this->input->post('mit')) {

			$ci_empleado = $this->input->post('ci_empleado');
			$this->abm_model->update($ci_empleado);

			redirect('Empleados');
		} else{
			redirect('Empleados/edit/'.$ci_empleado);
		}

	}
}
