<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Control de Ambientes</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Ambientes</li>
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
                                <?php if($this->session->tipo=='ADMINISTRADOR'): ?>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-lg">
                                    <i class="fa fa-plus-circle"></i> Crear Nuevo Ambiente
                                </button>
                                <?php endif ?>
                                <div class="modal fade" id="modal-lg">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header bg-success text-white">
                                                <h4 class="modal-title"> <i class="fa fa-plus-circle"></i> Nuevo Ambiente</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form-horizontal" method="post" action="<?=base_url()?>Ambiente/crear">
                                                    <div class="card-body">
                                                        <div class="form-group row">
                                                            <label for="rubros" class="col-sm-2 col-form-label">Rubro</label>
                                                            <div class="col-sm-10">
                                                                <!-- <input type="text" class="form-control" id="rubros" name="rubros" placeholder="Rubro" required> -->
                                                                <select class="form-control" name="rubro" required="" >
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
                                                            <label for="cliente" class="col-sm-2 col-form-label">Cliente</label>
                                                            <div class="col-sm-10" class="form-control">
                                                                <select class="form-control" id="cliente" name="cliente">
                                                                    <option value="0">Seleccionar cliente</option>
                                                                    <?php 
                                                                        $datos=$this->db->query("SELECT id, razon, nombres, nit FROM clientes WHERE estado=1");
                                                                        foreach ($datos->result() as $fila ) {
                                                                            echo '<option value="'.$fila->id.'" id="'.$fila->razon.'">'.$fila->razon.'</option>';
                                                                        }
                                                                    ?>
                            
                                                                </select>
                                                                <!-- <select class="form-control select2" id="btn-check"style="width: 100%;">
                                                                    <option selected="selected">Alabama</option>
                                                                    <option>Alaska</option>
                                                                    <option>California</option>
                                                                    <option>Delaware</option>
                                                                    <option>Tennessee</option>
                                                                    <option>Texas</option>
                                                                    <option>Washington</option>
                                                                </select> -->
                                                            </div>
                                                        </div>
                                                        <!-- <div class="form-group row">
                                                            <label for="nombre" class="col-sm-2 col-form-label">Razon social o nombre</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="nit" class="col-sm-2 col-form-label">Nit</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="nit" name="nit" placeholder="Nit" required>
                                                            </div>
                                                        </div> -->
                                                        <div class="form-group row">
                                                            <label for="detalle" class="col-sm-2 col-form-label">Detalle</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="detalle" name="detalle" placeholder="Detalle" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="canon" class="col-sm-2 col-form-label">Canon</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="canon" name="canon" placeholder="Canon de alquiler" required>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="form-group row">
                                                            <label for="tipo" class="col-sm-2 col-form-label">Tipo</label>
                                                            <div class="col-sm-10">
                                                                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                                    <input type="checkbox" class="custom-control-input" id="tipo" name="tipo">
                                                                    <label class="custom-control-label" for="tipo">INDEFINIDO / LIMITE</label>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                        <div class="form-group row">
                                                            <label for="tipo" class="col-sm-2 col-form-label">Tipo</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control" name="tipo" required="" >
                                                                    <option value="">Seleccionar</option>
                                                                    <option value="LIMITE">LIMITE</option>
                                                                    <option value="INDEFINIDO">INDEFINIDO</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="ncontrato" class="col-sm-2 col-form-label">Nro Contrato</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="ncontrato" name="ncontrato" placeholder="Nro Contrato" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="fechainit" class="col-sm-2 col-form-label">Fecha inicio</label>
                                                            <div class="col-sm-10">
                                                                <input type="date" class="form-control" id="fechainit" name="fechainit" placeholder="Fecha inicio de contrato" required>
                                                            </div>
                                                        </div>     
                                                        <div class="form-group row">
                                                            <label for="fechalim" class="col-sm-2 col-form-label">Fecha Limite</label>
                                                            <div class="col-sm-10">
                                                                <input type="date" class="form-control" id="fechalim" name="fechalim" placeholder="Fecha limite de contrato">
                                                            </div>
                                                        </div>                                                    
                                                        <div class="form-group row">
                                                            <label for="mesanine" class="col-sm-2 col-form-label">Bodega/Almacen</label>
                                                            <div class="col-sm-10">
<!--                                                                <input type="text" class="form-control" id="mesanine" name="mesanine" placeholder="Mesasnine" required>-->
<!--                                                                <div class="form-group">-->
                                                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                                        <input type="checkbox" class="custom-control-input" id="mesanine" name="mesanine">
                                                                        <label class="custom-control-label" for="mesanine">NO/SI (BG, AL)</label>
                                                                    </div>
<!--                                                                </div>-->
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
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Rubro</th>
                                    <th>Nombre</th>
                                    <th>Nit</th>
                                    <th>Detalle</th>
                                    <th>BG/AL</th>
                                    <th>Canon</th>
                                    <th>Nro Contrato</th>
                                    <th>Tipo</th>
                                    <th>Opciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                <script>
                                    function borrar(e){
                                        if (!confirm('Seguro de eliminar?')){
                                            e.preventDefault();
                                        }
                                    }
                                </script>
                                <?php
                                $query=$this->db->query("SELECT * FROM ambientes WHERE estado=1");
//                                $cont=0;
                                foreach ($query->result() as $row)
                                {
//                                    $cont++;
                                    if ($row->mesanine=='on'){
                                        $me="<span class='badge badge-success'>SI</span>";
                                    }else{
                                        $me="<span class='badge badge-danger'>NO</span>";
                                    }
                                    if ($this->session->tipo=='ADMINISTRADOR'){
                                        $be="<div class='btn btn-group'>
                                                <button type='button' class='btn btn-info btn-sm' data-toggle='modal' data-target='#exampleModal3'
                                                    data-id='$row->id'
                                                    data-nombre='$row->nombre'
                                                ><i class='fa fa-list'></i></button>
                                                <button type='button' class='btn btn-warning btn-sm' data-toggle='modal' data-target='#exampleModal' 
                                                    data-rubro='$row->rubro'
                                                    data-nombre='$row->nombre'
                                                    data-nit='$row->nit'
                                                    data-detalle='$row->detalle'
                                                    data-mesanine='$row->mesanine'
                                                    data-canon='$row->canon'
                                                    data-ncontrato='$row->ncontrato'
                                                    data-tipo='$row->tipo'
                                                    data-fechainit='$row->fechainit'
                                                    data-fechalim='$row->fechalim'
                                                    data-id='$row->id'
                                                ><i class='fa fa-edit'></i></button>
                                                
                                                <a type='button' onclick='borrar(event)' href='".base_url()."Ambiente/borrar/$row->id' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></a>
                                            </div>";
                                    }else{
                                        $be="";
                                    }
                                    if ($row->tipo=='LIMITE'){
                                        
                                        $lim="<button type='button' class='btn btn-warning btn-sm' data-toggle='modal'  data-target='#exampleModal2'
                                                    data-fechainitv='$row->fechainit'
                                                    data-fechalimv='$row->fechalim'
                                                    data-id='$row->id'
                                                >LIMITE</button>";

                                    }else{
                                        // $lim="<span class='badge badge-danger'>INDEFINIDO</span>";
                                        $lim="<button type='button' class='btn btn-danger btn-sm' data-toggle='modal'  data-target='#exampleModal2'
                                                    data-fechainitv='$row->fechainit'
                                                    data-fechalimv='$row->fechalim'
                                                    data-id='$row->id'
                                                >INDEFINIDO</button>";
                                    }
                                    echo "<tr>
                                        <td>$row->id</td>
                                        <td>$row->rubro</td>
                                        <td>$row->nombre</td>
                                        <td>$row->nit</td>
                                        <td>$row->detalle</td>
                                        <td>$me</td>
                                        <td>$row->canon</td>
                                        <td>$row->ncontrato</td>
                                        <td>$lim</td>  
                                        <td>
                                            $be
                                        </td>
                                    </tr>";
                                }
                                ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Rubro</th>
                                    <th>Nombre</th>
                                    <th>Nit</th>
                                    <th>Detalle</th>
                                    <th>BG/AL</th>
                                    <th>Canon</th>
                                    <th>Nro Contrato</th>
                                    <th>Tipo</th>
                                    <th>Opciones</th>
                                </tr>
                                </tfoot>
                            </table>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                            <input type="text" class="form-control" id="nombre2" name="nombree" placeholder="Nombre" required>
                                                        </div>

                                                        <!-- <?php foreach ($datos as $row){ ?>
                                                            <tr>
                                                            <th scope='row'><?php echo $row->id_paciente; ?></th>
                                                            <td><?php echo $row->nombre." ".$row->apellido; ?></td>
                                                            <td><?php echo $row->ci; ?></td>
                                                            <?php $datacliente=$row->id_paciente."*".$row->nombre."*".$row->apellido."*".$row->ci."*".$row->sexo."*".$row->fnac."*".$row->profecion."*".$row->direccion."*".$row->obs;
                                                            ?>
                                                            <td>
                                                              <button type="button" class="btn btn-success btn-check" value="<?php echo $datacliente; ?>"><span class="fa fa-check">Agregar</span></button>

                                                              
                                                              </td>
                                                            </tr>
                                                        <?php }?> -->
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
                                                            <label for="ncontrato2" class="col-sm-2 col-form-label">Nro Contrato</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="ncontrato2" name="ncontrato" placeholder="Nro Contrato" required>
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
                                                                <label class="custom-control-label" for="mesanine2">NO/SI (BG, AL)</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.card-body -->
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-trash"></i> Cancelar</button>
                                                    <button type="submit" class="btn btn-warning">  Modificar <i class="fa fa-edit"></i></button>
                                                </div>
                                                <!-- /.card-footer -->
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-warning">
                                            <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-edit"></i> Fecha limite contrato</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal" method="post" action="">
                                                <div class="card-body">
                                                    <div class="form-group row">
                                                        <label for="fechainitv" class="col-sm-2 col-form-label">Fecha inicio</label>
                                                        <div class="col-sm-10">
                                                            <input type="date" class="form-control" id="fechainitv" name="fechainit" placeholder="Fecha inicio de contrato" required disabled>
                                                        </div>
                                                    </div>     
                                                    <div class="form-group row">
                                                        <label for="fechalimv" class="col-sm-2 col-form-label">Fecha Limite</label>
                                                        <div class="col-sm-10">
                                                            <input type="date" class="form-control" id="fechalimv" name="fechalim" placeholder="Fecha limite de contrato" required disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.card-body -->
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-trash"></i> Cerrar</button>
                                                    <!-- <button type="submit" class="btn btn-warning">  Modificar <i class="fa fa-edit"></i></button> -->
                                                </div>
                                                <!-- /.card-footer -->
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-warning">
                                            <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-edit"></i> Fecha limite contrato</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal" method="post" action="">
                                                <div class="card-body">
                                                    <table class="table">
                                                        <thead class="bg-black">
                                                            <tr>
                                                                <th>Factura</th>
                                                                <th>Periodo</th>
                                                                <th>Fecha pago</th>
                                                                <th>Monto</th>
                                                                <th>Detalle</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="historial">

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- /.card-body -->
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-trash"></i> Cerrar</button>
                                                    <!-- <button type="submit" class="btn btn-warning">  Modificar <i class="fa fa-edit"></i></button> -->
                                                </div>
                                                <!-- /.card-footer -->
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
            // console.log('a');
            var button = $(event.relatedTarget) // Button that triggered the modal
            console.log(button.data('mesanine')); // Extract info from data-* attributes
            $('#rubro2').val(button.data('rubro'));
            $('#nombre2').val(button.data('nombre'));
            $('#nit2').val(button.data('nit'));
            $('#detalle2').val(button.data('detalle'));
            $('#canon2').val(button.data('canon'));
            $('#ncontrato2').val(button.data('ncontrato'));
            $('#tipo2').val(button.data('tipo'));
            $('#fechainit2').val(button.data('fechainit'));
            $('#fechalim2').val(button.data('fechalim'));
            if (button.data('mesanine')=='on'){
                $('#mesanine2').attr('checked', true);
            }else {
                $('#mesanine2').attr('checked', false);
            }

            // $('#fechanac2').val(button.data('fechanac'));
            // $('#nit2').val(button.data('nit'));
            // $('#replegal2').val(button.data('replegal'));
            // $('#celular2').val(button.data('celular'));
            // $('#ncontrato2').val(button.data('ncontrato'));
            // $('#direccion2').val(button.data('direccion'));
            $('#id2').val(button.data('id'));
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            // var modal = $(this)
            // modal.find('.modal-title').text('New message to ' + recipient)
            // modal.find('.modal-body input').val(recipient)
        })
        $('#exampleModal2').on('show.bs.modal', function (event) {
            // console.log('a');
            var button = $(event.relatedTarget) // Button that triggered the modal
            $('#fechainitv').val(button.data('fechainitv'));
            $('#fechalimv').val(button.data('fechalimv'));
        })

        $('#exampleModal3').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            let id=button.data('id');
            // $('#fechalimv').val(button.data('fechalimv'));
            $('#historial').html('');
            $.ajax({
                url:'Ambiente/historial/'+id,
                success:function (e){
                    let d=JSON.parse(e);
                    let t='';
                    d.forEach(r=>{
                        t+='<tr>' +
                            '<td>'+r.factura+'</td>' +
                            '<td>'+r.periodo+'</td>' +
                            '<td>'+r.fechapago+'</td>' +
                            '<td>'+r.monto+'</td>' +
                            '<td>'+r.detalle+'</td>' +
                            '</tr>';
                    });
                    $('#historial').html(t);
                }
            })
            var modal = $(this)
            modal.find('.modal-title').text('Nombre ' + button.data('nombre'))
        })

        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');


        // $(document).on("click",".btn-check",function(){
        //     alert("estoy aqui");
        //     // alert($(this).val());
        //     cliente=$(this).val();
        //     alert(cliente);
        //     infocliente=cliente.split("*");
        //     // alert(infocliente[0]);
        //     $("#id_paciente").val(infocliente[0]);
        //     $("#paciente").val(infocliente[1]+" "+infocliente[2]);
        //     //$("#ModalBuscarPaciente").modal("hide");
        //     // $(this).closest('.modal').modal('toggle');
        //     //$("#ModalBuscarPaciente").hide();
            

        // })
    }
    
        // $("#nombre2").keyup(function(){
        //     $('#tbpaciente tbody').html('');
        //     var tcliente =$("#nombre2").val();
        //     $.post('../Cliente/busquedacliente',
        //         {tcliente: tcliente},
        //         function(data){
        //             var obj=JSON.parse(data);
        //             var salida="";
        //             var datacliente="";
        //             $.each(obj, function(i, item){
        //                 // datacliente=""+item.id_paciente+"*"+item.nombre+"*"+item.apellido+"*"+item.ci+"*"+item.sexo+"*"+item.fnac+"*"+item.profecion+"*"+item.direccion+"*"+item.obs;
        //                 salida+=""+
        //                 "<tr>"+
        //                     "<th scope='row'>"+item.id+"</th>"+
        //                     // "<td>"+item.nombre+" "+item.apellido+"</td>"+
        //                     "<td>"+item.razon+"</td>"+
        //                     "<td>"+item.nit+"</td>"+
        //                     // datacliente=""+item.id_paciente+"*"+item.nombre+"*"+item.apellido+"*"+item.ci+"*"+item.sexo+"*"+item.fnac+"*"+item.profecion+"*"+item.direccion+"*"+item.obs;
        //                     "<td>"+
        //                       "<button type='button' class='btn btn-success btn-check' value='"+item.id+"*"+item.razon+"*"+item.nit+"'><span class='fa fa-check'>Agregar</span></button>"+

                              
        //                     "</td>"+
        //                 "</tr>";
        //             });                 
        //             // alert(salida);
        //             $('#tbpaciente tbody').append(salida);
        //         });
        //     })    

            
</script>
