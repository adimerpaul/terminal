<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cobro extends CI_Controller {
    public function index()
    {
        if ($this->session->name && ($this->session->tipo=='ADMINISTRADOR')){
            $this->load->view('templates/header');
            $this->load->view('cobros');
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
        $monto=$this->input->post('monto');
        $ambiente_id=$this->input->post('ambiente_id');
//        echo $monto;
//        exit;
        $user_id=$this->session->id;
        $mes=$this->input->post('mes');
        $anio=$this->input->post('anio');
        $fechapago=$this->input->post('fechapago');
//        echo "SELECT * FROM `hpagos` WHERE fecha='$fechapago'";
//        exit;



        $meses=['','ene','feb','mar','abr','may','jun','jul','ago','sep','oct','nov','dic','','','',''];
        $a=substr($anio,2,2);
        $anio=$this->input->post('anio');
        $periodo=$meses[(int)$mes]."-".$a;
        $factura=$this->input->post('factura');
        $query = $this->db->query("SELECT * FROM ambientes WHERE id='$ambiente_id'");
        $row=$query->row();
//        echo $row->rubro;
//        exit;
        if($row->rubro=="PERNOCTE Y PARQUEO"){
            echo "asasas";
        }
        else{
            $query = $this->db->query("SELECT * FROM pagos WHERE ambiente_id='$ambiente_id' AND mes='$mes' AND anio='$anio'");
            if ($query->num_rows()>=1){
                echo "Ya se realizo el pago";
                exit;
            }
        }


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

        $time=strtotime($fechapago);
        $mes=date("m",$time);
        $anio=date("Y",$time);
        $count=$this->db->query("SELECT * FROM `hpagos` WHERE mes='".(int)$mes."' AND anio='".(int)$anio."' ")->num_rows();
        if ($count==0){
            $actual = strtotime($fechapago);
            $m2 = date("m", strtotime("-1 month", $actual));
            $y2 = date("Y", strtotime("-1 month", $actual));
            $query=$this->db->query("SELECT * FROM `hpagos` WHERE mes='".(int)$m2."' AND anio='".(int)$y2."' ");
            $count=$query->num_rows();
            if ($count==0){
                $row->monto=0;
            }else{
                $row=$query->row();
            }
            $this->db->query("INSERT INTO hpagos SET mes='".(int)$mes."' , anio='".(int)$anio."' , monto=$monto+$row->monto");
        }else{
            $this->db->query("UPDATE  hpagos SET monto=monto+$monto WHERE mes='".(int)$mes."' AND anio='".(int)$anio."' ");
        }


        $count=$this->db->query("SELECT * FROM `dpagos` WHERE dia='$fechapago'")->num_rows();
        if ($count==0){
            $actual = strtotime($fechapago);
            $f2 = date("Y-m-d", strtotime("-1 day", $actual));
            $query=$this->db->query("SELECT * FROM `dpagos` WHERE dia='$f2'");
            $count=$query->num_rows();
            if ($count==0){
                $row->monto=0;
            }else{
                $row=$query->row();
            }
            $this->db->query("INSERT INTO dpagos SET dia='$fechapago' , monto=$monto+$row->monto");
        }else{
            $this->db->query("UPDATE  dpagos SET monto=monto+$monto WHERE dia='$fechapago'");
        }



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
