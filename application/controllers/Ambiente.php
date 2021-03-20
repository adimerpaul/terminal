<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ambiente extends CI_Controller {
	public function index()
	{
	    if (!$this->session->name){
            header('Location: '.base_url());
        }
        $this->load->view('templates/header');
        $this->load->view('ambiente');
        $this->load->view('templates/footer');
	}
	public function crear()
    {
        if (!$this->session->name){
            header('Location: '.base_url());
        }
        $ci=$this->input->post('ci');
        $nombres=$this->input->post('nombres');
        $apellidos=$this->input->post('apellidos');
        $fechanac=$this->input->post('fechanac');
        $razon=$this->input->post('razon');
        $this->db->query("INSERT INTO clientes SET 
        ci='$ci',
        nombres='$nombres',
        apellidos='$apellidos',
        razon='$razon',
        fechanac='$fechanac'
        ");
        header('Location: '.base_url().'Cliente');
    }
    public function modificar()
    {
        if (!$this->session->name){
            header('Location: '.base_url());
        }
        $id=$this->input->post('id');
        $ci=$this->input->post('ci');
        $nombres=$this->input->post('nombres');
        $apellidos=$this->input->post('apellidos');
        $fechanac=$this->input->post('fechanac');
        $razon=$this->input->post('razon');
        $this->db->query("UPDATE clientes SET
        ci='$ci',
        nombres='$nombres',
        apellidos='$apellidos',
        razon='$razon',
        fechanac='$fechanac'
        WHERE id=$id
        ");
        header('Location: '.base_url().'Cliente');
    }
    public function borrar($id)
    {
        if (!$this->session->name){
            header('Location: '.base_url());
        }
        $this->db->query("UPDATE clientes SET
        estado='0'
        WHERE id=$id
        ");
        header('Location: '.base_url().'Cliente');
    }
}
