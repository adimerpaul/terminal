<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte del Mes</title>
    <style>
        * {
            margin:  0;
            padding: 0;
            /*border: 0;*/
        }
    </style>
</head>
<body>
<?php
// $date = new DateTime($hoy);

$mes=$this->input->post('mes');
$anio=$this->input->post('anio');
// $date->modify('+1 day');
// echo $date->format('Y-m-d');
$dias=['DOMINGO','LUNES','MARTES','MIERCOLES','JUEVES','VIERNES','SABADO','DOMINGO','','','','','',''];
$meses=['','ENERO','FEBRERO','MARZO','ABRIL','MAYO','JUNIO','JULIO','AGOSTO','SEPTIEMBRE','OCTUBRE','NOVIEMBRE','DICIEMBRE',''];

?>
<table rules="all" style="width: 100%;font-size: 11px;border: 1px solid black;">
    <tr>
        <td style="text-align: center;">EGRESOS MES DE <?=$meses[(int)$mes]?> DEL <?=$anio?>
        </td>
    </tr>
</table>
<h5 style="text-align: center">EXPRESADO EN BOLIVIANOS</h5>
<table rules="all" style="width: 100%;font-size: 10px;border: 1px solid black;">
    <thead>
        <tr>
            <th rowspan="2">FECHA</th>
            <th rowspan="2">FAC. REC.</th>
            <th rowspan="2">NOMBRE</th>
            <th rowspan="2">DETALLE</th>
            <th rowspan="2">MONTO</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query=$this->db->query("SELECT * FROM tipogasto");
        $tgasto=0;
        foreach ($query->result() as $row){

            echo '<tr>
                        <td style="text-align: center">'.$row->nombre.'</td>    
                    </tr>';
            $query=$this->db->query("SELECT id, fecha, factura, nombre, detalle, monto FROM `pagos` WHERE tipo='EGRESO' AND valor_idtipopago='$row->id'");
            $s=0;
            foreach ($query->result() as $row){
                echo '<tr>
                        <td>'.$row->fecha.'</td>
                        <td style="text-align: center">'.$row->factura.'</td>
                        <td>'.$row->nombre.'</td>
                        <td>'.$row->detalle.'</td>
                        <td style="text-align: right">'.number_format($row->monto, 2).'</td>
                    </tr>';                    
                    $s+=$row->monto;
            }
            echo '<tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>SUBTOTAL</td>
                    <td>'.number_format($s, 2).'</td>
                </tr>';
            $tgasto+=$s;

        }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th>TOTAL GASTO</th>
            <th><?=number_format($tgasto, 2)?></th>
        </tr>
    </tfoot>
</table>
<script>
    window.onload=function (){
        window.print();
    }
</script>
</body>
</html>
