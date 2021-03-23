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
        $nit=$this->input->post('nit');
        $detalle=$this->input->post('detalle');
        $mesanine=$this->input->post('mesanine');
        $tipo=$this->input->post('tipo');
        $fechainit=$this->input->post('fechainit');
        $fechalim=$this->input->post('fechalim');
        $user_id=$this->session->id;
//        $razon=$this->input->post('razon');
        $this->db->query("INSERT INTO ambientes SET 
                            rubro='$rubro',
                            nombre='$nombre',
                            nit='$nit',
                            detalle='$detalle',
                            mesanine='$mesanine',
                            tipo='$tipo',
                            fechainit='$fechainit',
                            fechalim='$fechalim',
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
        $nit=$this->input->post('nit');
        $detalle=$this->input->post('detalle');
        $mesanine=$this->input->post('mesanine');
        $tipo=$this->input->post('tipo');
        $fechainit=$this->input->post('fechainit');
        $fechalim=$this->input->post('fechalim');
        $this->db->query("UPDATE ambientes SET
                    rubro='$rubro',
                    nombre='$nombre',
                    nit='$nit',
                    detalle='$detalle',
                    mesanine='$mesanine',
                    tipo='$tipo',
                    fechainit='$fechainit',
                    fechalim='$fechalim'
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
