<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('_includes/head'); ?>
    <body  id="topPage" data-spy="scroll" data-target=".navbar" data-offset="100">
        
        
        <!-- Page Loader
        ===================================== -->
		<div id="pageloader" class="bg-grad-animation-1">
			<div class="loader-item">
                <img src="<?php echo base_url('public/');?>assets/img/other/oval.svg" alt="page loader">
            </div>
		</div>
        
        <a href="#page-top" class="go-to-top">
            <i class="fa fa-long-arrow-up"></i>
        </a>
        
        
        <?php $this->load->view('_includes/navbar'); ?>     
        
        <!-- Intro Area
        ===================================== -->
        <header class="pt100 pb100 parallax-window-2" data-parallax="scroll" data-speed="0.5" data-image-src="<?php echo base_url('public/');?>assets/img/bg/bg-list.jpg" data-positionY="1000">
            <div class="intro-body text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 pt50">
                            <h1 class="brand-heading font-montserrat text-uppercase color-light" data-in-effect="fadeInDown">Wisata Kota Depok</h1>                           
                            <h4 class="brand-heading font-montserrat text-uppercase color-light alpha5" data-in-effect="fadeInDown">SIWIKODE</h4>                           
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </header>
            
        
        <!-- Gallery Area
        ===================================== -->    
        <div class="pt75 pb75">
            <div class="container">
                <div class="row">
                    
                    <?php
                    $count = 0;
                    foreach ($wisata->result() as $row) :
                    $count++;?>

                    <a href="<?php echo base_url('wisata/detail/'.$row->id); ?>">
                    <div class="col-md-6 col-sm-6 col-xs-6 mb25">
                        <img src="<?php echo base_url('upload/wisata/').$row->image;?>" alt="gallery" class="img-responsive">
                        <h5 class="font-montserrat mt10">
                            <?php echo $row->nama ?>
                            <small><?php if($row->jenis_wisata_id != 2) echo $row->jenis_wisata_id; else echo $row->jenis_kuliner_id; ?></small>
                        </h5>
                    </div>
                    </a>
                    
                    <?php endforeach ?>

                </div>
            </div>
        </div>
    
        <?php $this->load->view('_includes/footer'); ?>
        
        <?php $this->load->view('_includes/js'); ?>
        
    </body>
</html>