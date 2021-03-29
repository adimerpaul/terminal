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
$mes=$this->input->post('mes');
$anio=$this->input->post('anio');
$dias=['DOMINGO','LUNES','MARTES','MIERCOLES','JUEVES','VIERNES','SABADO','DOMINGO','','','','','',''];
$meses=['','ENERO','FEBRERO','MARZO','ABRIL','MAYO','JUNIO','JULIO','AGOSTO','SEPTIEMBRE','OCTUBRE','NOVIEMBRE','DICIEMBRE',''];
?>
<h3 style="text-align: center">DETALLE DE COBRO DE ALQUILERES Y ENERGIA ELECTRICA POR RUBROS: <?=$meses[(int)$mes]?> DEL <?=$anio?></h3>

<table rules="all" style="width: 100%;font-size: 10px;border: 1px solid black;">
    <thead>
        <tr>
            <th>RAZON SOCIAL O NOMBRE</th>
            <th>DETALLE</th>
            <th>FECHA DE PAGO</th>
            <th>PERIODO	N°</th>
            <th>FACT. - REC.</th>
            <th>BS.</th>
            <th>TOTAL Bs.</th>
        </tr>

    </thead>
    <tbody>
        <?php
        $query2=$this->db->query("SELECT rubro,count(*) cantidad,SUM(monto) monto FROM pagos GROUP BY rubro ORDER BY rubro");
        foreach ($query2->result() as $row2){
            echo " <tr>
                        <th colspan='5'>$row2->rubro</th>
                        <th>Cantidad $row2->cantidad</th>
                        <th>$row2->monto</th>
                    </tr>";
            $query=$this->db->query("SELECT * FROM pagos WHERE MONTH(fecha)=$mes AND YEAR(fecha)=$anio AND rubro='$row2->rubro'");
            $c=0;
            $s=0;

            foreach ($query->result() as $row){
                $c++;
                $s+=$row->monto;
                echo "<tr>
                        <td>$row->nombre</td>
                        <td>$row->detalle</td>
                        <td>$row->fechapago</td>
                        <td>$row->periodo</td>
                        <td>$row->factura</td>
                        <td>$row->monto</td>
                        <td></td>
                    </tr>";
            }
        }

        ?>
    </tbody>
    <tfoot>
    </tfoot>
</table>
<script>
    window.onload=function (){
        window.print();
    }
</script>
</body>
</html>
