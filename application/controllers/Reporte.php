<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reporte extends CI_Controller {
	public function index()
	{
	    if (!$this->session->name){
            header('Location: '.base_url());
        }
        $this->load->view('templates/header');
        $this->load->view('reporte');
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
        // $fechanac=$this->input->post('fechanac');
        $razon=$this->input->post('razon');
        $nit=$this->input->post('nit');
        $replegal=$this->input->post('replegal');
        $celular=$this->input->post('celular');
        $ncontrato=$this->input->post('ncontrato');
        $direccion=$this->input->post('direccion');
        $this->db->query("INSERT INTO clientes SET 
                                                ci='$ci',
                                                nombres='$nombres',
                                                apellidos='$apellidos',
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
    public function hoy()
    {
        if (!$this->session->name){
            header('Location: '.base_url());
        }
//        $query=$this->db->query("SELECT * FROM pagos WHERE date(fecha)=date(now())");
        $this->load->view('hoy');
//        echo json_encode($query->result_array());
//        header('Location: '.base_url().'Cliente');
    }
}
