<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cobro extends CI_Controller {
    public function index()
    {
        if (!$this->session->name){
            header('Location: '.base_url());
        }
        $this->load->view('templates/header');
        $this->load->view('cobros');
        $this->load->view('templates/footer');
    }
    public function ambiente($ambiente_id)
    {
        $query=$this->db->query("SELECT *
        FROM ambientes
        WHERE id='$ambiente_id'
        ");
//        exit;
//        json_decode( $query->result());
        echo json_encode( $query->result_array()[0]);
    }
    public function crear()
    {
        if (!$this->session->name){
            header('Location: '.base_url());
        }
//        var_dump($_POST);
        $monto=$this->input->post('monto');
        $ambiente_id=$this->input->post('ambiente_id');
//        echo $monto;
//        exit;
        $user_id=$this->session->id;
        $mes=$this->input->post('mes');
        $anio=$this->input->post('anio');
        $fechapago=$this->input->post('fechapago');
        $meses=['','ene','feb','mar','abr','may','jun','jul','ago','sep','oct','nov','dic','','','',''];
        $a=substr($anio,2,2);
        $anio=$this->input->post('anio');
        $periodo=$meses[(int)$mes]."-".$a;
        $factura=$this->input->post('factura');
        $query = $this->db->query("SELECT * FROM pagos WHERE ambiente_id='$ambiente_id' AND mes='$mes' AND anio='$anio'");
        if ($query->num_rows()>=1){
            echo "Ya se realizo el pago";
            exit;
        }
        $query = $this->db->query("SELECT * FROM ambientes WHERE id='$ambiente_id'");
        $row=$query->row();
//        echo $query->num_rows();

//        echo $fechapago;
        $this->db->query("INSERT INTO pagos SET
                                                monto='$monto',
                                                ambiente_id='$ambiente_id',
                                                user_id='$user_id',
                                                mes='$mes',
                                                anio='$anio',
                                                fechapago='$fechapago',
                                                periodo='$periodo',
                                                factura='$factura',
                                                rubro='$row->rubro',
                                                nombre='$row->nombre',
                                                detalle='$row->detalle'
                                                ");
//        header('Location: '.base_url().'Cliente');
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
    public function nombres(){
        $rubro=$this->input->post('rubro');
//        $rubro='OFICINAS DE TRANSPORTE';
        $query=$this->db->query("SELECT *
        FROM ambientes
        WHERE rubro='$rubro'
        ");
//        exit;
//        json_decode( $query->result());
        echo json_encode( $query->result_array());
    }
    public function consulta(){
        $ambiente_id=$this->input->post('id');
//        $rubro='OFICINAS DE TRANSPORTE';
        $query=$this->db->query("SELECT *
        FROM pagos
        WHERE ambiente_id='$ambiente_id'
        ORDER BY anio,mes
        ");
//        exit;
//        json_decode( $query->result());
        echo json_encode( $query->result_array());
    }
}
