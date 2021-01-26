<!doctype html>
<html class="no-js" lang="en">
<script src="<?= $this->config->base_url(); ?>includes/js/jquery.js"></script>
<script src="<?= $this->config->base_url(); ?>includes/js/bootstrap.min.js"></script>
<script src="<?= $this->config->base_url(); ?>includes/js/bootstrap.js"></script>
<head>
    <meta charset="UTF-8">
    <title>SIKURBAN</title>
    <?php
       $this->load->view('header/link');
    ?>

</head>

<body class="body">

<div class="bg-dark" id="wrap">
    <div id="top">
        <!-- .navbar -->
    <?php
       $this->load->view('header/top_header');
    ?>
        <!-- /.navbar -->
        <!-- /.head --> </div>
    <!-- /#top -->
    <div class="wrapper">
        <?php
       $this->load->view('header/header');
       ?>
        <!-- /#left -->
         <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row">
                    <div class="col-sm-5 col-lg-6 skin_txt">
                        <h4 class="nav_top_align">
                            <i class="fa fa-pencil"></i>
                            Edit Penyulang
                        </h4>
                    </div>
                    <div class="col-sm-7 col-lg-6">
                        <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="<?=base_url()?>dashboard">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Kelola Penyulang </a>
                            </li>
                            <li class="active breadcrumb-item">Edit Penyulang</li>
                        </ol>
                    </div>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-container forms">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header bg-white">
                                   Form Edit Penyulang
                                </div>
                                <div class="card-block">
                    <?php if ($this->session->flashdata('SUCCESSMSG')) { ?>
                    <div role="alert" class="alert alert-success">
                       <button data-dismiss="alert" class="close" type="button">
                           <span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
                       <strong>Well done!</strong>
                       <?= $this->session->flashdata('SUCCESSMSG') ?>
                    </div>
                    <?php } ?>
                          <?php foreach($penyulang as $value){ ?>
                                    <form action="<?php echo base_url(). 'Admincont/update_penyulang'; ?>" method="post">
                                     <div class="row">
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>ID Penyulang <span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="id_penyulang" value="<?php echo $value->id_penyulang?>"/readonly>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>Nama Penyulang<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="nama_penyulang" value="<?php echo $value->nama_penyulang ?>"/>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>Status<span style="color: #cc0000">*</span></h5>
                                            <select required="" name="status" class="form-control">
                                                         <option value="PLN">PLN</option>
                                                         <option value="swasta">swasta</option>
                                                        
                                            </select>
                                           
                                        </div>    
                                    
                                    
                                        <div class="col-lg-8 input_field_sections">
                                            <button type="submit" class="btn btn-primary konfirmasi">Save</button>
                                        </div>
                                    
                                    </form>
                                    <?php } ?>  
                                </div>
                            </div>
                        </div>
                    </div>

                 
                    

                </div>
                <!-- /.outer -->
            </div>
        </div>
    </div>
    
</div>
<!-- /#wrap -->
<!-- global scripts-->
<script type="text/javascript" src="<?=base_url();?>js/components.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/custom.js"></script>
<!-- global scripts end-->

<script type="text/javascript" src="<?=base_url();?>vendors/raphael/js/raphael-min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/d3/js/d3.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/c3/js/c3.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/toastr/js/toastr.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/switchery/js/switchery.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotchart/js/jquery.flot.js" ></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotchart/js/jquery.flot.resize.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotchart/js/jquery.flot.stack.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotchart/js/jquery.flot.time.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotspline/js/jquery.flot.spline.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotchart/js/jquery.flot.categories.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotchart/js/jquery.flot.pie.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/jquery_newsTicker/js/newsTicker.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/countUp.js/js/countUp.min.js"></script>

<!--end of plugin scripts-->

<script type="text/javascript" src="<?=base_url();?>js/jquery-ui.js"></script>
<!--end of plugin scripts-->
  <script>
  $( function() {
      $( ".datepicker" ).datepicker({
            dateFormat: "yy-mm-dd"
        });
  });
  </script>
  <script>
    $(document).ready(function() {
    $('.konfirmasi').click(function() {
        return confirm("Apakah Data Benar?");
        });
     });

    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>


</body>
</html>
