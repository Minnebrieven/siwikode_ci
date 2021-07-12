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
        <header class="intro pt100 pb100 parallax-window" data-parallax="scroll" data-speed="0.7" data-image-src="<?php echo base_url('public/') ?>assets/img/bg/new-img-bg-14.jpg">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="brand-heading text-capitalize color-light pt10 pb10">
                                 <div class="brand-heading-typed-container">
                                    <div id="typed-strings">
                                        <p>Selamat Datang di <span class="font-pacifico color-blue">SIWIKODE</span>.^1000</p>
                                        <p>Ini Adalah Team Kami.^1000</p>
                                        <p>M <span class="color-blue">Fikri</span> Ramadhan.^1500</p>
                                        <p>M <span class="color-red">Azrul</span> Ardiansyah.^1500</p>
                                        <p><span class="color-green">Afifah</span> Destriyanti.^1500</p>
                                        <p><span class="color-purple">Nurasri</span> Febriyanti.^1500</p>
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
        

        <?php $this->load->view('_includes/footer');?>
        
        
        <?php $this->load->view('_includes/js');?>
        <script src="<?php echo base_url('public/') ?>assets/js/typed/typed.min.js"></script>
        
    </body>
</html>