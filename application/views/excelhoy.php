<!-- Content Wrapper. Contains page content -->
<?php
$hoy=$this->input->get('dia');

$date = new DateTime($hoy);
//$date->modify('+1 day');
//echo $date->format('Y-m-d');
$dias=['DOMINGO','LUNES','MARTES','MIERCOLES','JUEVES','VIERNES','SABADO','DOMINGO','','','','','',''];
$meses=['','ENERO','FEBRERO','MARZO','ABRIL','MAYO','JUNIO','JULIO','AGOSTO','SEPTIEMBRE','OCTUBRE','NOVIEMBRE','DICIEMBRE',''];
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Control de Usuarios</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Usuarios</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>NRO</th>
                                    <th>FECHA</th>
                                    <th>CONCEPTO</th>
                                    <th>FAC. REC. Y OTROS</th>
                                    <th>DETALLES</th>
                                    <th>PERIODO</th>
                                    <th>INGRESOS</th>
                                    <th>GASTOS</th>
                                    <th>SALDO</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $actual = strtotime($hoy);
                                $d2 = date("Y-m-d", strtotime("-1 day", $actual));
                                $mon=0;
                                $tin=0;
                                $teg=0;
                                $query=$this->db->query("SELECT * FROM dpagos WHERE date(`dia`)=date('$d2')");
                                foreach ($query->result() as $row){

                                    echo '<tr>
                                            <td style="text-align: center"></td>
                                            <td></td>
                                            <td>SALDO ANTERIOR</td>
                                            <td style="text-align: center"></td>
                                            <td></td>
                                            <td style="text-align: center"></td>
                                            <td style="text-align: right">'.number_format($row->monto, 2).'</td>
                                            <td></td>
                                            <td>'.number_format($row->monto, 2).'</td>    
                                        </tr>';
                                        $mon+=$row->monto;
                                        $tin+=$row->monto;
                                }

                                $query=$this->db->query("SELECT * FROM pagos WHERE date(`fechapago`)=date('$hoy')");
                                /*if ($query->num_rows()==0) {
                                    
                                }*/
                                $c=0;
                                $s=$mon;
                                foreach ($query->result() as $row){
                                    $c++;

                                    echo '<tr>
                                            <td style="text-align: center">'.$c.'</td>
                                            <td>'.$row->fecha.'</td>
                                            <td>'.$row->nombre.'</td>
                                            <td style="text-align: center">'.$row->factura.'</td>
                                            <td>'.$row->detalle.'</td>
                                            <td style="text-align: center">'.strtoupper($row->periodo).'</td>';
                                            if ($row->tipo=='INGRESO'){
                                                echo '<td style="text-align: right">'.number_format($row->monto, 2).'</td>
                                                <td></td>';
                                                $s+=$row->monto;
                                                $tin+=$row->monto;
                                            }else{
                                                echo '<td></td>
                                                <td style="text-align: right">'.number_format($row->monto, 2).'</td>';
                                                $s-=$row->monto;
                                                $teg-=$row->monto;
                                            }
                                    echo '<td>'.number_format($s, 2).'</td>
                                        </tr>';
                                }
                                $row=$this->db->query("SELECT sum(subtotal) as monto FROM historial WHERE date(`fechacreacion`)=date('$hoy')")->row();
                                $c++;

                                $s+=$row->monto;
                                $tin+=$row->monto;
                                echo '<tr>
                                        <td style="text-align: center">'.$c.'</td>
                                        <td>'.$hoy.'</td>
                                        <td>INGRESOS DE VALORADOS</td>
                                        <td style="text-align: center"></td>
                                        <td>REC. '.$dias[$date->format('N')].' '.$hoy.'</td>
                                        <td style="text-align: center">'.$meses[(int)$date->format('m')].' '.$date->format('Y').'</td>
                                        <td style="text-align: right">'.number_format($row->monto,2).'</td>
                                        <td></td>
                                        <td>'.number_format($s, 2).'</td>
                                    </tr>';
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
                                    <th><?=number_format($tin, 2)?></th>
                                    <th><?=number_format((-1)*$teg, 2)?></th>
                                    <th><?=number_format($s, 2)?></th>
                                </tr>
                                </tfoot>
                            </table>





                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>NRO</th>
                                    <th>FECHA</th>
                                    <th>CONCEPTO</th>
                                    <th>FAC. REC. Y OTROS</th>
                                    <th>DETALLES</th>
                                    <th>PERIODO</th>
                                    <th>INGRESOS</th>
                                    <th>GASTOS</th>
                                    <th>SALDO</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $actual = strtotime($hoy);
                                $d2 = date("Y-m-d", strtotime("-1 day", $actual));
                                $mon=0;
                                $tin=0;
                                $teg=0;
                                $query=$this->db->query("SELECT * FROM dpagos WHERE date(`dia`)=date('$d2')");
                                foreach ($query->result() as $row){

                                    echo '<tr>
                                            <td style="text-align: center"></td>
                                            <td></td>
                                            <td>SALDO ANTERIOR</td>
                                            <td style="text-align: center"></td>
                                            <td></td>
                                            <td style="text-align: center"></td>
                                            <td style="text-align: right">'.number_format($row->monto, 2).'</td>
                                            <td></td>
                                            <td>'.number_format($row->monto, 2).'</td>    
                                        </tr>';
                                        $mon+=$row->monto;
                                        $tin+=$row->monto;
                                }

                                $query=$this->db->query("SELECT * FROM pagos WHERE date(`fechapago`)=date('$hoy')");
                                /*if ($query->num_rows()==0) {
                                    
                                }*/
                                $c=0;
                                $s=$mon;
                                foreach ($query->result() as $row){
                                    $c++;

                                    echo '<tr>
                                            <td style="text-align: center">'.$c.'</td>
                                            <td>'.$row->fecha.'</td>
                                            <td>'.$row->nombre.'</td>
                                            <td style="text-align: center">'.$row->factura.'</td>
                                            <td>'.$row->detalle.'</td>
                                            <td style="text-align: center">'.strtoupper($row->periodo).'</td>';
                                            if ($row->tipo=='INGRESO'){
                                                echo '<td style="text-align: right">'.number_format($row->monto, 2).'</td>
                                                <td></td>';
                                                $s+=$row->monto;
                                                $tin+=$row->monto;
                                            }else{
                                                echo '<td></td>
                                                <td style="text-align: right">'.number_format($row->monto, 2).'</td>';
                                                $s-=$row->monto;
                                                $teg-=$row->monto;
                                            }
                                    echo '<td>'.number_format($s, 2).'</td>
                                        </tr>';
                                }
                                $row=$this->db->query("SELECT sum(subtotal) as monto FROM historial WHERE date(`fechacreacion`)=date('$hoy')")->row();
                                $c++;

                                $s+=$row->monto;
                                $tin+=$row->monto;
                                echo '<tr>
                                        <td style="text-align: center">'.$c.'</td>
                                        <td>'.$hoy.'</td>
                                        <td>INGRESOS DE VALORADOS</td>
                                        <td style="text-align: center"></td>
                                        <td>REC. '.$dias[$date->format('N')].' '.$hoy.'</td>
                                        <td style="text-align: center">'.$meses[(int)$date->format('m')].' '.$date->format('Y').'</td>
                                        <td style="text-align: right">'.number_format($row->monto,2).'</td>
                                        <td></td>
                                        <td>'.number_format($s, 2).'</td>
                                    </tr>';
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
                                    <th><?=number_format($tin, 2)?></th>
                                    <th><?=number_format((-1)*$teg, 2)?></th>
                                    <th><?=number_format($s, 2)?></th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<script>
    window.onload=function (){
        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            // console.log(button.data('ci')); // Extract info from data-* attributes
            $('#name2').val(button.data('name'));
            $('#email2').val(button.data('email'));
            // $('#password2').val(button.data('password'));
            $('#tipo2').val(button.data('tipo'));
            $('#id2').val(button.data('id'));
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            // var modal = $(this)
            // modal.find('.modal-title').text('New message to ' + recipient)
            // modal.find('.modal-body input').val(recipient)
        })
        $('#exampleModal2').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            $('#idc2').val(button.data('idc2'));
            $('#emailc2').val(button.data('emailc2'));
        })

        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    }
</script>
