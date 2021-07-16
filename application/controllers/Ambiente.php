<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ambiente extends CI_Controller {
	public function index()
	{
	    if ($this->session->name && ($this->session->tipo=='ADMINISTRADOR' || $this->session->tipo=='ADMINISTRADOR2')){
            $this->load->view('templates/header');
            $this->load->view('ambiente');
            $this->load->view('templates/footer');
        } else {
             header('Location: '.base_url());
        }
	}
	public function crear()
    {
        if (!$this->session->name){
            header('Location: '.base_url());
        }
        $client_id=$this->input->post('cliente');
        $cliente_dat=$this->db->query("SELECT razon, nit FROM clientes WHERE id='$client_id'");
        $row=$cliente_dat->row();
        // echo $row->nit;
        // exit;
        $rubro=$this->input->post('rubro');
        // $nombre=$this->input->post('nombre');
        $nombre=$row->razon;
        $nit=$row->nit;
        $detalle=$this->input->post('detalle');
        $canon=$this->input->post('canon');
        $ncontrato=$this->input->post('ncontrato');
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
                            ncontrato='$ncontrato',
                            mesanine='$mesanine',
                            tipo='$tipo',
                            fechainit='$fechainit',
                            fechalim='$fechalim',
                            user_id='$user_id',
                            cliente_id='$client_id'
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
        $nombre=$this->input->post('nombree');
        $nit=$this->input->post('nit');
        // var_dump($nombre);
        // exit;
        $detalle=$this->input->post('detalle');
        $canon=$this->input->post('canon');
        $ncontrato=$this->input->post('ncontrato');
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
                    ncontrato='$ncontrato',
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
    public function baja($id)
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
    public function historial($id){
        $query=$this->db->query("SELECT * FROM pagos WHERE id=$id ");
        echo json_encode($query->result_array());
    }

    // public function buquedacliente(){
    //     $this->db->from('paciente');
    //     $this->db->or_like('nombre',$bus);
    //     $this->db->or_like('apellido',$bus);
    //     $this->db->or_like('ci',$bus);
    //     $query=$this->db->get();
    //     echo json_encode($query->result());
    // }
}
