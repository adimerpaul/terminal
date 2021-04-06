<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Valorados extends CI_Controller {
	public function index()
	{
	    if ($this->session->name && ($this->session->tipo=='ADMINISTRADOR' || $this->session->tipo=='ADMINISTRADOR2')){
            $this->load->view('templates/header');
            $this->load->view('valorados');
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

        $porton_id=$this->input->post('porton');

        $datos=$this->db->query("SELECT tipo FROM porton WHERE id='$porton_id'");
        $tipo_porton=$datos->row();
        // echo $tipo_porton->tipo;
        // exit;


        $persona_id=$this->input->post('nombrep');
        
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
                            user_id='$user_id',
                            tipo='$tipo_porton->tipo'
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
    public function valprecio(){
        $id_porton = $this->input->post("id");
        $valor=$this->db->query("SELECT precio FROM porton WHERE id='$id_porton'");
        $valorprecio=$valor->row();
        $valorprecio=$valorprecio->precio;
        echo '<input type="text" class="form-control" value="'.$valorprecio.'" id="precio" name="precio" required oninput="calcular()">';
    }
}
