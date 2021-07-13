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
        
        <header class="pt100 pb100 bg-grad-stellar" style="background-image: url(<?php echo base_url('public/');?>assets/img/bg/bg-list.jpg); background-repeat: no-repeat; background-color: #fff; background-size: cover;">

                <div class="container mt100 mb70">
                    
                    <div class="row">
                        <div class="col-md-12 text-center">
                        <div class="row">
                        <?php if(isset($message)): ?>                    
                        <div class="alert alert-danger col-sm-8 col-sm-offset-2 mt10" role="alert">
                        <?php echo $message; ?>
                        </div>
                        <?php endif?>
                        </div>
                        <div id="formLogin" class="inner cover text-center animated" data-animation="fadeIn" data-animation-delay="100">
                        <br>
                        <h3 class="font-montserrat cover-heading mb20 mt20 color-white">Login Form</h3>
                        <form class="clearfix mb35" action="<?php echo base_url('user/login'); ?>" method="POST">
                            <div class="col-sm-8 col-sm-offset-2">
                                <input type="text" name="username" class="form-control text-center no-border input-lg input-circle bg-light-transparent" placeholder="Username">
                            </div>
                            <div class="col-sm-8 col-sm-offset-2 mt10">
                                <input type="password" name="password" class="form-control text-center no-border input-lg input-circle bg-light-transparent" placeholder="Password">
                            </div>
                            <div class="col-sm-8 col-sm-offset-2 mt5">
                                <button type="submit" class="button button-lg button-circle button-block button-pasific hover-ripple-out">Login</button><br><br>
                                <a href="#" class="color-light mt20" id="showFormRegister">Register Now.</a>
                            </div>
                        </form>
                        <br>
                    </div>
                
                    <div id="formRegister" class="inner cover text-center hidden animated" data-animation="fadeIn" data-animation-delay="100">
                        <br>
                        <h3 class="font-montserrat cover-heading mb20 mt20">Register Form</h3>
                        <form class="clearfix mb35" action="<?php echo base_url('user/daftar'); ?>" method="POST">
                            <div class="col-sm-8 col-sm-offset-2">
                                <input type="text" name="nama" class="form-control text-center no-border input-lg input-circle bg-light-transparent" placeholder="Masukan Nama">
                            </div>
                            <div class="col-sm-8 col-sm-offset-2 mt10">
                                <input type="text" name="username" class="form-control text-center no-border input-lg input-circle bg-light-transparent" placeholder="Masukan Username">
                            </div>
                            <div class="col-sm-8 col-sm-offset-2 mt10">
                                <input type="password" name="password" class="form-control text-center no-border input-lg input-circle bg-light-transparent" placeholder="Masukan Password">
                            </div>
                            <div class="col-sm-8 col-sm-offset-2 mt5">
                                <button type="submit" class="button button-lg button-circle button-block button-pasific hover-ripple-out">Register Now</button><br><br>
                                <a href="#" class="color-light mt20" id="showFormLogin">Have an account? Login here</a><br>
                            </div>
                        </form>
                        <br>
                    </div>
                    </div>    
                    </div>
                </div>
                
        </header>
        

        <?php $this->load->view('_includes/js'); ?>
    
    
        <!-- Custom Script
        =====================================-->
        <script>
            $(function(){
                "use strict";
                $("#showFormRegister").on('click',function(){
                    $("#formLogin").addClass("hidden");
                    $("#formRegister").removeClass("hidden");
                });
                $("#showFormLogin").on('click',function(){
                    $("#formLogin").removeClass("hidden");
                    $("#formRegister").addClass("hidden");
                })
            })

        </script>
        
    </body>
</html>