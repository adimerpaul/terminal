<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {
	public function index()
	{
	    if ($this->session->name && ($this->session->tipo=='ADMINISTRADOR' || $this->session->tipo=='ADMINISTRADOR2')){
            $this->load->view('templates/header');
            $this->load->view('cliente');
            $this->load->view('templates/footer');

            // var_dump($this->session->tipo);
        } else {
            header('Location: '.base_url());
        }
	}
    public function crear()
    {
        if (!$this->session->name){
            header('Location: '.base_url());
        }
        $ci=$this->input->post('ci');
        // $nombres=$this->input->post('nombres');
        // $apellidos=$this->input->post('apellidos');
        // $fechanac=$this->input->post('fechanac');
        $razon=$this->input->post('razon');
        $nit=$this->input->post('nit');
        $replegal=$this->input->post('replegal');
        $celular=$this->input->post('celular');
        $ncontrato=$this->input->post('ncontrato');
        $direccion=$this->input->post('direccion');
        $this->db->query("INSERT INTO clientes SET 
                                                ci='$ci',
                                                -- nombres='$nombres',
                                                -- apellidos='$apellidos',
                                                razon='$razon',
                                                nit='$nit',
                                                replegal='$replegal',
                                                celular='$celular',
                                                ncontrato='$ncontrato',
                                                direccion='$direccion'
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
        // $fechanac=$this->input->post('fechanac');
        $razon=$this->input->post('razon');
        $nit=$this->input->post('nit');
        $replegal=$this->input->post('replegal');
        $celular=$this->input->post('celular');
        $ncontrato=$this->input->post('ncontrato');
        $direccion=$this->input->post('direccion');
        $this->db->query("UPDATE clientes SET
                                    ci='$ci',
                                    nombres='$nombres',
                                    apellidos='$apellidos',
                                    razon='$razon',
                                    nit='$nit',
                                    replegal='$replegal',
                                    celular='$celular',
                                    ncontrato='$ncontrato',
                                    direccion='$direccion'
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
