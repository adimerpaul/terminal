<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Control de Valorados</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Valorados </li>
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
                            <h3 class="card-title" style="width: 100%">
                                <div class="row" style="width: 100%">
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#modal-lg">
                                            <i class="fa fa-plus-circle"></i> Crear Nuevo
                                        </button>
                                    </div>
                                    <div class="col-md-10">
                                        <form action="<?=base_url()?>Valorados/cambio" method="post">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="date" name="fecha" value="<?=$fecha?>" class="form-control">
                                                </div>
                                                <div class="col-md-6">
                                                    <button type="submit" class="btn btn-info"><i class="fa fa-eye"></i>ver</button>    
                                                </div>
                                            </div>
                                            
                                            
                                        </form>
                                    </div>
                                </div>
                                
                                
                                <div class="modal fade" id="modal-lg">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header bg-success text-white">
                                                <h4 class="modal-title"> <i class="fa fa-plus-circle"></i> Nuevo</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                                                        
                                            </div>
                                            <div class="modal-body">
                                                <form class="form-horizontal" method="post" action="<?=base_url()?>Valorados/crear">
                                                    <!-- form_open(base_url().'Valorados/crear'); -->
                                                    <div class="card-body">
                                                        <div class="form-group row">
                                                            <label for="porton" class="col-sm-2 col-form-label">Porton</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control" name="porton" id="porton" required="" >
                                                                    <option value="0">Seleccionar Porton</option>
                                                                        <?php
                                                                            $datos=$this->db->query("SELECT id, nombre,tipo FROM porton");
                                                                            foreach ($datos->result() as $fila ) {
                                                                                echo '<option value="'.$fila->id.'" id="'.$fila->id.'">'.$fila->nombre.'</option>';
                                                                            }
                                                                        ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="nombrep" class="col-sm-2 col-form-label">Persona</label>
                                                            <div class="col-sm-10" class="form-control">
                                                                <select class="form-control" id="nombrep" name="nombrep" required="">
                                                                    <option value="0">Seleccionar personal</option>
                                                                    <?php
                                                                        $datos=$this->db->query("SELECT id, nombre FROM personal");
                                                                        foreach ($datos->result() as $fila ) {
                                                                            echo '<option value="'.$fila->id.'" id="'.$fila->id.'">'.$fila->nombre.'</option>';
                                                                        }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="detalle" class="col-sm-2 col-form-label">Detalle</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="detalle" name="detalle" placeholder="Detalle" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="ticketinicio" class="col-sm-2 col-form-label">Ticket inicio</label>
                                                            <div class="col-sm-10" id="ticketiniciodiv" name="ticketiniciodiv">
                                                                <!-- <input type="text" class="form-control" id="ticketinicio" name="ticketinicio" required> -->

                                                                <!-- <select class="form-control" id="ticketinicio" name="ticketinicio">
                                                                    <option value="0">Seleccionar</option>
                                                                </select> -->
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="ticketfin" class="col-sm-2 col-form-label">Ticket final</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="ticketfin" name="ticketfin" placeholder="Ticket final" required oninput="calcular()">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" id="divcantidad">

                                                        </div>
                                                        <div class="form-group row" id="divprecio">
                                                            <label for="precio" class="col-sm-2 col-form-label">Presio Unit.</label>
                                                            <div class="col-sm-10" id="preciodiv" name="preciodiv">
                                                                <!-- <input type="text" class="form-control" id="precio" name="precio" placeholder="Presio Unit." required oninput="calcular()"> -->
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" id="divsubtotal">

                                                        </div>
                                                        <script type="text/javascript">
                                                            function calcular() {
                                                            // cantidad de ticket
                                                              var tinicio = document.getElementById("ticketinicio").value;
                                                                // alert(parseInt(tinicio));
                                                              var tfin = document.getElementById("ticketfin").value;
                                                              var cant=0;
                                                              if (tfin!=tinicio) {
                                                                cant=tfin-(tinicio-1);
                                                              }
                                                              if (tfin==tinicio) {
                                                                cant=1;
                                                              }
                                                              var cad="<label for='cantidad' class='col-sm-2 col-form-label'>Cantidad ticket</label><div class='col-sm-10'><input type='text' class='form-control' id='cantidad' name='cantidad' value='";
                                                              var cad2="' required></div>";
                                                              document.getElementById("divcantidad").innerHTML = cad.concat(cant,cad2);

                                                            // sub total
                                                              var prec = document.getElementById("precio").value;
                                                              var subt=cant*prec;
                                                              var cads="<label for='subtotal' class='col-sm-2 col-form-label'>Sub Total</label><div class='col-sm-10'><input type='text' class='form-control' id='subtotal' name='subtotal' value='";
                                                              var cads2="' required></div>";
                                                              document.getElementById("divsubtotal").innerHTML = cads.concat(subt,cads2);
                                                            }
                                                        </script>
                                                        <div class="form-group row">
                                                            <label for="fechacreacion" class="col-sm-2 col-form-label">Fecha</label>
                                                            <div class="col-sm-10">
                                                                <input type="date" class="form-control" id="fechacreacion" name="fechacreacion" value="<?=date('Y-m-d'); ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.card-body -->
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-trash"></i> Cancelar</button>
                                                        <button type="submit" class="btn btn-success">  Crear <i class="fa fa-plus"></i></button>
                                                    </div>
                                                    <!-- /.card-footer -->
                                                </form>
                                            </div>

                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                            </h3>
                        </div>
                        <script>
                            function borrar(e){
                                if (!confirm('Seguro de eliminar?')){
                                    e.preventDefault();
                                }
                            }
                        </script>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php
                            $dia=['','LUNES','MARTES','MIERCOLES','JUEVES','VIERNES','SABADO','DOMINGO']

                            ?>
                            <table id="" class="table table-bordered">
                                <thead>
                                <tr><?php 
                                $date=date_create($fecha);
                                
                                 ?>
                                    <th colspan="8" class="text-center">RECAUDACION VALORES <?= $dia[(int)date_format($date,"N")]?> <?=date_format($date,"d/m/Y")?></th>
                                </tr>
                                <tr>
                                    <!-- <th>#</th> -->
                                    <th>Detalle</th>
<!--                                    <th>Porton</th>-->
                                    <th>Nombre</th>
                                    <th>Ticket Inicio</th>
                                    <th>Ticket Final</th>
                                    <th>Cantidad Ticket</th>
                                    <th>Precio Unit.</th>
                                    <th>SubTotal</th>
                                    <th>Opciones</th>
                                </tr>
                                </thead>
                                <tbody id="contenido">
                                    <?php
                                    $tipoval=$this->db->query("SELECT * FROM porton GROUP BY tipo DESC ");
                                    $totalrec=0;
                                    foreach ($tipoval->result() as $row0)
                                    {
                                        echo "
                                            <tr>
                                                <th colspan='8' class='text-center'>$row0->tipo</th>
                                            </tr>";
                                        $tparcial=0;
                                        $query=$this->db->query("SELECT * FROM `porton` WHERE id IN (SELECT porton_id FROM `historial` h WHERE date(h.fechacreacion)=date('$fecha') AND tipo='$row0->tipo' GROUP BY porton_id)");
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
                                                <th></th>
                                            </tr>";
                                            $query2=$this->db->query("SELECT h.id, h.detalle, h.ticketinicio, h.ticketfin, h.cantidad, h.precio, h.subtotal, p.nombre FROM historial h INNER JOIN personal p ON p.id=h.persona_id WHERE porton_id='$row->id' AND date(h.fechacreacion)=date('$fecha')");
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
                                                    <td><a type='button' onclick='borrar(event)' href='".base_url()."Valorados/borrar/$row2->id' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></a></td>
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
                                                <th></th>
                                            </tr>";
                                            $tparcial+=$s;
                                        }
                                        $totalrec+=$tparcial;
                                        echo "
                                            <tr>
                                                <th colspan='6' class='text-center'>TOTAL PARCIAL</th>
                                                <th>".number_format($tparcial,2)."</th>
                                                <th></th>
                                            </tr>";
                                    }
                                    echo "
                                            <tr>
                                                <th colspan='6' class='text-center'>TOTAL RECAUADO ".$dia[(int)date_format($date,"N")]." ".date_format($date,"d/m/Y")."</th>
                                                <th>".number_format($totalrec, 2)."</th>
                                                <th></th>
                                            </tr>";

//                                    $query=$this->db->query("SELECT por.nombre AS nomporton, h.detalle, p.nombre, h.ticketinicio, h.ticketfin, h.cantidad, h.precio, h.subtotal FROM porton por, historial h, personal p WHERE por.id=h.porton_id AND p.id=h.persona_id");
//    //                                $cont=0;
//                                    foreach ($query->result() as $row)
//                                    {
    //                                    $cont++;
                                        // if ($row->mesanine=='on'){
                                        //     $me="<span class='badge badge-success'>SI</span>";
                                        // }else{
                                        //     $me="<span class='badge badge-danger'>NO</span>";
                                        // }
                                        // if ($this->session->tipo=='ADMINISTRADOR'){
                                        //     $be="<a type='button' onclick='borrar(event)' href='".base_url()."Ambiente/borrar/$row->id' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></a>";
                                        // }else{
                                        //     $be="";
                                        // }
                                        // if ($row->tipo=='LIMITE'){

                                        //     $lim="<button type='button' class='btn btn-warning btn-sm' data-toggle='modal'  data-target='#exampleModal2'
                                        //                 data-fechainitv='$row->fechainit'
                                        //                 data-fechalimv='$row->fechalim'
                                        //                 data-id='$row->id'
                                        //             >LIMITE</button>";

                                        // }else{
                                        //     $lim="<button type='button' class='btn btn-danger btn-sm' data-toggle='modal'  data-target='#exampleModal2'
                                        //                 data-fechainitv='$row->fechainit'
                                        //                 data-fechalimv='$row->fechalim'
                                        //                 data-id='$row->id'
                                        //             >INDEFINIDO</button>";
                                        // }
//                                        echo "<tr>
//                                            <td>$row->nomporton</td>
//                                            <td>$row->detalle</td>
//                                            <td>$row->nombre</td>
//                                            <td>$row->ticketinicio</td>
//                                            <td>$row->ticketfin</td>
//                                            <td>$row->cantidad</td>
//                                            <td>$row->precio</td>
//                                            <td>$row->subtotal</td>
//                                        </tr>";
//                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <!-- <form action="" method="post" id="formulario">
                                        <td style="width: 250px">
                                            <select name="porton" id="porton" class="form-control" required>
                                                <option value="0">Seleccionar Porton</option>
                                                    <?php
                                                        $datos=$this->db->query("SELECT id, nombre FROM porton");
                                                        foreach ($datos->result() as $fila ) {
                                                            echo '<option value="'.$fila->id.'" id="'.$fila->id.'">'.$fila->nombre.'</option>';
                                                        }
                                                    ?>
                                            </select>
                                        </td>
                                        <td style="width: 150px">
                                            <input type="text" class="form-control" placeholder="Hora" id="detalle" name="detalle">
                                        </td>
                                        <td style="width: 250px">
                                            <select name="nombre" id="nombre" class="form-control" required>
                                                <option value="0">Seleccionar personal</option>
                                                    <?php
                                                        $datos=$this->db->query("SELECT id, nombre FROM personal");
                                                        foreach ($datos->result() as $fila ) {
                                                            echo '<option value="'.$fila->id.'" id="'.$fila->id.'">'.$fila->nombre.'</option>';
                                                        }
                                                    ?>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="" id="ticketinicio" name="ticketinicio">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="Ticket fin" id="ticketfin" name="ticketfin">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="" id="catidad" name="catidad">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="" id="precio" name="precio">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="" id="subtotal" name="subtotal">
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-plus-circle"></i></button>
                                        </td>
                                    </form> -->
                                </tr>
                                </tfoot>
                            </table>
                            <!-- <div class="modal fade" id="exampleModalcopy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-warning">
                                            <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-edit"></i> Modificar Ambiente</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal" method="post" action="<?=base_url()?>Ambiente/modificar">
                                                <div class="card-body">
                                                    <div class="form-group row">
                                                        <label for="rubro2" class="col-sm-2 col-form-label">Rubro</label>
                                                        <div class="col-sm-10">
                                                            <input type="hidden" id="id2" name="id">
                                                            <select class="form-control" name="rubro" required=""  id="rubro2">
                                                                <option value="">Seleccionar</option>
                                                                <option value="OFICINAS DE TRANSPORTE">OFICINAS DE TRANSPORTE</option>
                                                                <option value="BODEGAS Y ALMACENES">BODEGAS Y ALMACENES</option>
                                                                <option value="KIOSKOS">KIOSKOS</option>
                                                                <option value="PLANTA BAJA">PLANTA BAJA</option>
                                                                <option value="PLANTA ALTA COMERCIAL">PLANTA ALTA COMERCIAL</option>
                                                                <option value="CAJEROS AUTOMATICOS">CAJEROS AUTOMATICOS</option>
                                                                <option value="ESTIVADORES">ESTIVADORES</option>
                                                                <option value="COMERCIANTES">COMERCIANTES</option>
                                                                <option value="PERNOCTE Y PARQUEO">PERNOCTE Y PARQUEO</option>
                                                                <option value="ENERGIA ELECTRICA">ENERGIA ELECTRICA</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="nombre2" class="col-sm-2 col-form-label">Razon social o nombre</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="nombre2" name="nombre2" placeholder="Nombre" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="nit2" class="col-sm-2 col-form-label">Nit</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="nit2" name="nit" placeholder="Nit" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="detalle2" class="col-sm-2 col-form-label">Detalle</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="detalle2" name="detalle" placeholder="Detalle" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="canon2" class="col-sm-2 col-form-label">Canon</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="canon2" name="canon" placeholder="Canon de alquiler" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="tipo2" class="col-sm-2 col-form-label">Tipo</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-control" id="tipo2" name="tipo" required="" >
                                                                <option value="">Seleccionar</option>
                                                                <option value="LIMITE">LIMITE</option>
                                                                <option value="INDEFINIDO">INDEFINIDO</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="fechainit2" class="col-sm-2 col-form-label">Fecha inicio</label>
                                                        <div class="col-sm-10">
                                                            <input type="date" class="form-control" id="fechainit2" name="fechainit" placeholder="Fecha inicio de contrato" required>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="fechalim2" class="col-sm-2 col-form-label">Fecha Limite</label>
                                                        <div class="col-sm-10">
                                                            <input type="date" class="form-control" id="fechalim2" name="fechalim" placeholder="Fecha limite de contrato">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="mesanine2" class="col-sm-2 col-form-label">Bodega Almacen</label>
                                                        <div class="col-sm-10">
                                                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                                <input type="checkbox" class="custom-control-input" id="mesanine2" name="mesanine">
                                                                <label class="custom-control-label" for="mesanine2">NO/SI (BG AL)</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.card-body --
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-trash"></i> Cancelar</button>
                                                    <button type="submit" class="btn btn-warning">  Modificar <i class="fa fa-edit"></i></button>
                                                </div>
                                                <!-- /.card-footer --
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
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
<script type="text/javascript">

    window.onload=function (){
        $(document).ready(function(){
            $("#porton").change(function(){
                $("#porton option:selected").each(function(){
                    id = $('#porton').val();
                    $.post("<?php echo base_url(); ?>Valorados/ticketini",{
                        id : id
                    }, function(data){
                        $("#ticketiniciodiv").html(data);
                    });
                    // alert("hola");
                });
            });
        });
        $(document).ready(function(){
            $("#porton").change(function(){
                $("#porton option:selected").each(function(){
                    id = $('#porton').val();
                    $.post("<?php echo base_url(); ?>Valorados/valprecio",{
                        id : id
                    }, function(data){
                        $("#preciodiv").html(data);
                    });
                });
            });
        }); 
    }
</script>
