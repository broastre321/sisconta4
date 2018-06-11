<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Agregarcliente extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
      	if(!$this->session->userdata('tipo')){
        redirect(base_url());
      }

	}

	public function index()
	{
	
		$data['custom_error']= ' ' ;

		$this->form_validation->set_rules('nitci', 'Carnet Identidad o el NITCI', 'trim|required|min_length[6]|max_length[18]');
		$this->form_validation->set_rules('apellido', 'Apellido', 'trim|required');

		$this->form_validation->set_message('required', 'El %s esta vacio');
		$this->form_validation->set_message('min_length', 'El %s debe tener al menos %s caracteres');
		$this->form_validation->set_message('max_length','El %s debe tener un maximo %s caracteres');

		if($this->form_validation->run()== TRUE)
		{
			$nitci = $this->security->xss_clean(strip_tags($this->input->post('nitci')));
			$apellido = $this->security->xss_clean(strip_tags($this->input->post('apellido')));

			$datos = array(
				'nitci' => $nitci,
				'apellido_cliente' => $apellido,
				);

			if($this->abm_model->Cliente($datos)== TRUE)
			{
				redirect('Agregarventa');
			}
			else
			{
				$data['custom_error'] = (validation_errors() ? true : false);
			}
		}
		else
		{
			$data['custom_error'] = (validation_errors() ? true : false);
		}

		$this->load->view('templates/header');
		$this->load->view('ventas/agragarcliente',$data);
		$this->load->view('templates/footer');
		
	}

}

/* End of file Agregarcliente.php */
/* Location: ./application/controllers/Agregarcliente.php */
/*hola*/
