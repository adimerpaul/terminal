<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de deudas</title>
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
$mes1=$this->input->post('mes1');
$anio1=$this->input->post('anio1');
$mes2=$this->input->post('mes2');
$anio2=$this->input->post('anio2');
$dias=['DOMINGO','LUNES','MARTES','MIERCOLES','JUEVES','VIERNES','SABADO','DOMINGO','','','','','',''];
$meses=['','ENE','FEB','MAR','ABR','MAY','JUN','JUL','AGO','SEP','OCT','NOV','DIC',''];
//exit;
$month = strtotime("$anio1-$mes1-01");
$end = strtotime("$anio2-$mes2-01");

?>
<h3 style="text-align: center">INGRESO ALQUILER OFICINA: <?=$meses[(int)$mes1]?> DEL <?=$anio1?> AL <?=$meses[(int)$mes2]?> DEL <?=$anio2?></h3>

<table rules="all" style="width: 100%;font-size: 10px;border: 1px solid black;">
    <thead>
    <tr>
        <th>#</th>
        <th>RUBRO</th>
        <th>RAZON SOCIAL O NOMBRE</th>
        <th>DETALLE</th>
        <?php
        while($month <= $end)
        {
            echo "<th>". $meses[ (int)date('m', $month)]."-".date('Y', $month)."</th>"; ;
            $month = strtotime("+1 month", $month);
        }
        ?>
    </tr>

    </thead>
    <tbody>
    <?php
    $query=$this->db->query("SELECT * FROM ambientes ORDER  BY rubro");
    $c=0;
    $s=0;

    foreach ($query->result() as $row){
        $c++;
//        $s+=$row->monto;
        echo "<tr>
                        <td>$c</td>
                        <td>$row->rubro</td>
                        <td>$row->nombre</td>
                        <td>$row->detalle</td>";
        $month = strtotime("$anio1-$mes1-01");
        $end = strtotime("$anio2-$mes2-01");
        while($month <= $end)
        {
            $query2=$this->db->query("SELECT * FROM pagos WHERE ambiente_id='$row->id' AND mes='".(int)date('m', $month)."' AND anio='".date('Y', $month)."'");
//            echo "<td>". $meses[ (int)date('m', $month)]."-".date('Y', $month)."</td>"; ;
            if ($query2->num_rows()!=0){
                echo "<td>". $query2->row()->factura."</td>";
            }else{
                echo "<td></td>";
            }

            $month = strtotime("+1 month", $month);
        }
        echo "</tr>";
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
