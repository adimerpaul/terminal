<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
	    if (!$this->session->name){
            header('Location: '.base_url());
        }
        else{
        	if($this->session->name && $this->session->name='ADMINISTRADOR2'){
        		$this->load->view('templates/header');
				$this->load->view('adm2/home');
		        $this->load->view('templates/footer');		
        	}
        }
	}
}
