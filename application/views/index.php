<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('_includes/head'); ?>
    <body  id="page-top" data-spy="scroll" data-target=".navbar" data-offset="100">
        
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
        <header class="pt100 pb100 bg-grad-stellar" style="background-image: url(<?php echo base_url('public/');?>assets/img/bg/bg-list.jpg); background-repeat: no-repeat; background-color: #fff; background-size: cover;">

                <div class="container mt100 mb70">
                    
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="fs-75 font-source-sans-pro font-size-light color-light animated" data-animation="fadeInUp" data-animation-delay="100">
                                Welcome to SIWIKODE.
                            </h1>
                            <p class="lead mt25 color-gray animated" data-animation="fadeInUp" data-animation-delay="200">
                                Selamat datang di Sistem Informasi Wisata Kota Depok.<br>
                                
                                <a class="button button-circle button-grad-stellar button-lg mt20" href="<?php echo base_url('wisata'); ?>">Jelajah Sekarang</a>
                            </p>
                        </div>
                        
                    </div>
                </div>
                
        </header>
        
        <!-- New Block Area
        ===================================== -->
        <div id="service">
            <div class="container">
                
                <!-- title and short description start -->
                <div class="row mt50 mb25">
                    <div class="col-md-12 text-center">
                        <h1 class="font-size-normal">
                            <small>SIWIKODE</small>
                            Selamat Datang di Sistem Informasi Wisata Kota Depok
                            <small class="heading heading-solid center-block"></small>
                        </h1>
                    </div>
                    
                    

                    <div class="col-md-8 col-md-offset-2 text-center">
                        <p class="lead">
                            SIWIKODE atau Sistem Informasi Wisata Kota Depok adalah sebuah sistem informasi dimana kalian dapat melihat informasi tentang wisata rekreasi atau wisata kuliner yang terdapat di kota Depok.
                        </p>
                    </div>
                    
                </div>
                <!-- title and short description end -->
                
            </div><!-- container end -->
        
        <!-- Number Area
        ===================================== -->
        <div id="info-1" class="mt-20 pb20 bg-grad-stellar">
            <div class="container">
                <div class="row pt50">

                    <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                        <span class="icon-chat el-icon3x color-white"></span>
                        <div class="fact">                                    
                            <div class="fact-number timer" data-perc="387">
                                <span class="factor color-white"></span>
                            </div>                                    
                            <span class="fact-title color-white">Testimoni</span>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                        <span class="icon-hotairballoon el-icon3x color-white"></span>
                        <div class="fact">                                    
                            <div class="fact-number timer" data-perc="545">
                                <span class="factor color-white"></span>
                            </div>                                    
                            <span class="fact-title color-white">Wisata Rekreasi</span>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                        <span class="icon-wine el-icon3x color-white"></span>
                        <div class="fact">                                    
                            <div class="fact-number timer" data-perc="750">
                                <span class="factor color-white"></span>
                            </div>                                    
                            <span class="fact-title color-white">Wisata Kuliner</span>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12 text-center mt25 mb25">
                        <a class="button button-circle button-lg button-white hover-ripple-out" href="<?php echo base_url('wisata'); ?>">Mari Mulai Menjelajah!</a>
                    </div>
                </div>
                
            </div>
        </div> 
        
        <?php $this->load->view('_includes/footer'); ?>
        
        
        <?php $this->load->view('_includes/js'); ?>

    </body>
</html>