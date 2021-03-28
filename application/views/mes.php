<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de hoy</title>
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
$mes=$this->input->post('mes');
$anio=$this->input->post('anio');
$dias=['DOMINGO','LUNES','MARTES','MIERCOLES','JUEVES','VIERNES','SABADO','DOMINGO','','','','','',''];
$meses=['','ENERO','FEBRERO','MARZO','ABRIL','MAYO','JUNIO','JULIO','AGOSTO','SEPTIEMBRE','OCTUBRE','NOVIEMBRE','DICIEMBRE',''];
?>
<h3 style="text-align: center">DETALLE DE COBRO DE ALQUILERES Y ENERGIA ELECTRICA POR RUBROS:<?=$meses[(int)$mes]?></h3>
<table rules="all" style="width: 100%;font-size: 11px;border: 1px solid black;">
    <tr>
        <td width="100">DIA</td>
        <td style="text-align: right"><?=$dias[date('L')]?> <?=date('m')?> DE <?=$meses[(int)date('m')]?> DE <?=date('Y')?></td>
    </tr>
    <tr>
        <td width="100">NIT</td>
        <td style="text-align: right">148250029</td>
    </tr>
    <tr>
        <td width="450">APELL Y NOMBRES// DENOMINACION P RAZON SOCIAL:</td>
        <td style="text-align: right">ESTACIÓN DE AUTOBUSES ORURO SRL</td>
    </tr>
</table>
<h5 style="text-align: center">EXPRESADO EN BOLIVIANOS</h5>
<table rules="all" style="width: 100%;font-size: 10px;border: 1px solid black;">
    <thead>
        <tr>
            <th rowspan="2">NRO</th>
            <th rowspan="2">FECHA Y HORA</th>
            <th rowspan="2">CONCEPTO</th>
            <th rowspan="2">FAC. REC.</th>
            <th rowspan="2">DETALLE</th>
            <th rowspan="2">PERIODO</th>
            <th colspan="3">SALDO Y MOVIMIENTOS DE CAJA</th>
        </tr>
        <tr>
            <th>INGRESOS BS</th>
            <th>GASTOS BS</th>
            <th>SALDOS BS</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $query=$this->db->query("SELECT * FROM pagos WHERE date(fecha)=date(now())");
            $c=0;
            $s=0;
            foreach ($query->result() as $row){
                $c++;
                $s+=$row->monto;
                echo '<tr>
                        <td style="text-align: center">'.$c.'</td>
                        <td>'.$row->fecha.'</td>
                        <td>'.$row->nombre.'</td>
                        <td style="text-align: center">'.$row->factura.'</td>
                        <td>'.$row->detalle.'</td>
                        <td style="text-align: center">'.strtoupper($row->periodo).'</td>
                        <td style="text-align: right">'.$row->monto.'</td>
                        <td></td>
                        <td>'.$s.'</td>    
                    </tr>';
            }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th>TOTALES</th>
            <th></th>
            <th><?=$s?></th>
            <th></th>
            <th><?=$s?></th>
        </tr>
    </tfoot>
</table>
<script>
    window.onload=function (){
        // window.print();
    }
</script>
</body>
</html>
