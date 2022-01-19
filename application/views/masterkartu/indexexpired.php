<div class="content-wrapper">
<!-- Content Header (Page header) -->
  <section class="content-header" style="padding-bottom: 30px;">
    <h1 class="pull-left">
      <i class="fa fa-tasks"></i> Kartu EXPIRED
    </h1>

<div class="pull-right">
    <a href="<?php echo base_url('masterkartu/do_expired')?>" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Validasi Expired</a>
    
   
  </div>
  </section>

<!-- Main content -->
  <section class="content">

  <!-- Main row -->
    <div class="row">
      <div class="col-md-12">

        <div class="box box-primary">
        <!--
          <div class="box-header with-border">
            <h3 class="box-title"></h3>
          </div><! /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
                <table id="dataTable1" class="table table-bordered table-striped">
                 <thead>
                     <tr>
                         <th>NO</th>
                         <th>NO RFID</th>
                         <th>PASIEN</th>
                         <th>ROOM</th>
                         <th>TGL AKTIF</th>
                         <th>TGL EXPIRED</th>
                         <th>AKSES</th>
                         <th>STATUS</th>
                         <th>AKSI</th>
                                                                     
                         
                     </tr>
                 </thead>
                 <tbody>
                   <?php if ($d_kartu) {
                    $this->load->model('main_model');
                    $no = 1 ;
                      foreach($d_kartu as $d) {?>
                     <tr>
                      <?php
                            $st1['id'] = $d['status'];
                            $st2['id'] = $d['akses'];
                            $s1 = $this->main_model->GetSelectedData('tb_status',$st1);
                            $s2 = $this->main_model->GetSelectedData('tb_akses',$st2);
                            $stt = $s1[0]['status'];
                            $akses = $s2[0]['akses'];
                            $id = $d['id']; 

                        ?>
                        <form role="form" action="<?php echo $action;?>" method="POST">
                         <td><?php echo $no; ?></td>
                         <td><?php echo $d['fridnum']; ?></td>
                         <td><?php echo $d['pasien']; ?></td>
                         <td><?php echo $d['room']; ?></td>
                         <td><?php echo $d['tgl_aktif']; ?></td>
                         <td><?php echo $d['tgl_exp']; ?></td>
                         <td><?php echo $akses; ?></td>
                         <td><?php echo $stt ; ?></td> 
                          <td align="center">
                         <input type="hidden" name="id" value="<?php echo $id;?>">
                         
                          <button class="btn btn-primary btn-xm" name="save" rel="tooltip" title="retur Kartu"><i class="fa fa-save"></i></button> 
                          
                         </td>
                         </form>    
                              
                                                   <?php $no++;} ?>
                             
                         <?php }  ?>
                     </tr>
                     <?php}
                   }?>


                 </tbody>
             </table>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!--box body-->
          </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->

  <!-- /.row (main row) -->
  </section>
<!-- /.content -->
</div>
<!-- /.content-wrapper-->
