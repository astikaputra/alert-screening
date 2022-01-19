 <div class="content-wrapper">

<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-dashboard"></i> Dashboard
    </h1>
  </section>

<!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-2 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">
          <div class="inner">
            <h3>
              <?php
                if ($total_use3) {
                    echo $total_use3;
                } else {
                    echo "0";
                }
              ?>
            </h3>
            <p>USE LANTAI 3</p>
          </div>
          <div class="icon">
            <i class="fa fa-flash"></i>
          </div>
          <a href="<?php //echo base_url('permintaan')?>" class="small-box-footer">info... <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-2 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">
          <div class="inner">
            <h3>
              <?php
                if ($total_use5) {
                    echo $total_use5;
                } else {
                    echo "0";
                }
              ?>
            </h3>
            <p>USE LANTAI 5</p>
          </div>
          <div class="icon">
            <i class="fa fa-flash"></i>
          </div>
          <a href="<?php //echo base_url('permintaan')?>" class="small-box-footer">info... <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->

      <div class="col-lg-2 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>
              <?php
                if ($total_aktivasi3) {
                    echo $total_aktivasi3;
                } else {
                    echo "0";
                }
              ?>
            </h3>

            <p>AKTIVASI LANTAI 3 </p>
          </div>
          <div class="icon">
            <i class="fa fa-wrench"></i>
          </div>
          <a href="<?php //echo base_url('identifikasi')?>" class="small-box-footer">info... <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
         <div class="col-lg-2 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>
              <?php
                if ($total_aktivasi5) {
                    echo $total_aktivasi5;
                } else {
                    echo "0";
                }
              ?>
            </h3>

            <p>AKTIVASI LANTAI 5 </p>
          </div>
          <div class="icon">
            <i class="fa fa-wrench"></i>
          </div>
          <a href="<?php //echo base_url('identifikasi')?>" class="small-box-footer">info... <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->

      <div class="col-lg-2 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>
              <?php
                if ($total_ready3) {
                    echo $total_ready3;
                } else {
                    echo "0";
                }
              ?>
            </h3>

            <p>READY LANTAI 3</p>
          </div>
          <div class="icon">
            <i class="fa fa-flag-checkered"></i>
          </div>
          <a href="<?php //echo base_url('dashboard/finished')?>" class="small-box-footer">info... <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>
              <?php
                if ($total_ready5) {
                    echo $total_ready5;
                } else {
                    echo "0";
                }
              ?>
            </h3>

            <p>READY LANTAI 5 </p>
          </div>
          <div class="icon">
            <i class="fa fa-flag-checkered"></i>
          </div>
          <a href="<?php //echo base_url('dashboard/finished')?>" class="small-box-footer">info... <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>

    <!-- Main row -->
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Data Pemakaian Kartu</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
          </div><!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
                 <table id="dataTableDashboard1" class="table table-bordered table-striped table-hover">
                   <thead>
                      <tr>
                         <!--  <th>No</th> -->
                          <th>No Kartu</th>
                          <!-- <th>Lantai</th> -->
                          <th>Nama Pasien</th>
                          <th>Room</th>
                          <th>Lantai</th>
                          <th>Status</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if($d_kartu){
                         foreach($d_kartu as $d) {

                            $st1['id'] = $d['status'];
                            $st2['id'] = $d['akses'];
                            $s1 = $this->main_model->GetSelectedData('tb_status',$st1);
                            $s2 = $this->main_model->GetSelectedData('tb_akses',$st2);
                            $stt = $s1[0]['status'];
                            $akses = $s2[0]['akses'];
                          ?>
                      <tr>
                         <!--  <td><?php echo $d['id']; ?></td> -->
                          <td><?php echo $d['fridnum']; ?></td>
                          <td><?php echo $d['pasien']; ?></td>
                          <td><?php echo $d['room']; ?></td>
                          <td><?php echo $akses; ?></td>
                          <td>
                          <?php if($d['status'] == "1"){ ?>
                              <span class="label label-lg label-success"><?php echo $stt; ?></span>
                          <?php } elseif ($d['status'] == "2"){ ?>
                              <span class="label label-warning"><?php echo $stt; ?></span>
                          <?php } else { ?>
                              <span class="label label-danger"><?php echo $stt; ?></span>
                          <?php } ?>
                          </td>
                          <!-- <td>
                          <?php if($d->status == "Waiting"){ ?>
                              <a class="btn btn-xs btn-info" href="<?php echo base_url() . 'permintaan/identifikasi/' . $d->id_permintaan ?>" rel="tooltip" title="Identifikasi"><i class="fa fa-wrench"></i></a>
                          <?php } elseif ($d->status == "On Progress"){ ?>
                              <a class="btn btn-xs btn-info" href="<?php echo base_url() . 'identifikasi/solusi/' . $d->id_permintaan ?>" rel="tooltip" title="Selesaikan"><i class="fa fa-flag"></i></a>
                              <a class="btn btn-info btn-xs" href="<?php echo base_url() . 'identifikasi/update/' . $d->id_permintaan ?>" rel="tooltip" title="Update"><i class="fa fa-upload"></i></a>
                          <?php } else { ?>
                              <a class="btn btn-xs btn-info" href="<?php echo base_url() . 'dashboard/lihat/' . $d->id_permintaan ?>" rel="tooltip" title="Lihat"><i class="fa fa-eye"></i></a>
                          <?php } ?>
                          </td> -->
                      </tr>
                      <?php
                        }
                      } ?>
                    </tbody>
                  </table>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!--box body-->
          </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->

    <!-- Second row -->
    <div class="row">
      <div class="col-md-6">
        <div class="box box-warning">
          <div class="box-header with-border">
            <h3 class="box-title">Data Validasi Kartu</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
          </div><!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
                 <table id="dataTableDashboard2" class="table table-bordered table-striped table-hover">
                   <thead>
                      <tr>
                          <th>No Kartu</th>
                          <th>Pasien</th>
                          <th>Room</th>
                          <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php
                      if($d_kartu_use){
                         foreach($d_kartu_use as $e) {

                            $st1['id'] = $e['status'];
                            $st2['id'] = $e['akses'];
                            $s1 = $this->main_model->GetSelectedData('tb_status',$st1);
                            $s2 = $this->main_model->GetSelectedData('tb_akses',$st2);
                            $stt = $s1[0]['status'];
                            $akses = $s2[0]['akses'];
                          ?>
                      <tr>

                          <td><?php echo $e['fridnum']; ?></td>
                          <td><?php echo $e['pasien']; ?></td>
                          <td><?php echo $e['room']; ?></td>
                    <!--       <td><?php echo $akses; ?></td> -->
                          <td>
                          <?php if($e['status'] == "1"){ ?>
                              <span class="label label-lg label-danger"><?php echo $stt; ?></span>
                          <?php } elseif ($e['status'] == "2"){ ?>
                              <span class="label label-warning"><?php echo $stt; ?></span>
                          <?php } else { ?>
                              <span class="label label-success"><?php echo $stt; ?></span>
                          <?php } ?>
                          </td>
                          </tr>
                      <?php
                        }
                      } ?>
                    </tbody>
                  </table>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!--box body-->
          </div><!-- /.box -->
        </div><!-- /.col -->

        <div class="row">
      <div class="col-md-6">
        <div class="box box-warning">
          <div class="box-header with-border">
            <h3 class="box-title">Data Kartu Non Aktif</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
          </div><!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
                 <table id="dataTableDashboard3" class="table table-bordered table-striped table-hover">
                   <thead>
                      <tr>
                          <th>No Kartu</th>
                          <th>Pasien</th>
                          <th>Room</th>
                          <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php
                      if($d_kartu_retur){
                         foreach($d_kartu_retur as $f) {

                            $st1['id'] = $f['status'];
                            $st2['id'] = $f['akses'];
                            $s1 = $this->main_model->GetSelectedData('tb_status',$st1);
                            $s2 = $this->main_model->GetSelectedData('tb_akses',$st2);
                            $stt = $s1[0]['status'];
                            $akses = $s2[0]['akses'];
                          ?>
                      <tr>

                          <td><?php echo $f['fridnum']; ?></td>
                          <td><?php echo $f['pasien']; ?></td>
                          <td><?php echo $f['room']; ?></td>
                    <!--       <td><?php echo $akses; ?></td> -->
                          <td>
                          <?php if($f['status'] == "1"){ ?>
                              <span class="label label-lg label-success"><?php echo $stt; ?></span>
                          <?php } elseif ($f['status'] == "2"){ ?>
                              <span class="label label-warning"><?php echo $stt; ?></span>
                          <?php } else { ?>
                              <span class="label label-danger"><?php echo $stt; ?></span>
                          <?php } ?>
                          </td>
                          </tr>
                      <?php
                        }
                      } ?>
                    </tbody>
                  </table>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!--box body-->
          </div><!-- /.box -->
        </div><!-- /.col -->
    <!-- /.row -->




  <!-- /.row (second row) -->
  </section>
<!-- /.content -->
</div>



<!-- /.content-wrapper-->
