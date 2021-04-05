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
                                <div class="col-sm-12 py-2">
                                    <h3 class="h3 text-center">Imprimir reportes del Dia</h3>
                                    <form action="<?=base_url()?>Reporte/hoy" method="post" target="_blank">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="date" class="form-control" name="dia" id="dia" placeholder="Dia" value="<?=date('Y-m-d')?>" required>
                                            </div>
                                            <div class="col-sm-5">
                                                <button type="submit" name="btn" value="reporte" class="btn btn-primary btn-block">Imprimir Ingresos del Dia <i class="fa fa-print"></i></button>
                                            </div>
                                            <div class="col-sm-1">
                                                <button type="submit" name="btn" value="excel" class="btn btn-success btn-block"><i class="fa fa-file-excel"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-12 py-2">
                                    <h3 class="h3 text-center">Imprimir reportes del Mes</h3>
                                    <form action="<?=base_url()?>Reporte/mes" method="post" target="_blank">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <select name="mes" id="mes" class="form-control" required>
                                                    <option value="">Seleccionar..</option>
                                                    <option value="01" <?=date('m')=='01'?'selected':''?>>ENERO</option>
                                                    <option value="02" <?=date('m')=='02'?'selected':''?>>FEBRERO</option>
                                                    <option value="03" <?=date('m')=='03'?'selected':''?>>MARZO</option>
                                                    <option value="04" <?=date('m')=='04'?'selected':''?>>ABRIL</option>
                                                    <option value="05" <?=date('m')=='05'?'selected':''?>>MAYO</option>
                                                    <option value="06" <?=date('m')=='06'?'selected':''?>>JUNIO</option>
                                                    <option value="07" <?=date('m')=='07'?'selected':''?>>JULIO</option>
                                                    <option value="08" <?=date('m')=='08'?'selected':''?>>AGOSTO</option>
                                                    <option value="09" <?=date('m')=='09'?'selected':''?>>SEPTIEMBRE</option>
                                                    <option value="10" <?=date('m')=='10'?'selected':''?>>OCTUBRE</option>
                                                    <option value="11" <?=date('m')=='11'?'selected':''?>>NOVIEMBRE</option>
                                                    <option value="12" <?=date('m')=='12'?'selected':''?>>DICIEMBRE</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="number" class="form-control" name="anio" id="anio" placeholder="Año" value="<?=date('Y')?>" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <button class="btn btn-success btn-block">Imprimir Ingresos del Mes <i class="fa fa-print"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-12 py-2">
                                    <h3 class="h3 text-center">Imprimir reportes de Deudas</h3>
                                    <form action="<?=base_url()?>Reporte/deuda" method="post" target="_blank">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <label for="mes1">Mes Inicio</label>
                                                <select name="mes1" id="mes1" class="form-control" required>
                                                    <option value="">Seleccionar..</option>
                                                    <option value="01" <?=date('m')=='01'?'selected':''?>>ENERO</option>
                                                    <option value="02" <?=date('m')=='02'?'selected':''?>>FEBRERO</option>
                                                    <option value="03" <?=date('m')=='03'?'selected':''?>>MARZO</option>
                                                    <option value="04" <?=date('m')=='04'?'selected':''?>>ABRIL</option>
                                                    <option value="05" <?=date('m')=='05'?'selected':''?>>MAYO</option>
                                                    <option value="06" <?=date('m')=='06'?'selected':''?>>JUNIO</option>
                                                    <option value="07" <?=date('m')=='07'?'selected':''?>>JULIO</option>
                                                    <option value="08" <?=date('m')=='08'?'selected':''?>>AGOSTO</option>
                                                    <option value="09" <?=date('m')=='09'?'selected':''?>>SEPTIEMBRE</option>
                                                    <option value="10" <?=date('m')=='10'?'selected':''?>>OCTUBRE</option>
                                                    <option value="11" <?=date('m')=='11'?'selected':''?>>NOVIEMBRE</option>
                                                    <option value="12" <?=date('m')=='12'?'selected':''?>>DICIEMBRE</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-2">
                                                <label for="anio1">Año Inicio</label>
                                                <input type="number" class="form-control" name="anio1" id="anio1" placeholder="Año" value="<?=date('Y')?>" required>
                                            </div>
                                            <div class="col-sm-2">
                                                <label for="mes2">Mes Fin</label>
                                                <select name="mes2" id="mes2" class="form-control" required>
                                                    <option value="">Seleccionar..</option>
                                                    <option value="01" <?=date('m')=='01'?'selected':''?>>ENERO</option>
                                                    <option value="02" <?=date('m')=='02'?'selected':''?>>FEBRERO</option>
                                                    <option value="03" <?=date('m')=='03'?'selected':''?>>MARZO</option>
                                                    <option value="04" <?=date('m')=='04'?'selected':''?>>ABRIL</option>
                                                    <option value="05" <?=date('m')=='05'?'selected':''?>>MAYO</option>
                                                    <option value="06" <?=date('m')=='06'?'selected':''?>>JUNIO</option>
                                                    <option value="07" <?=date('m')=='07'?'selected':''?>>JULIO</option>
                                                    <option value="08" <?=date('m')=='08'?'selected':''?>>AGOSTO</option>
                                                    <option value="09" <?=date('m')=='09'?'selected':''?>>SEPTIEMBRE</option>
                                                    <option value="10" <?=date('m')=='10'?'selected':''?>>OCTUBRE</option>
                                                    <option value="11" <?=date('m')=='11'?'selected':''?>>NOVIEMBRE</option>
                                                    <option value="12" <?=date('m')=='12'?'selected':''?>>DICIEMBRE</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-2">
                                                <label for="anio2">Año Fin</label>
                                                <input type="number" class="form-control" name="anio2" id="anio2" placeholder="Año" value="<?=date('Y')?>" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="">Imprimir</label>
                                                <button class="btn btn-info btn-block">Imprimir Deudas <i class="fa fa-print"></i></button>
                                            </div>
                                        </div>
                                    </form>
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
