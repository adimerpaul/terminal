<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Realizar cobros</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">cobros</li>
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
<!--                                <div class="modal fade" id="modal-lg">-->
<!--                                    <div class="modal-dialog modal-lg">-->
<!--                                        <div class="modal-content">-->
<!--                                            <div class="modal-header bg-success text-white">-->
<!--                                                <h4 class="modal-title"> <i class="fa fa-plus-circle"></i> Nuevo</h4>-->
<!--                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                                                    <span aria-hidden="true">&times;</span>-->
<!--                                                </button>-->
<!--                                            </div>-->
<!--                                            <div class="modal-body">-->
<!--                                                <form class="form-horizontal" method="post" action="--><?//=base_url()?><!--Cliente/crear">-->
<!--                                                    <div class="card-body">-->
<!--                                                        <div class="form-group row">-->
<!--                                                            <label for="ci" class="col-sm-2 col-form-label">Carnet de identidad</label>-->
<!--                                                            <div class="col-sm-10">-->
<!--                                                                <input type="text" class="form-control" id="ci" name="ci" placeholder="Carnet de identidad" required>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="form-group row">-->
<!--                                                            <label for="razon" class="col-sm-2 col-form-label">Razon Social</label>-->
<!--                                                            <div class="col-sm-10">-->
<!--                                                                <input type="text" class="form-control" id="razon" name="razon" placeholder="Razon Social" required>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="form-group row">-->
<!--                                                            <label for="nit" class="col-sm-2 col-form-label">Nit</label>-->
<!--                                                            <div class="col-sm-10">-->
<!--                                                                <input type="text" class="form-control" id="nit" name="nit" placeholder="Nit" required>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="form-group row">-->
<!--                                                            <label for="nombres" class="col-sm-2 col-form-label">Nombres</label>-->
<!--                                                            <div class="col-sm-10">-->
<!--                                                                <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres" required>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="form-group row">-->
<!--                                                            <label for="apellidos" class="col-sm-2 col-form-label">Apellidos</label>-->
<!--                                                            <div class="col-sm-10">-->
<!--                                                                <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" required>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="form-group row">-->
<!--                                                            <label for="fechanac" class="col-sm-2 col-form-label">Fecha nacimiento</label>-->
<!--                                                            <div class="col-sm-10">-->
<!--                                                                <input type="date" class="form-control" id="fechanac" name="fechanac" placeholder="Fecha nacimiento" required>-->
<!--                                                            </div>-->
<!--                                                        </div> -->
<!--                                                        <div class="form-group row">-->
<!--                                                            <label for="replegal" class="col-sm-2 col-form-label">Rep. Legal</label>-->
<!--                                                            <div class="col-sm-10">-->
<!--                                                                <input type="text" class="form-control" id="replegal" name="replegal" placeholder="Representante Legal" required>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="form-group row">-->
<!--                                                            <label for="celular" class="col-sm-2 col-form-label">Celular</label>-->
<!--                                                            <div class="col-sm-10">-->
<!--                                                                <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular" required>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="form-group row">-->
<!--                                                            <label for="ncontrato" class="col-sm-2 col-form-label">Nro Contrato</label>-->
<!--                                                            <div class="col-sm-10">-->
<!--                                                                <input type="text" class="form-control" id="ncontrato" name="ncontrato" placeholder="Nro Contrato" required>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="form-group row">-->
<!--                                                            <label for="direccion" class="col-sm-2 col-form-label">Direccion</label>-->
<!--                                                            <div class="col-sm-10">-->
<!--                                                                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" required>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                    <div class="modal-footer justify-content-between">-->
<!--                                                        <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-trash"></i> Cancelar</button>-->
<!--                                                        <button type="submit" class="btn btn-success">  Crear <i class="fa fa-plus"></i></button>-->
<!--                                                    </div>-->
<!--                                                </form>-->
<!--                                            </div>-->
<!---->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form class="form-horizontal" method="post" action="<?=base_url()?>Cliente/crear">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="rubro" class="col-sm-1 col-form-label">Rubro</label>
                                        <div class="col-sm-4">
<!--                                            <input type="text" class="form-control" id="ci" name="ci" placeholder="Carnet de identidad" required>-->
                                            <select name="rubro" id="rubro" required class="form-control" >
                                                <option value="">Seleccionar..</option>
                                                <?php
                                                    $query=$this->db->query("SELECT rubro FROM ambientes GROUP BY rubro");
                                                    foreach ($query->result() as $row){
                                                        echo "<option value='$row->rubro'>$row->rubro</option>";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <label for="nombre" class="col-sm-3 col-form-label"> Razon social o nombre</label>
                                        <div class="col-sm-4">
                                            <!--                                            <input type="text" class="form-control" id="ci" name="ci" placeholder="Carnet de identidad" required>-->
                                            <select name="nombre" id="nombre" required class="form-control" >
                                            </select>
                                        </div>
                                    </div>
<!--                                    <div class="form-group row">-->
<!--                                        <label for="razon" class="col-sm-2 col-form-label">Razon Social</label>-->
<!--                                        <div class="col-sm-10">-->
<!--                                            <input type="text" class="form-control" id="razon" name="razon" placeholder="Razon Social" required>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="form-group row">-->
<!--                                        <label for="nit" class="col-sm-2 col-form-label">Nit</label>-->
<!--                                        <div class="col-sm-10">-->
<!--                                            <input type="text" class="form-control" id="nit" name="nit" placeholder="Nit" required>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="form-group row">-->
<!--                                        <label for="nombres" class="col-sm-2 col-form-label">Nombres</label>-->
<!--                                        <div class="col-sm-10">-->
<!--                                            <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres" required>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="form-group row">-->
<!--                                        <label for="apellidos" class="col-sm-2 col-form-label">Apellidos</label>-->
<!--                                        <div class="col-sm-10">-->
<!--                                            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" required>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="form-group row">-->
<!--                                        <label for="replegal" class="col-sm-2 col-form-label">Rep. Legal</label>-->
<!--                                        <div class="col-sm-10">-->
<!--                                            <input type="text" class="form-control" id="replegal" name="replegal" placeholder="Representante Legal" required>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="form-group row">-->
<!--                                        <label for="celular" class="col-sm-2 col-form-label">Celular</label>-->
<!--                                        <div class="col-sm-10">-->
<!--                                            <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular" required>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="form-group row">-->
<!--                                        <label for="ncontrato" class="col-sm-2 col-form-label">Nro Contrato</label>-->
<!--                                        <div class="col-sm-10">-->
<!--                                            <input type="text" class="form-control" id="ncontrato" name="ncontrato" placeholder="Nro Contrato" required>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="form-group row">-->
<!--                                        <label for="direccion" class="col-sm-2 col-form-label">Direccion</label>-->
<!--                                        <div class="col-sm-10">-->
<!--                                            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" required>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                </div>
                                <!-- /.card-body -->
<!--                                <div class="modal-footer justify-content-between">-->
<!--                                    <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-trash"></i> Cancelar</button>-->
<!--                                    <button type="submit" class="btn btn-success">  Crear <i class="fa fa-plus"></i></button>-->
<!--                                </div>-->
                                <!-- /.card-footer -->
                            </form>
                            <table class="table table-sm">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Fecha</th>
                                    <th><div id="montot" class="bg bg-warning">Bs.</div></th>
                                    <th><div id="facturat" class="bg bg-warning">Factura o recibo	</div></th>
                                    <th>Periodo</th>
                                    <th>Año</th>
                                    <th style="width: 40px">Opciones</th>
                                </tr>
                                </thead>
                                <tbody id="contenido">
<!--                                <tr>-->
<!--                                    <td>1.</td>-->
<!--                                    <td>Update software</td>-->
<!--                                    <td>-->
<!--                                        <div class="progress progress-xs">-->
<!--                                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>-->
<!--                                        </div>-->
<!--                                    </td>-->
<!--                                    <td><span class="badge bg-danger">55%</span></td>-->
<!--                                </tr>-->

                                </tbody>
                                <tfoot>
                                <tr>
                                    <form action="" method="post" id="formulario">
                                        <td></td>
                                        <td><input type="date" class="form-control" placeholder="Fecha de pago" id="fechapago" name="fechapago"  value="<?=date('Y-m-d'); ?>" required></td>
                                        <td>
                                            <input type="number" class="form-control" placeholder="Bs" id="monto" required>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="Numero F-R" id="factura" required>
                                        </td>
                                        <td>
                                            <!--                                        <input type="text" class="form-control" placeholder="Mes">-->
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
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" id="anio" placeholder="Año" value="<?=date('Y')?>" required>
                                        </td>
                                        <td>
                                            <!--                                        <input type="text" class="form-control" placeholder="Periodo">-->
                                            <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-plus-circle"></i></button>
                                        </td>
                                    </form>
                                </tr>
                                </tfoot>
                            </table>
<!--                            <table id="example1" class="table table-bordered table-striped">-->
<!--                                <thead>-->
<!--                                <tr>-->
<!--                                    <th>#</th>-->
<!--                                    <th>Nombre</th>-->
<!--                                    <th>Razon</th>-->
<!--                                    <th>nit</th>-->
<!--                                    <th>Rep. Legal</th>-->
<!--                                    <th>Celular</th>-->
<!--                                    <th>Nro. contrato</th>-->
<!--                                    <th>Direccion</th>-->
<!--                                    <th>Opciones</th>-->
<!--                                </tr>-->
<!--                                </thead>-->
<!--                                <tbody>-->
<!--                                <script>-->
<!--                                    function borrar(e){-->
<!--                                        if (!confirm('Seguro de eliminar?')){-->
<!--                                            e.preventDefault();-->
<!--                                        }-->
<!--                                    }-->
<!--                                </script>-->
<!--                                --><?php
//                                $query=$this->db->query("SELECT * FROM clientes WHERE estado=1");
//                                $cont=0;
//                                foreach ($query->result() as $row)
//                                {
//                                    $cont++;
//                                    echo "<tr>
//                                        <td>$cont</td>
//                                        <td>$row->nombres $row->apellidos</td>
//                                        <td>$row->razon</td>
//                                        <td>$row->nit</td>
//                                        <td>$row->replegal</td>
//                                        <td>$row->celular</td>
//                                        <td>$row->ncontrato</td>
//                                        <td>$row->direccion</td>
//                                        <td>
//                                            <div class='btn btn-group'>
//                                                <button type='button' class='btn btn-warning btn-sm' data-toggle='modal' data-target='#exampleModal'
//                                                    data-ci='$row->ci'
//                                                    data-id='$row->id'
//                                                    data-nombres='$row->nombres'
//                                                    data-apellidos='$row->apellidos'
//                                                    data-razon='$row->razon'
//                                                    data-nit='$row->nit'
//                                                    data-replegal='$row->replegal'
//                                                    data-celular='$row->celular'
//                                                    data-ncontrato='$row->ncontrato'
//                                                    data-direccion='$row->direccion'
//                                                ><i class='fa fa-edit'></i></button>
//                                                <a type='button' onclick='borrar(event)' href='".base_url()."Cliente/borrar/$row->id' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></a>
//                                            </div>
//                                        </td>
//                                    </tr>";
//                                }
//                                ?>
<!--                                </tbody>-->
<!--                                <tfoot>-->
<!--                                <tr>-->
<!--                                    <th>#</th>-->
<!--                                    <th>Nombre</th>-->
<!--                                    <th>Razon</th>-->
<!--                                    <th>nit</th>-->
<!--                                    <th>Rep. Legal</th>-->
<!--                                    <th>Celular</th>-->
<!--                                    <th>Nro. contrato</th>-->
<!--                                    <th>Direccion</th>-->
<!--                                    <th>Opciones</th>-->
<!--                                </tr>-->
<!--                                </tfoot>-->
<!--                            </table>-->
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
        moment.locale('es');
        console.log(moment().format('MMMM Do YYYY, h:mm:ss a'));
        $('#formulario').submit(function (e){
            // console.log($('#nombre').val());
            if ($('#nombre').val()==null || $('#nombre').val()==''){
                alert('debes seleccionar un ambiente o razon social');
                return false;
            }
            $.ajax({
                url:'Cobro/crear',
                data:{
                    monto:$('#monto').val(),
                    ambiente_id:$('#nombre').val(),
                    mes:$('#mes').val(),
                    anio:$('#anio').val(),
                    factura:$('#factura').val(),
                    fechapago:$('#fechapago').val(),
                },
                type:'post',
                success:function (e){
                    console.log(e);
                    // return false;
                    if (e=="Ya se realizo el pago"){
                        alert('el mes ya fue insertado porfavor verifique sus datos');
                    }else{
                        alert('Insertado correctamente!!');
                        actualizar();
                        $('#monto').val('');
                        $('#factura').val('');
                    }
                },
                error:function (e){
                    // alert(e)
                    // console.log(e);
                    alert('el mes ya fue insertado porfavor verifique sus datos');
                }
            })
            // e.preventDefault();
            return false;
        });
        function actualizar(){
            $.ajax({
                url:'Cobro/consulta',
                data:{
                    id:$('#nombre').val()
                },
                type:'post',
                success:function (e){
                    // console.log(e);
                    let datos=JSON.parse(e);
                    // console.log(datos);
                    let d='';
                    let cont=0;
                    // // $('#nombre').html('');
                    datos.forEach(r=>{
                        cont++;
                        d+='<tr>'+
                            '<td>'+cont+'</td>'+
                            '<td>'+r.fechapago+'</td>'+
                            '<td>'+r.monto+'</td>'+
                            '<td>'+r.factura+'</td>'+
                            '<td>'+r.periodo+'</td>'+
                            '<td>'+r.anio+'</td>'+
                            '<td><a type="button" onclick="borrar(event)" href="<?=base_url()?>Gastos/borr/'+r.monto+'k'+r.id+'k'+r.fechapago+'" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>'+
                            '</tr>';
                    })
                    $('#contenido').html(d);
                }
            })
        }
        $('#nombre').change(function (e){
            actualizar();
            $.ajax({
                url:'Cobro/ambiente/'+$(this).val(),
                success:function (e) {
                    // console.log(e);
                    let datos= JSON.parse(e);
                    // console.log(datos);
                    $('#montot').html("Monto "+datos.canon+" Bs.");
                    $('#facturat').html("Factura N "+datos.nit+" ");
                }
            })
            e.preventDefault();
        });
        $('#rubro').change(function (e){
            $.ajax({
              url:'Cobro/nombres',
                data:{
                  rubro:$(this).val()
                },
                type:'post',
                success:function (e){
                    // console.log(e);
                    let datos=JSON.parse(e);
                    // console.log(datos);
                    let d='<option value="">Seleccionar...</option>';
                    // $('#nombre').html('');
                    datos.forEach(r=>{
                        d+='<option value="'+r.id+'">'+r.nombre+' '+r.detalle+'</option>';
                    })
                    $('#nombre').html(d);
                }
            })
            e.preventDefault();
        })
        // $('#exampleModal').on('show.bs.modal', function (event) {
        //     var button = $(event.relatedTarget) // Button that triggered the modal
        //     // console.log(button.data('ci')); // Extract info from data-* attributes
        //     $('#ci2').val(button.data('ci'));
        //     $('#nombres2').val(button.data('nombres'));
        //     $('#apellidos2').val(button.data('apellidos'));
        //     $('#razon2').val(button.data('razon'));
        //     // $('#fechanac2').val(button.data('fechanac'));
        //     $('#nit2').val(button.data('nit'));
        //     $('#replegal2').val(button.data('replegal'));
        //     $('#celular2').val(button.data('celular'));
        //     $('#ncontrato2').val(button.data('ncontrato'));
        //     $('#direccion2').val(button.data('direccion'));
        //     $('#id2').val(button.data('id'));
        //     // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        //     // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        //     // var modal = $(this)
        //     // modal.find('.modal-title').text('New message to ' + recipient)
        //     // modal.find('.modal-body input').val(recipient)
        // })

        // $("#example1").DataTable({
        //     "responsive": true, "lengthChange": false, "autoWidth": false,
        //     "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    }
</script>
