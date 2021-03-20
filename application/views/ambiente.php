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
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-lg">
                                    <i class="fa fa-plus-circle"></i> Crear Nuevo Ambiente
                                </button>
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
                                                <form class="form-horizontal" method="post" action="<?=base_url()?>Ambiente/crear">
                                                    <div class="card-body">
                                                        <div class="form-group row">
                                                            <label for="rubros" class="col-sm-2 col-form-label">Rubro</label>
                                                            <div class="col-sm-10">
                                                                <!-- <input type="text" class="form-control" id="rubros" name="rubros" placeholder="Rubro" required> -->
                                                                <select class="form-control" name="rubro" required="">
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
                                                            <label for="planta" class="col-sm-2 col-form-label">Planta</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="planta" name="planta" placeholder="Planta" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="tiempo" class="col-sm-2 col-form-label">Tiempo</label>
                                                            <div class="col-sm-10">
                                                                <input type="date" class="form-control" id="tiempo" name="tiempo" placeholder="Tiempo" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="rubros" class="col-sm-2 col-form-label">Tipo</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="rubros" name="rubros" placeholder="Tipo" required>
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
                                    <th>Nombre</th>
                                    <th>Razon</th>
                                    <th>nit</th>
                                    <th>Rep. Legal</th>
                                    <th>Celular</th>
                                    <th>Nro. contrato</th>
                                    <th>Direccion</th>
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
                                $query=$this->db->query("SELECT * FROM clientes WHERE estado=1");
                                $cont=0;
                                foreach ($query->result() as $row)
                                {
                                    $cont++;
                                    echo "<tr>
                                        <td>$cont</td>
                                        <td>$row->nombres $row->apellidos</td>
                                        <td>$row->razon</td>
                                        <td>$row->nit</td>
                                        <td>$row->replegal</td>
                                        <td>$row->celular</td>
                                        <td>$row->ncontrato</td>
                                        <td>$row->direccion</td>
                                        <td>
                                            <div class='btn btn-group'>
                                                <button type='button' class='btn btn-warning btn-sm' data-toggle='modal' data-target='#exampleModal' 
                                                    data-ci='$row->ci'
                                                    data-id='$row->id'
                                                    data-nombres='$row->nombres'
                                                    data-apellidos='$row->apellidos'
                                                    data-razon='$row->razon'
                                                    data-nit='$row->nit'
                                                    data-replegal='$row->replegal'
                                                    data-celular='$row->celular'
                                                    data-ncontrato='$row->ncontrato'
                                                    data-direccion='$row->direccion'
                                                ><i class='fa fa-edit'></i></button>
                                                <a type='button' onclick='borrar(event)' href='".base_url()."Cliente/borrar/$row->id' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></a>
                                            </div>
                                        </td>
                                    </tr>";
                                }
                                ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Razon</th>
                                    <th>nit</th>
                                    <th>Rep. Legal</th>
                                    <th>Celular</th>
                                    <th>Nro. contrato</th>
                                    <th>Direccion</th>
                                    <th>Opciones</th>
                                </tr>
                                </tfoot>
                            </table>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-warning">
                                            <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-edit"></i> Modificar Cliente</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal" method="post" action="<?=base_url()?>Cliente/modificar">
                                                <div class="card-body">
                                                    <div class="form-group row">
                                                        <label for="ci2" class="col-sm-2 col-form-label">Carnet de identidad</label>
                                                        <div class="col-sm-10">
                                                            <input type="hidden" id="id2" name="id">
                                                            <input type="text" class="form-control" id="ci2" name="ci" placeholder="Carnet de identidad" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="razon2" class="col-sm-2 col-form-label">Razon Social</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="razon2" name="razon" placeholder="Razon Social" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="nit2" class="col-sm-2 col-form-label">Nit</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="nit2" name="nit" placeholder="Nit" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="nombres2" class="col-sm-2 col-form-label">Nombres</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="nombres2" name="nombres" placeholder="Nombres" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="apellidos2" class="col-sm-2 col-form-label">Apellidos</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="apellidos2" name="apellidos" placeholder="Apellidos" required>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="form-group row">
                                                        <label for="fechanac2" class="col-sm-2 col-form-label">Fecha nacimiento</label>
                                                        <div class="col-sm-10">
                                                            <input type="date" class="form-control" id="fechanac2" name="fechanac" placeholder="Fecha nacimiento" required>
                                                        </div>
                                                    </div> -->
                                                    <div class="form-group row">
                                                            <label for="replegl2" class="col-sm-2 col-form-label">Rep. Legal</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="replegal2" name="replegal" placeholder="Representante Legal" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="celular2" class="col-sm-2 col-form-label">Celular</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="celular2" name="celular" placeholder="Celular" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="ncontrato2" class="col-sm-2 col-form-label">Nro Contrato</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="ncontrato2" name="ncontrato" placeholder="Nro Contrato" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="direccion2" class="col-sm-2 col-form-label">Direccion</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="direccion2" name="direccion" placeholder="Direccion" required>
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
            $('#ci2').val(button.data('ci'));
            $('#nombres2').val(button.data('nombres'));
            $('#apellidos2').val(button.data('apellidos'));
            $('#razon2').val(button.data('razon'));
            // $('#fechanac2').val(button.data('fechanac'));
            $('#nit2').val(button.data('nit'));
            $('#replegal2').val(button.data('replegal'));
            $('#celular2').val(button.data('celular'));
            $('#ncontrato2').val(button.data('ncontrato'));
            $('#direccion2').val(button.data('direccion'));
            $('#id2').val(button.data('id'));
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            // var modal = $(this)
            // modal.find('.modal-title').text('New message to ' + recipient)
            // modal.find('.modal-body input').val(recipient)
        })

        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    }
</script>
