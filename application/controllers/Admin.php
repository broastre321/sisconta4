<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
	    parent::__construct();
	    if(!$this->session->userdata('tipo'))
            {
	      redirect(base_url());
	    }
  	}


	public function index()
	{/*
		$this->load->view('templates/header');
		$this->load->view('templates/footer'); */
            
                $this->load->view('formulario');
                $this->load->view('centro2');

	}
}
