 <div class="content-wrapper">

<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-dashboard"></i> Dashboard Screening Hari Ini
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
                if ($total_pcr01) {
                  echo $total_pcr01;
               } else {
                   echo "0";
               }
              ?>
            </h3>
            <p>PCR 1</p>
          </div>
          <div class="icon">
            <i class="fa fa-flash"></i>
          </div>
          <a href="<?php echo base_url('screening/pcr01')?>" class="small-box-footer">info... <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-2 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">
          <div class="inner">
            <h3>
              <?php
                if ($total_pcr02) {
                  echo $total_pcr02;
               } else {
                   echo "0";
               }
              ?>
            </h3>
            <p>PCR 2</p>
          </div>
          <div class="icon">
            <i class="fa fa-flash"></i>
          </div>
          <a href="<?php echo base_url('screening/pcr02')?>" class="small-box-footer">info... <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->

      <div class="col-lg-2 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>
              <?php
                if ($total_pcr03) {
                  echo $total_pcr03;
               } else {
                   echo "0";
               }
              ?>
            </h3>

            <p>PCR 3 </p>
          </div>
          <div class="icon">
            <i class="fa fa-wrench"></i>
          </div>
          <a href="<?php echo base_url('screening/pcr03')?>" class="small-box-footer">info... <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
         <div class="col-lg-2 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>
              <?php
              if ($total_pcr04) {
                echo $total_pcr04;
             } else {
                 echo "0";
             }
              ?>
            </h3>

            <p>PCR 4 </p>
          </div>
          <div class="icon">
            <i class="fa fa-wrench"></i>
          </div>
          <a href="<?php echo base_url('screening/pcr04')?>" class="small-box-footer">info... <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->

      <div class="col-lg-2 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>
              <?php
                if ($total_antigen01) {
                  echo $total_antigen01;
               } else {
                   echo "0";
               }              
              ?>
            </h3>

            <p>ANTIGEN 1</p>
          </div>
          <div class="icon">
            <i class="fa fa-flag-checkered"></i>
          </div>
          <a href="<?php echo base_url('screening/antigen01')?>" class="small-box-footer">info... <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>
               <?php
                if ($total_antigen02) {
                    echo $total_antigen02;
                 } else {
                     echo "0";
                 }
                 // echo "<pre>";
                //  var_dump($total_antigen2);
              ?> 
             
            </h3>

            <p>ANTIGEN 2 </p>
          </div>
          <div class="icon">
            <i class="fa fa-flag-checkered"></i>
          </div>
          <a href="<?php echo base_url('screening/antigen02')?>" class="small-box-footer">info... <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>

    <section class="content-header">
    <h1>
      <i class="fa fa-dashboard"></i> Dashboard Screening Besok
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
                if ($total_pcr1) {
                  echo $total_pcr1;
               } else {
                   echo "0";
               }
              ?>
            </h3>
            <p>PCR 1</p>
          </div>
          <div class="icon">
            <i class="fa fa-flash"></i>
          </div>
          <a href="<?php echo base_url('screening/pcr1')?>" class="small-box-footer">info... <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-2 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">
          <div class="inner">
            <h3>
              <?php
                if ($total_pcr2) {
                  echo $total_pcr2;
               } else {
                   echo "0";
               }
              ?>
            </h3>
            <p>PCR 2</p>
          </div>
          <div class="icon">
            <i class="fa fa-flash"></i>
          </div>
          <a href="<?php echo base_url('screening/pcr2')?>" class="small-box-footer">info... <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->

      <div class="col-lg-2 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>
              <?php
                if ($total_pcr3) {
                  echo $total_pcr3;
               } else {
                   echo "0";
               }
              ?>
            </h3>

            <p>PCR 3 </p>
          </div>
          <div class="icon">
            <i class="fa fa-wrench"></i>
          </div>
          <a href="<?php echo base_url('screening/pcr3')?>" class="small-box-footer">info... <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
         <div class="col-lg-2 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>
              <?php
              if ($total_pcr4) {
                echo $total_pcr4;
             } else {
                 echo "0";
             }
              ?>
            </h3>

            <p>PCR 4 </p>
          </div>
          <div class="icon">
            <i class="fa fa-wrench"></i>
          </div>
          <a href="<?php echo base_url('screening/pcr4')?>" class="small-box-footer">info... <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->

      <div class="col-lg-2 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>
              <?php
                if ($total_antigen1) {
                  echo $total_antigen1;
               } else {
                   echo "0";
               }              
              ?>
            </h3>

            <p>ANTIGEN 1</p>
          </div>
          <div class="icon">
            <i class="fa fa-flag-checkered"></i>
          </div>
          <a href="<?php echo base_url('screening/antigen1')?>" class="small-box-footer">info... <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>
               <?php
                if ($total_antigen2) {
                    echo $total_antigen2;
                 } else {
                     echo "0";
                 }
                 // echo "<pre>";
                //  var_dump($total_antigen2);
              ?> 
             
            </h3>

            <p>ANTIGEN 2 </p>
          </div>
          <div class="icon">
            <i class="fa fa-flag-checkered"></i>
          </div>
          <a href="<?php echo base_url('screening/antigen2')?>" class="small-box-footer">info... <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>

   

  

  <!-- /.row (second row) -->
  </section>
<!-- /.content -->
</div>



<!-- /.content-wrapper-->
