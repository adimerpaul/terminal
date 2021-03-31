<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Valorados extends CI_Controller {
	public function index()
	{
	    if (!$this->session->name){
            header('Location: '.base_url());
        }
        $this->load->view('templates/header');
        $this->load->view('valorados');
        $this->load->view('templates/footer');
	}
	public function crear()
    {
        if (!$this->session->name){
            header('Location: '.base_url());
        }
        $porton_id=$this->input->post('porton');
        $persona_id=$this->input->post('nombrep');
        // echo $nombrep;
        // exit;
        $detalle=$this->input->post('detalle');
        $ticketinicio=$this->input->post('ticketinicio');
        $ticketfin=$this->input->post('ticketfin');
        $cantidad=$this->input->post('cantidad');
        $precio=$this->input->post('precio');
        $subtotal=$this->input->post('subtotal');
        $fechacreacion=$this->input->post('fechacreacion');
        $user_id=$this->session->id;

        $this->db->query("INSERT INTO historial SET 
                            detalle='$detalle',
                            persona_id='$persona_id',
                            porton_id='$porton_id',
                            ticketinicio='$ticketinicio',
                            ticketfin='$ticketfin',
                            cantidad='$cantidad',
                            precio='$precio',
                            subtotal='$subtotal',
                            fechacreacion='$fechacreacion',
                            user_id='$user_id'
                            ");
        header('Location: '.base_url().'Valorados');
    }
    public function ticketini(){
        // echo "aqui estoy";
        // exit;
        $id_porton = $this->input->post("id");
        // var_dump($id_porton);
        // $datos=$this->db->query("SELECT porton_id, ticketinicio FROM historial WHERE porton_id='$id_porton' ORDER BY id DESC");
        $datos=$this->db->query("SELECT porton_id, ticketfin FROM historial WHERE porton_id='$id_porton' AND id IN (SELECT MAX(id) FROM historial WHERE porton_id='$id_porton') ORDER BY id DESC");
        $datoticket=$datos->row();
        
        if(!empty($datos->result())){
            $datoticket=$datoticket->ticketfin;
            $datoticket=$datoticket+1;
        }
        else{
            $datoticket="ingrese ticket"; 
        }
        // echo $datoticket;
        // exit();
        // echo '<option value="0" >ticket</option>';
        // foreach ($datos->result() as $fila ) {
            // echo '<option value="'.$datoticket->ticketinicio.'" id="'.$datoticket->ticketinicio.'</option>';
            echo '<input type="text" class="form-control" value="'.$datoticket.'" id="ticketinicio" name="ticketinicio">';
        // }

    }
}
