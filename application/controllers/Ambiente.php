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
        $rubro=$this->input->post('rubro');
        $nombre=$this->input->post('nombre');
        $detalle=$this->input->post('detalle');
        $mesanine=$this->input->post('mesanine');
        $user_id=$this->session->id;
//        $razon=$this->input->post('razon');
        $this->db->query("INSERT INTO ambientes SET 
        rubro='$rubro',
        nombre='$nombre',
        detalle='$detalle',
        mesanine='$mesanine',
        user_id='$user_id'
        ");
        header('Location: '.base_url().'Ambiente');
    }
    public function modificar()
    {
        if (!$this->session->name){
            header('Location: '.base_url());
        }
        $rubro=$this->input->post('rubro');
        $id=$this->input->post('id');
        $nombre=$this->input->post('nombre');
        $detalle=$this->input->post('detalle');
        $mesanine=$this->input->post('mesanine');
        $this->db->query("UPDATE ambientes SET
        rubro='$rubro',
        nombre='$nombre',
        detalle='$detalle',
        mesanine='$mesanine'
        WHERE id=$id
        ");
        header('Location: '.base_url().'Ambiente');
    }
    public function borrar($id)
    {
        if (!$this->session->name){
            header('Location: '.base_url());
        }
        $this->db->query("UPDATE ambientes SET
        estado='0'
        WHERE id=$id
        ");
        header('Location: '.base_url().'Ambiente');
    }
}
