<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gastos extends CI_Controller {
    public function index()
    {
        if ($this->session->name && ($this->session->tipo=='ADMINISTRADOR')){
            $this->load->view('templates/header');
            $this->load->view('gastos');
            $this->load->view('templates/footer');
        } else {
            header('Location: '.base_url());
        }
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
        $tipogasto=$this->input->post('tipogasto');
        $nombre=$this->input->post('nombre');
        $detalle=$this->input->post('detalle');
        $user_id=$this->session->id;
        $fechapago=$this->input->post('fechapago');
        $monto=$this->input->post('monto');
        $factura=$this->input->post('factura');
        $meses=['','ene','feb','mar','abr','may','jun','jul','ago','sep','oct','nov','dic','','','',''];
        $mes=$this->input->post('mes');
        $anio=$this->input->post('anio');
        $a=substr($anio,2,2);
        $periodo=$meses[(int)$mes]."-".$a;
        // $query = $this->db->query("SELECT * FROM pagos WHERE ambiente_id='$ambiente_id' AND mes='$mes' AND anio='$anio'");
        // if ($query->num_rows()>=1){
        //     echo "Ya se realizo el pago";
        //     exit;
        // }
        // $query = $this->db->query("SELECT * FROM ambientes WHERE id='$ambiente_id'");
        // $row=$query->row();
//        echo $query->num_rows();

//        echo $fechapago;
        $this->db->query("INSERT INTO pagos SET
                                                monto='$monto',
                                                user_id='$user_id',
                                                mes='$mes',
                                                anio='$anio',
                                                fechapago='$fechapago',
                                                factura='$factura',
                                                periodo='$periodo',
                                                rubro='$tipogasto',
                                                nombre='$nombre',
                                                detalle='$detalle',
                                                tipo='EGRESO'
                                                ");
        // $query = $this->db->query("SELECT * FROM pagos WHERE ambiente_id='$ambiente_id' AND mes='$mes' AND anio='$anio'");
        // if ($query->num_rows()>=1){
        //     echo "Ya se realizo el pago";
        //     exit;
        // }
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
