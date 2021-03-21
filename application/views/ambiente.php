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
                                                            <label for="nombre" class="col-sm-2 col-form-label">Razon social o nombre</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="detalle" class="col-sm-2 col-form-label">Detalle</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="detalle" name="detalle" placeholder="Detalle" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="mesanine" class="col-sm-2 col-form-label">Mesasnine</label>
                                                            <div class="col-sm-10">
<!--                                                                <input type="text" class="form-control" id="mesanine" name="mesanine" placeholder="Mesasnine" required>-->
<!--                                                                <div class="form-group">-->
                                                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                                        <input type="checkbox" class="custom-control-input" id="mesanine" name="mesanine">
                                                                        <label class="custom-control-label" for="mesanine">NO/SI</label>
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
<!--                                    <th>#</th>-->
                                    <th>Rubro</th>
                                    <th>Nombre</th>
                                    <th>Detalle</th>
                                    <th>mesanine</th>
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
                                    echo "<tr>
                                        <td>$row->rubro</td>
                                        <td>$row->nombre</td>
                                        <td>$row->detalle</td>
                                        <td>$me</td>
                                        <td>
                                            <div class='btn btn-group'>
                                                <button type='button' class='btn btn-warning btn-sm' data-toggle='modal' data-target='#exampleModal' 
                                                    data-rubro='$row->rubro'
                                                    data-nombre='$row->nombre'
                                                    data-detalle='$row->detalle'
                                                    data-mesanine='$row->mesanine'
                                                    data-id='$row->id'
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
                                    <th>Rubro</th>
                                    <th>Nombre</th>
                                    <th>Detalle</th>
                                    <th>mesanine</th>
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
                                                            <input type="text" class="form-control" id="nombre2" name="nombre" placeholder="Nombre" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="detalle2" class="col-sm-2 col-form-label">Detalle</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="detalle2" name="detalle" placeholder="Detalle" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="mesanine2" class="col-sm-2 col-form-label">Mesasnine</label>
                                                        <div class="col-sm-10">
                                                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                                <input type="checkbox" class="custom-control-input" id="mesanine2" name="mesanine">
                                                                <label class="custom-control-label" for="mesanine2">NO/SI</label>
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
            $('#detalle2').val(button.data('detalle'));
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

        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    }
</script>
