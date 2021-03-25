<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Reportes de pagos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Pagos</li>
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
<!--                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-lg">-->
<!--                                    <i class="fa fa-plus-circle"></i> Crear Nuevo Cliente-->
<!--                                </button>-->
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="<?=base_url()?>Reporte/hoy" target="_blank" class="btn btn-primary btn-block">Imprimir Ingresos del Dia <i class="fa fa-print"></i></a>
                                </div>
                                <div class="col-sm-6">
                                    <button class="btn btn-success btn-block">Imprimir Ingresos del Mes <i class="fa fa-print"></i></button>
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