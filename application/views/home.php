<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?php $query=$this->db->query("SELECT COUNT(id) AS amb FROM ambientes");
                                    foreach ($query->result() as $row){
                                        echo "$row->amb";
                                    }
                                 ?></h3>

                            <p>Ambientes</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="<?=base_url()?>Ambiente" class="small-box-footer">Acceder <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <!-- <h3>53<sup style="font-size: 20px">%</sup></h3> -->
                            <h3><?php $query=$this->db->query("SELECT COUNT(id) AS cob FROM pagos WHERE date(pagos.fecha)=date(now())");
                                    foreach ($query->result() as $row){
                                        echo "$row->cob";
                                    }
                                 ?></h3>

                            <p>Cobros</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="<?=base_url()?>Cobro" class="small-box-footer">Acceder <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?php $query=$this->db->query("SELECT COUNT(id) AS pers FROM personal");
                                    foreach ($query->result() as $row){
                                        echo "$row->pers";
                                    }
                                 ?></h3>

                            <p>Personal</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="<?=base_url()?>Personal" class="small-box-footer">Acceder <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?php $query=$this->db->query("SELECT COUNT(id) AS cant FROM historial h WHERE date(h.fechacreacion)=date(now())");
                                    foreach ($query->result() as $row){
                                        echo "$row->cant";
                                    }
                                 ?></h3>

                            <p>Valorados</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="<?=base_url()?>Valorados" class="small-box-footer">Acceder <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
        </div>
    </section>
</div>
