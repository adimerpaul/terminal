<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personal extends CI_Controller {
	public function index()
	{
        // if (!$this->session->name){
        //     header('Location: '.base_url());
        // }
        if ($this->session->name && ($this->session->tipo=='ADMINISTRADOR' || $this->session->tipo=='ADMINISTRADOR2')){
            $this->load->view('templates/header');
            $this->load->view('personal');
            $this->load->view('templates/footer');
        }else{
            header('Location: '.base_url());
        }
	}
    public function crear()
    {
        if (!$this->session->name){
            header('Location: '.base_url());
        }
        $name=$this->input->post('name');
        $ci=$this->input->post('ci');
        $fnac=$this->input->post('fnac');
        $this->db->query("INSERT INTO personal SET 
                        nombre='$name',
                        ci='$ci',
                        fnac='$fnac'
                        ");
        header('Location: '.base_url().'Personal');
    }
    public function modificar()
    {
        if (!$this->session->name){
            header('Location: '.base_url());
        }
        $id=$this->input->post('id');
        $nombre=$this->input->post('nombre');
        $ci=$this->input->post('ci');
        $fnac=$this->input->post('fnac');
        $this->db->query("UPDATE personal SET
                        nombre='$nombre',
                        ci='$ci',
                        fnac='$fnac'
                        WHERE id=$id
                        ");
        header('Location: '.base_url().'Personal');
    }
    public function borrar($id)
    {
        if (!$this->session->name){
            header('Location: '.base_url());
        }
        $this->db->query("DELETE FROM personal WHERE id=$id");
        header('Location: '.base_url().'Personal');
    }
}
