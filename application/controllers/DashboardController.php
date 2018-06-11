<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {
	public function __construct()
  {
        parent::__construct();
        $this->load->model('dashboard_model');
      	if(!$this->session->userdata('tipo')){
        	redirect(base_url());
      	}
   		
                
  }

	public function index()
	{
		$data['resultado'] = $this->dashboard_model->getIngresos();

		$data['resultado1'] = $this->dashboard_model->getEgresos();

    ///////////////////////////////////////////
     $data['ienero'] = $this->dashboard_model->getEnero();
    $data['ifebrero'] = $this->dashboard_model->getfebrero();
     $data['imarzo'] = $this->dashboard_model->getmarzo();
      $data['iabril'] = $this->dashboard_model->getabril();
       $data['imayo'] = $this->dashboard_model->getmayo();
        $data['ijunio'] = $this->dashboard_model->getjunio();
         $data['ijulio'] = $this->dashboard_model->getjulio();
          $data['iagosto'] = $this->dashboard_model->getagosto();
           $data['iseptiembre'] = $this->dashboard_model->getseptiembre();
            $data['ioctubre'] = $this->dashboard_model->getoctubre();
             $data['inoviembre'] = $this->dashboard_model->getnoviembre();
              $data['idiciembre'] = $this->dashboard_model->getdiciembre();

$data['ienero2'] = $this->dashboard_model->getEnero2();
    $data['ifebrero2'] = $this->dashboard_model->getfebrero2();
     $data['imarzo2'] = $this->dashboard_model->getmarzo2();
      $data['iabril2'] = $this->dashboard_model->getabril2();
       $data['imayo2'] = $this->dashboard_model->getmayo2();
        $data['ijunio2'] = $this->dashboard_model->getjunio2();
         $data['ijulio2'] = $this->dashboard_model->getjulio2();
          $data['iagosto2'] = $this->dashboard_model->getagosto2();
           $data['iseptiembre2'] = $this->dashboard_model->getseptiembre2();
            $data['ioctubre2'] = $this->dashboard_model->getoctubre2();
             $data['inoviembre2'] = $this->dashboard_model->getnoviembre2();
              $data['idiciembre2'] = $this->dashboard_model->getdiciembre2();



   		$this->load->view('formulario');
   		
		$this->load->view('dashboard',$data);   
	  }
}
