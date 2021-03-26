<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Control del Personal</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Personal</li>
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
                                    <i class="fa fa-plus-circle"></i> Crear Nuevo Personal
                                </button>
                                <div class="modal fade" id="modal-lg">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header bg-success text-white">
                                                <h4 class="modal-title"> <i class="fa fa-plus-circle"></i> Nuevo Personal</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form-horizontal" method="post" action="<?=base_url()?>Personal/crear">
                                                    <div class="card-body">
                                                        <div class="form-group row">
                                                            <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="ci" class="col-sm-2 col-form-label">Ci</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="ci" name="ci" placeholder="Carnet de identidad" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="fnac" class="col-sm-2 col-form-label">Fecha de nacimiento</label>
                                                            <div class="col-sm-10">
                                                                <input type="date" class="form-control" id="fnac" name="fnac" placeholder="Fecha de nacimiento" required>
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
                                    <th>Ci</th>
                                    <th>F. Nac.</th>
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
                                $query=$this->db->query("SELECT * FROM personal");
                                $cont=0;
                                foreach ($query->result() as $row)
                                {
                                    $cont++;
                                    echo "<tr>
                                        <td>$cont</td>
                                        <td>$row->nombre</td>
                                        <td>$row->ci</td>
                                        <td>$row->fnac</td>
                                        <td>
                                            <div class='btn btn-group'>
                                                <button type='button' class='btn btn-warning btn-sm' data-toggle='modal' data-target='#exampleModal' 
                                                    data-id='$row->id'
                                                    data-nombre='$row->nombre'
                                                    data-ci='$row->ci'
                                                    data-fnac='$row->fnac'
                                                ><i class='fa fa-edit'></i></button>
                                                <a type='button' onclick='borrar(event)' href='".base_url()."Personal/borrar/$row->id' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></a>
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
                                    <th>Ci</th>
                                    <th>Fnac</th>
                                    <th>Opciones</th>
                                </tr>
                                </tfoot>
                            </table>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-warning">
                                            <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-edit"></i> Modificar personal</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal" method="post" action="<?=base_url()?>Personal/modificar">
                                                <div class="card-body">
                                                    <div class="form-group row">
                                                        <label for="nombre2" class="col-sm-2 col-form-label">Nombre</label>
                                                        <div class="col-sm-10">
                                                            <input type="hidden" id="id2" name="id">
                                                            <input type="text" class="form-control" id="nombre2" name="nombre" placeholder="Nombre" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="ci2" class="col-sm-2 col-form-label">Ci</label>
                                                        <div class="col-sm-10">
                                                            <input type="number" class="form-control" id="ci2" name="ci" placeholder="Carnet de identidad" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="fnac2" class="col-sm-2 col-form-label">Fecha de nacimiento</label>
                                                        <div class="col-sm-10">
                                                            <input type="date" class="form-control" id="fnac2" name="fnac" placeholder="Fecha de nacimiento" required>
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
            $('#nombre2').val(button.data('nombre'));
            $('#ci2').val(button.data('ci'));
            $('#fnac2').val(button.data('fnac'));
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
