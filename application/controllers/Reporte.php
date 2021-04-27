<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require __DIR__ . "/vendor/autoload.php";
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
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
        if ($this->input->get('btn')=='reporte'){
            $data['hoy']=$this->input->get('dia');
            $this->load->view('hoy',$data);
        }else{
            $this->load->view('templates/header');
            $this->load->view('excelhoy');
            $this->load->view('templates/footer');
//            $this->load->view('');
//
//
////$spreadsheet = new Spreadsheet();
////$sheet = $spreadsheet->getActiveSheet();
////$sheet->setCellValue('A1', 'Hello World !');
//
////$writer = new Xlsx($spreadsheet);
////$writer->save('hello world.xlsx');
//
//
//
//            $spreadsheet = new Spreadsheet();
//            $spreadsheet
//                ->getProperties()
//                ->setCreator("Aquí va el creador, como cadena")
//                ->setLastModifiedBy('Parzibyte') // última vez modificado por
//                ->setTitle('Mi primer documento creado con PhpSpreadSheet')
//                ->setSubject('El asunto')
//                ->setDescription('Este documento fue generado para parzibyte.me')
//                ->setKeywords('etiquetas o palabras clave separadas por espacios')
//                ->setCategory('La categoría');
//            $sheet = $spreadsheet->getActiveSheet();
//            $sheet->mergeCells("A1:C1");
//            $sheet->mergeCells("D1:F1");
//
//
//
//
//            $sheet->setCellValue('A1', 'DIA');
//            $sheet->setCellValue('A2', 'NIT');
//            $sheet->setCellValue('A3', 'APELL Y NOMBRES// DENOMINACION P RAZON SOCIAL:');
////            $sheet->getActiveSheet()->getStyle('A3')->setQuotePrefix(true);
////            $sheet->getActiveSheet()->getStyle('A3')->getAlignment()->setWrapText(true);
//
//
//            $sheet->setCellValue('A4', 'EXPRESADO EN BOLIVIANOS');
//
//            $sheet->setCellValue('A5', 'NRO');
//            $sheet->setCellValue('B5', 'FECHA Y HORA');
//            $sheet->setCellValue('C5', 'CONCEPTO');
//            $sheet->setCellValue('D5', 'FAC. REC.');
//            $sheet->setCellValue('E5', 'DETALLE');
//            $sheet->setCellValue('F5', 'PERIODO');
//            $sheet->setCellValue('G5', 'SALDO Y MOVIMIENTOS DE CAJA');
////            $sheet->setCellValue('H5', 'PERIODO');
//
//
//            $nombreDelDocumento = "Mi primer archivo.xlsx";
//            /**
//             * Los siguientes encabezados son necesarios para que
//             * el navegador entienda que no le estamos mandando
//             * simple HTML
//             * Por cierto: no hagas ningún echo ni cosas de esas; es decir, no imprimas nada
//             */
//
//            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
//            header('Content-Disposition: attachment;filename="' . $nombreDelDocumento . '"');
//            header('Cache-Control: max-age=0');
//
//            $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
//            $writer->save('php://output');
//            exit;
        }


    }
    public function mes()
    {
        if (!$this->session->name){
            header('Location: '.base_url());
        }
        if ($this->input->post('btn')=='mes'){
//            $data['hoy']=$this->input->post('dia');
            $this->load->view('mes');
        }else{
            $this->load->view('diario');
        }


    }
    public function mesvalorados()
    {
        if (!$this->session->name){
            header('Location: '.base_url());
        }
        if ($this->input->post('btn')=='mes'){
//            $data['hoy']=$this->input->post('dia');
            $this->load->view('mesvalorados');
        }else{
            $this->load->view('diario');
        }


    }

    public function deuda()
    {
        if (!$this->session->name){
            header('Location: '.base_url());
        }
        $this->load->view('deuda');
    }
}
