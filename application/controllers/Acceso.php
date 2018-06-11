<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acceso extends CI_Controller
{

        public function index()
        {
            $this->load->model('login_model');
            /*captura el nro de carnet y la contraseña>*/
            
            
            
            $usuario=$this->input->post('usuario');
            $password=$this->input->post('password');
            
            //la funcion login retorna verdad o falso segun consulte a la base de datos
            // si esta lleno los campos redirecciona admin
            if ($this->login_model->login($usuario,$password)) 
            {
                redirect('admin');//controlador admin
            }
            else
            {
                redirect('login'); //controlador login
            }

        }
}