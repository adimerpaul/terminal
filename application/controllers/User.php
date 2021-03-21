<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function index()
	{
	    if (!$this->session->name){
            header('Location: '.base_url());
        }
        $this->load->view('templates/header');
        $this->load->view('user');
        $this->load->view('templates/footer');
	}
    public function crear()
    {
        if (!$this->session->name){
            header('Location: '.base_url());
        }
        $name=$this->input->post('name');
        $email=$this->input->post('email');
        $password=md5($this->input->post('password'));
        $tipo=$this->input->post('tipo');
        $this->db->query("INSERT INTO users SET 
        name='$name',
        email='$email',
        password='$password',
        tipo='$tipo'
        ");
        header('Location: '.base_url().'User');
    }
    public function modificar()
    {
        if (!$this->session->name){
            header('Location: '.base_url());
        }
        $id=$this->input->post('id');
        $name=$this->input->post('name');
        $email=$this->input->post('email');
        $password=md5($this->input->post('password'));
        $tipo=$this->input->post('tipo');
        $this->db->query("UPDATE users SET
        name='$name',
        email='$email',
        password='$password',
        tipo='$tipo'
        WHERE id=$id
        ");
        header('Location: '.base_url().'User');
    }
    public function borrar($id)
    {
        if (!$this->session->name){
            header('Location: '.base_url());
        }
        $this->db->query("DELETE FROM users WHERE id=$id");
        header('Location: '.base_url().'User');
    }
}
