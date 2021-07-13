<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('_includes/head');?>
    <body  id="page-top" data-spy="scroll" data-target=".navbar" data-offset="100">
        
        <!-- Page Loader
        ===================================== -->
		<div id="pageloader" class="bg-grad-animation-1">
			<div class="loader-item">
                <img src="<?php echo base_url('public/') ?>assets/img/other/oval.svg" alt="page loader">
            </div>
		</div>
        
        <a href="#page-top" class="go-to-top">
            <i class="fa fa-long-arrow-up"></i>
        </a>
        
        
        <?php $this->load->view('_includes/navbar');?>               
        
        
        <!-- Intro Area
        ===================================== -->
        <header class="intro pt100 pb100 parallax-window" data-parallax="scroll" data-speed="0.7" data-image-src="<?php echo base_url('public/') ?>assets/img/bg/bg-list.jpg">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="brand-heading text-capitalize color-light pt10 pb10">
                                 <div class="brand-heading-typed-container">
                                    <div id="typed-strings">
                                        <p>Selamat Datang di <span class="font-pacifico color-red">SIWIKODE</span>.^1000</p>
                                        <p>Ini Adalah Team Kami.^1000</p>
                                        <p>M <span class="color-red">Fikri</span> Ramadhan.^1500</p>
                                        <p>M <span class="color-red">Azrul</span> Ardiansyah.^1500</p>
                                        <p><span class="color-red">Afifah</span> Destriyanti.^1500</p>
                                        <p><span class="color-red">Nurasri</span> Febriyanti.^1500</p>
                                    </div>
                                    <span id="typed" style="white-space:pre;"></span>
                                </div>
                            </h1>
                        </div>
                    </div>
                </div>
                
                <div class="intro-direction">
                    <a href="#welcome">
                        <div class="mouse-icon"><div class="wheel"></div></div>
                    </a>
                </div>
                
            </div>
            
        </header>


        <!-- Team Area
        ===================================== -->
        <div class="bg-gray">
            <div class="container pt50 pb50">
                <div class="row">
                    <h2 class="text-center font-pacifico">
                        Our Team
                        <small class="heading heading-solid center-block"></small>
                    </h2>
                    <div class="col-md-3 col-sm-3 col-xs-6 mt30">                    
                        <div class="team team-two animated" data-animation="zoomIn" data-animation-delay="100">                            
                            <img src="<?php echo base_url('public/'); ?>assets/img/team/fikri.jpg" alt="" class="img-responsive">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                            </div>
                            <h5>M Fikri Ramadhan<small class="color-pasific">Web Developer</small></h5>

                        </div>                    
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-6 mt30">                    
                        <div class="team team-two animated" data-animation="zoomIn" data-animation-delay="100">                            
                            <img src="<?php echo base_url('public/'); ?>assets/img/team/azrul.jpg" alt="" class="img-responsive">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                            </div>
                            <h5>M Azrul Ardiansyah<small class="color-pasific">Web Developer</small></h5>

                        </div>                    
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-6 mt30">                    
                        <div class="team team-two animated" data-animation="zoomIn" data-animation-delay="100">                            
                            <img src="<?php echo base_url('public/'); ?>assets/img/team/asri.jpg" alt="" class="img-responsive">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                            </div>
                            <h5>Nurasri Febriyanti<small class="color-pasific">Web Developer</small></h5>

                        </div>                    
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-6 mt30">                    
                        <div class="team team-two animated" data-animation="zoomIn" data-animation-delay="100">                            
                            <img src="<?php echo base_url('public/'); ?>assets/img/team/afifah.jpg" alt="" class="img-responsive">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                            </div>
                            <h5>Afifah Destriyanti<small class="color-pasific">Web Developer</small></h5>

                        </div>                    
                    </div>
                </div>
            </div>
        </div>
        

        <?php $this->load->view('_includes/footer');?>
        
        
        <?php $this->load->view('_includes/js');?>
        <script src="<?php echo base_url('public/') ?>assets/js/typed/typed.min.js"></script>
        
    </body>
</html>