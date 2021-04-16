<!-- Content Wrapper. Contains page content -->
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
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-lg">
                                    <i class="fa fa-plus-circle"></i> Crear Nuevo Usuarios
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
                                                <form class="form-horizontal" method="post" action="<?=base_url()?>User/crear">
                                                    <div class="card-body">
                                                        <div class="form-group row">
                                                            <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="password" class="col-sm-2 col-form-label">Clave</label>
                                                            <div class="col-sm-10">
                                                                <input type="password" class="form-control" id="password" name="password" placeholder="Clave" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="valpas" class="col-sm-2 col-form-label">Repetir Clave</label>
                                                            <div class="col-sm-10">
                                                                <input type="password" class="form-control" id="valpas" name="valpas" placeholder="Repetir Clave" required oninput="validarpas()">
                                                            </div>
                                                        </div>
                                                        <p id="validado"></p>
                                                        <script type="text/javascript">
                                                            function validarpas() {
                                                              var pas1 = document.getElementById("password").value;
                                                              var pas2 = document.getElementById("valpas").value;
                                                              if(pas1==pas2){
                                                                document.getElementById("validado").innerHTML = "<p style='background-color:#1AA31A;'>La Clave Coincide</p>";
                                                              }
                                                              else{
                                                                document.getElementById("validado").innerHTML ="<p style='background-color:yellow;'>La Clave No coincide</p>";
                                                              }
                                                            }
                                                        </script>
                                                        <div class="form-group row">
                                                            <label for="rubros" class="col-sm-2 col-form-label">Tipo</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control" name="tipo" required="">
                                                                    <option value="">Seleccionar</option>
                                                                    <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                                                                    <option value="ADMINISTRADOR2">ADMINISTRADOR2</option>
                                                                    <option value="GERENTE">GERENTE</option>
                                                                    <option value="SECRETARIA">SECRETARIA</option>
                                                                    <option value="SOCIO">SOCIO</option>
                                                                </select>
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
                                    <th>Email</th>
                                    <th>Tipo</th>
                                    <th>fecha</th>
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
                                $query=$this->db->query("SELECT * FROM users");
                                $cont=0;
                                foreach ($query->result() as $row)
                                {
                                    $cont++;
                                    echo "<tr>
                                        <td>$cont</td>
                                        <td>$row->name</td>
                                        <td>$row->email</td>
                                        <td>$row->tipo</td>
                                        <td>$row->fecha</td>
                                        <td>
                                            <div class='btn btn-group'>
                                                <button type='button' class='btn btn-warning btn-sm' data-toggle='modal' data-target='#exampleModal' 
                                                    data-id='$row->id'
                                                    data-name='$row->name'
                                                    data-email='$row->email'
                                                    // data-password='$row->password'
                                                    data-tipo='$row->tipo'
                                                    data-fecha='$row->fecha'
                                                ><i class='fa fa-edit'></i></button>
                                                <button type='button' class='btn btn-primary btn-sm' data-toggle='modal' data-target='#exampleModal2' 
                                                    data-idc2='$row->id'
                                                    data-emailc2='$row->email'
                                                    data-password='$row->password'
                                                ><i class='fas fa-unlock-alt'></i></button>
                                                <a type='button' onclick='borrar(event)' href='".base_url()."User/borrar/$row->id' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></a>
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
                                    <th>Email</th>
                                    <th>Tipo</th>
                                    <th>fecha</th>
                                    <th>Opciones</th>
                                </tr>
                                </tfoot>
                            </table>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-warning">
                                            <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-edit"></i> Modificar Usuario</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal" method="post" action="<?=base_url()?>User/modificar">
                                                <div class="card-body">
                                                    <div class="form-group row">
                                                            <label for="name2" class="col-sm-2 col-form-label">Nombre</label>
                                                            <div class="col-sm-10">
                                                                <input type="hidden" id="id2" name="id">
                                                                <input type="text" class="form-control" id="name2" name="name" placeholder="Nombre" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="email2" class="col-sm-2 col-form-label">Email</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" id="email2" name="email" placeholder="Email" required>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="form-group row">
                                                            <label for="password2" class="col-sm-2 col-form-label">Clave</label>
                                                            <div class="col-sm-10">
                                                                <input type="password" class="form-control" id="password2" name="password" placeholder="Clave" required>
                                                            </div>
                                                        </div> -->
                                                        <div class="form-group row">
                                                            <label for="tipo2" class="col-sm-2 col-form-label">Tipo</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control" id="tipo2" name="tipo" required="">
                                                                    <option value="">Seleccionar</option>
                                                                    <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                                                                    <option value="ADMINISTRADOR2">ADMINISTRADOR2</option>
                                                                    <option value="GERENTE">GERENTE</option>
                                                                    <option value="SECRETARIA">SECRETARIA</option>
                                                                    <option value="SOCIO">SOCIO</option>
                                                                </select>
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
                                            <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-unlock-alt"></i> Cambiar Clave</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- <form class="form-horizontal" method="post" action="<?=base_url()?>User/modificarCla"> -->
                                            <form class="form-horizontal" method="post" id="forclave">
                                                <div class="card-body">
                                                    <div class="form-group row">
                                                        <input type="hidden" id="idc2" name="idc2">
                                                        <input type="hidden" id="emailc2" name="emailc2">
                                                        <label for="password1" class="col-sm-2 col-form-label">Clave Actual</label>
                                                        <div class="col-sm-10">
                                                            <input type="password" class="form-control" id="password1" name="password1" placeholder="Clave Actual" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="password2" class="col-sm-2 col-form-label">Clave Nuevo</label>
                                                        <div class="col-sm-10">
                                                            <input type="password" class="form-control" id="password2" name="password2" placeholder="Clave Nuevo" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="password3" class="col-sm-2 col-form-label">Rep. Clave Nuevo</label>
                                                        <div class="col-sm-10">
                                                            <input type="password" class="form-control" id="password3" name="password3" placeholder="Rep. Clave Nuevo" required oninput="validarpassword()">
                                                        </div>
                                                    </div>
                                                    <p id="validarcambio"></p>
                                                    <script type="text/javascript">
                                                        function validarpassword() {
                                                            var pas1 = document.getElementById("password2").value;
                                                            var pas2 = document.getElementById("password3").value;
                                                            if(pas1==pas2){
                                                                document.getElementById("validarcambio").innerHTML = "<p style='background-color:#1AA31A;'>La Clave Coincide</p>";
                                                            }
                                                            else{
                                                                document.getElementById("validarcambio").innerHTML ="<p style='background-color:yellow;'>La Clave No coincide</p>";
                                                            }
                                                        }
                                                    </script>
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

        $('#forclave').submit(function (e){
            // console.log($('#nombre').val());
            if ($('#password1').val()==null || $('#password1').val()==''){
                alert('debes ingresar clave actual');
                return false;
            }
            $.ajax({
                url:'User/modificarCla',
                // <?=base_url()?>User/modificarCla
                data:{
                    idc2:$('#idc2').val(),
                    emailc2:$('#emailc2').val(),
                    password1:$('#password1').val(),
                    password2:$('#password2').val(),
                },
                type:'post',
                success:function (e){
                    console.log(e);
                    // return false;
                    if (e=="No existe clave"){
                        alert('La Clave es incorrecto');
                    }else{
                        alert('La clave se cambio con Exito!!');
                        actualizar();
                    }
                },
                error:function (e){
                    alert('Algo esta mal. No se realizo cambios');
                }
            })
            e.preventDefault();
            return false;
        });
        function actualizar(){
            $.ajax({
                url:'User'
            })
        }
    }
</script>
