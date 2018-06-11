<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Productos extends CI_Controller {

	public function index()
	{
		$data['data_get'] = $this->abm_model->view_producto();
		$this->load->view('templates/header');
		$this->load->view('productos/lista', $data);
		$this->load->view('templates/footer');
	}
	function add() {
		$this->load->view('templates/header');
		$this->load->view('agregarp');
		$this->load->view('templates/footer');
	}
	function edit() {
		$cod_producto = $this->uri->segment(3);
		if ($cod_producto == NULL) {
			redirect('Productos');
		}
		$dt = $this->abm_model->edit_producto($cod_producto);
		$data['nombre_producto'] = $dt->nombre_producto;
		$data['precio'] = $dt->precio;
		$data['categoria'] = $dt->categoria;
		$data['stock'] = $dt->stock;
		$data['cod_producto'] = $cod_producto;

		$this->load->view('templates/header');
		$this->load->view('productos/edit', $data);
		$this->load->view('templates/footer');
	}

	function delete() {
		$u = $this->uri->segment(3);
		$this->abm_model->delete_producto($u);
		redirect('Productos');
	}
	function save() {
		if ($this->input->post('mit')) {
			$this->abm_model->add();
			redirect('Productos');
		} else{
			redirect('Productos/tambah');
		}
	}
	function update() {

		if ($this->input->post('mit')) {

			$cod_producto = $this->input->post('cod_producto');
			$this->abm_model->update_producto($cod_producto);

			redirect('Productos');
		} else{
			redirect('Productos/edit/'.$cod_producto);
		}

	}
}
