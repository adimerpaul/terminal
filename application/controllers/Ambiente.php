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
        // else{
        //     if($this->session->name && $this->session->tipo='ADMINISTRADOR'){
        //         $this->load->view('templates/header');
        //         $this->load->view('ambiente');
        //         $this->load->view('templates/footer');
        //     }
        //     if($this->session->name && $this->session->tipo='ADMINISTRADOR2'){
        //         // var_dump($this->session->tipo);
        //         $this->load->view('adm2/templates/header');
        //         $this->load->view('adm2/ambiente');
        //         $this->load->view('adm2/templates/footer');
        //     }
        //     if($this->session->name && ($this->session->tipo='SECRETARIA' || $this->session->tipo='SOCIO')){
        //         $this->load->view('templates/header');
        //         $this->load->view('ambiente');
        //         $this->load->view('templates/footer');
        //     }
        // }
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
        $canon=$this->input->post('canon');
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
                            canon='$canon',
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
        $canon=$this->input->post('canon');
        $mesanine=$this->input->post('mesanine');
        $tipo=$this->input->post('tipo');
        $fechainit=$this->input->post('fechainit');
        $fechalim=$this->input->post('fechalim');
        $this->db->query("UPDATE ambientes SET
                    rubro='$rubro',
                    nombre='$nombre',
                    nit='$nit',
                    detalle='$detalle',
                    canon='$canon',
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
