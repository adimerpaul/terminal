<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function index()
	{
        
        var_dump($this->session->name);
	    if (!$this->session->name || $this->session->tipo!='ADMINISTRADOR'){
            header('Location: '.base_url());
        }
        // if ($this->session->tipo='ADMINISTRADOR2'){
        //     header('Location: '.base_url());
        // }
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
    public function modificarCla()
    {
        if (!$this->session->name){
            header('Location: '.base_url());
        }
        $idc2=$this->input->post('idc2');
        $emailc2=$this->input->post('emailc2');
        $password1=md5($this->input->post('password1'));
        $password2=md5($this->input->post('password2'));
        var_dump($emailc2);
        $this->db->query("UPDATE users SET
                            password='$password2'
                            WHERE id=$idc2 AND email='$emailc2' AND password='$password1'
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
