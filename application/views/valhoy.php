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
    $date = new DateTime($hoy);
    $dia=['','LUNES','MARTES','MIERCOLES','JUEVES','VIERNES','SABADO','DOMINGO']
?>
    <table  rules="all" style="width: 100%;font-size: 11px;border: 1px solid black;">
        <thead>
            <tr>
                <th colspan="7" class="text-center">RECAUDACION VALORES <?= $dia[$date->format('N')]?> <?= $date->format('d/m/Y')?></th>
            </tr>
            <tr>
                <th>Detalle</th>
                <th>Nombre</th>
                <th>Ticket Inicio</th>
                <th>Ticket Final</th>
                <th>Cantidad Ticket</th>
                <th>Precio Unit.</th>
                <th>SubTotal</th>
            </tr>
        </thead>
        <tbody id="contenido">
                                    <?php
                                    $tipoval=$this->db->query("SELECT * FROM porton GROUP BY tipo DESC ");
                                    $totalrec=0;
                                    foreach ($tipoval->result() as $row)
                                    {
                                        echo "
                                            <tr>
                                                <th colspan='8' class='text-center'>$row->tipo</th>
                                            </tr>";
                                        $tparcial=0;
                                        $query=$this->db->query("SELECT * FROM `porton` WHERE id IN (SELECT porton_id FROM `historial` h WHERE date(h.fecha)='$hoy' AND tipo='$row->tipo' GROUP BY porton_id)");
                                        foreach ($query->result() as $row)
                                        {
                                            echo "
                                            <tr>
                                                <th colspan='2' class='text-center'>$row->nombre</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>";
                                            $query2=$this->db->query("SELECT * FROM historial h INNER JOIN personal p ON p.id=h.persona_id WHERE porton_id='$row->id' AND date(h.fecha)='$hoy'");
                                            $s=0;
                                            foreach ($query2->result() as $row2){
                                                echo "
                                                <tr>
                                                    <th class='text-center'>$row2->detalle</th>
                                                    <td>$row2->nombre</td>
                                                    <td>$row2->ticketinicio</td>
                                                    <td>$row2->ticketfin</td>
                                                    <td>$row2->cantidad</td>
                                                    <td>$row2->precio</td>
                                                    <td>$row2->subtotal</td>
                                                </tr>";
                                                $s+=$row2->subtotal;
                                            }
                                            echo "
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th>TOTAL</th>
                                                <th>".number_format($s,2)."</th>
                                            </tr>";
                                            $tparcial+=$s;
                                        }
                                        $totalrec+=$tparcial;
                                        echo "
                                            <tr>
                                                <th colspan='6' class='text-center'>TOTAL PARCIAL</th>
                                                <th>".number_format($tparcial,2)."</th>
                                            </tr>";
                                    }
                                    echo "
                                            <tr>
                                                <th colspan='6' class='text-center'>TOTAL RECAUDADO ".$dia[$date->format('N')]." ".$date->format('d/m/Y')."</th>
                                                <th>".number_format($totalrec,2)."</th>
                                            </tr>";
                                    ?>
        </tbody>
        <tfoot>
            <tr>
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
