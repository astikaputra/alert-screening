<div class="content-wrapper">
<!-- Content Header (Page header) -->
  <section class="content-header" style="padding-bottom: 30px;">
    <h1 class="pull-left">
      <i class="fa fa-tasks"></i> <?php echo $title; ?>
    </h1>


  <div class="pull-right">
    <a href="<?php //echo base_url('penerimaankartu/tambah')?>" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Kirimkan Pesan WA semuanya</a>
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
                         <th>NIK</th>
                         <th>NAMA</th>
                         <th>NO HP</th>
                         <th>UNIT</th>
                         <th>STATUS</th>                         
                         <th>AKSI</th>
                     </tr>
                 </thead>
                 <tbody>
                   <?php if ($list_antigen2) {
                     $no = 1 ;
                      foreach($list_antigen2 as $d) {?>
                      
                     <tr>
                        <td><?php echo $no; ?></td>
                         <td><?php echo $d->nik; ?></td>
                         <td><?php echo $d->nama; ?></td>
                         <td><?php echo $d->no_hp; ?></td>     
                         <td><?php echo $d->unit; ?></td>             
                         <td>
                         <?php if($d->status == "1"){ ?>
                             <span class="label label-success">HADIR</span>
                         <?php } elseif ($d->status == "2"){ ?>
                             <span class="label label-warning">AKTIVASI</span>
                         <?php } else { ?>
                             <span class="label label-warning">Draft</span>
                         <?php } ?>
                         </td>
                         <td>
                             <?php 
                             if($d->no_hp == "#N/A"){?>
                             <a class="btn btn-danger btn-xs No HP Tidak Ada" href="#" data-url="<?php //echo base_url() . 'penerimaankartu/hapus/' . $d->id_penerimaan ?>"  rel="tooltip" title="WA tidak bisa dikirim"><i class="fa fa-trash-o "></i></a>
                            <?php } else {?>
                                <a class="btn btn-info btn-xs" href="<?php //echo base_url() . 'penerimaankartu/terima/' . $d->id_penerimaan ?>" rel="tooltip" title="Kirim Pesan ke WA"><i class="fa fa-wrench"></i></a>                            
                            <?php } $no++; ?>
                             
                             
                            <a class="btn btn-warning btn-xs" href="<?php //echo base_url() . 'penerimaankartu/ubah/' . $d->id_penerimaan ?>" rel="tooltip" title="Ubah"><i class="fa fa-pencil " ></i></a>
                             <a class="btn btn-primary btn-xs hadir" href="<?php echo base_url() . 'index.php/screening/updatehadir_antigen2/' . $d->id?>"  rel="tooltip" title="hadir"><i class="fa fa-handshake-o "></i></a> 
                            <!--   <a class="btn bg-purple btn-xs" href="<?php //echo base_url() . 'penerimaankartu/cetak/' . $d->id_penerimaan ?>" rel="tooltip" title="Cetak"><i class="fa fa-print"></i></a>-->
                         </td>
                         
                     </tr>

                     <!--echo "<pre>";
                     var_dump($antigen2);-->
                     <?php }
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

