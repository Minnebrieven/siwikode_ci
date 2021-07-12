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
        <header class="intro pt100 pb100 parallax-window" data-parallax="scroll" data-speed="0.5" data-image-src="<?php echo base_url('upload/wisata/').$image;?>">
            <div class="intro-body">
                
                <div class="intro-direction">
                    <a href="#welcome">
                        <div class="mouse-icon"><div class="wheel"></div></div>
                    </a>
                </div>
                
            </div>
        </header>

        
        <!-- Welcome Area
        ===================================== -->
        <section id="welcome">
            <div class="row pt50 pb50 bg-gray">
                <div class="col-md-12">
                    <h1 class="text-center">
                        <?php
                        $x = 1;
                        while ($x <= $bintang) :
                        $x++;?>
                        <i class="fa fa-star color-yellow"></i>
                        <?php endwhile; ?>
                        <small class="heading heading-double center-block"></small>
                        <?php echo $nama; ?>    
                        <small class="heading-desc">
                            <?php echo $deskripsi; ?>
                        </small>
                        
                    </h1>
                </div>
            </div>
        </section>
        
        <!-- General Content Area
        ===================================== -->
        <div id="general-content-1" class="pt100 pb100">
            <div class="container">
                <div class="row">
                    
                    <!-- left content start -->
                    <div class="col-md-5">
                        <div class="general-content">
                            <h3 class="mb25">
                                <small class="color-blue">Fasilitas Wisata</small>
                                Fasilitas <?php echo $nama; ?>
                            </h3>
                            <p><?php echo $fasilitas; ?>.</p>
                            
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- left content end -->
                    
                    <!-- right content start -->
                    <div class="col-md-5 col-md-push-1">
                        <h4 class="text-center mb35">Info Lebih Lanjut</h4>
                        <div class="row mb40 pb20">
                            <div class="col-md-6 col-sm-6 col-xs-12 mb35">
                                <div class="content-box content-box-center">                        
                                    <span class="fa fa-phone color-blue"></span>
                                    <h4>Kontak</h4>               
                                    <h5><?php echo $kontak; ?></h5>
                            
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12 mb35">
                                <div class="content-box content-box-center">                        
                                    <span class="icon-envelope color-red"></span>
                                    <h4>Email</h4>               
                                    <h5><?php echo $email; ?></h5>
                            
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12 mb35">
                                <div class="content-box content-box-center">                        
                                    <span class="icon-map color-red"></span>
                                    <h4>Alamat</h4>               
                                    <h5><?php echo $alamat; ?></h5>
                            
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12 mb35">
                                <div class="content-box content-box-center">                        
                                    <span class="icon-global color-blue"></span>
                                    <h4>Website</h4>               
                                    <h5><?php echo $web; ?></h5>
                            
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- right content end -->
                    
                </div>
            </div>
        </div>
        
        
        <!-- Google Map Area
        ===================================== -->
        <div id="googleMap" class="pt100 parallax-window-2" data-parallax="scroll" data-speed="0.5" data-image-src="<?php echo base_url('public/'); ?>img/bg/3-2.jpg">
        </div>
        
        <?php if ($testimoni->num_rows() != 0): ?>
        <!-- Testimonial Area
        ===================================== -->
        <div id="testimonial" class="pt75 pb75">
            <div class="container">
                
                <!-- title start -->
                <div class="row text-center mb25">
                    <h1 class="font-size-normal">
                        <small>Testimoni</small>
                        Apa yang Client katakan tentang tempat wisata ini.
                        <small class="heading heading-solid center-block"></small>
                    </h1>
                </div>
                <!-- title end -->
                
                <div class="row">
                    
                    <div class="col-sm-12">                        
                        <div class="row">
                            
                            <div id="owlSectionThreeItem" class="owl-carousel">
                                <?php $count = 0;
                                foreach ($testimoni->result() as $row) :
                                $count++;
                                ?>    
                                <!-- Testimonial Item start -->
                                <div class="testimonial testimonial-triangle-isosceles bottom-left">
                                    <div class="testimonial-body">
                                        <p>
                                            <?php echo $row->komentar; ?>
                                        </p>
                                    </div>
                                    <div class="testimonial-footer">
                                        <img src="<?php echo base_url('upload/avatar/').$row->image;?>" alt="testimonial author" class="img-responsive img-circle" style="display:block;max-width:60px;max-height:60px;width:auto;height:auto;">
                                        <i class="fa fa-quote-left"></i>
                                        <?php echo $row->nama; ?><a href=""><?php
                                                                            $x = 1;
                                                                            while ($x <= $row->rating) :
                                                                            $x++;?>
                                                                            <i class="fa fa-star color-yellow"></i>
                                                                            <?php endwhile; ?></a>
                                    </div>
                                </div>
                                <!-- Testimonial Item end -->
                                <?php endforeach ?>
                            </div><!-- owlSectionThreeItem end -->
                        </div><!-- row end -->
                    </div><!-- col end -->
                    
                </div><!-- row end -->
            </div><!-- container end -->
        </div><!-- section testimonial end -->
        <?php endif ?>


        <?php $this->load->view('_includes/footer'); ?>

        <!-- Google Map
        =====================================-->
        <!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBaAMXXj9LXB8YlUmdfYzlAwepg8jxkpU&callback=initMap"
type="text/javascript"></script>-->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBaAMXXj9LXB8YlUmdfYzlAwepg8jxkpU"></script>
        <script>
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);

            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(<?php echo $latlong;?>), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e5e5e5"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('googleMap');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(<?php echo $latlong;?>),
                    map: map,
                    title: 'Snazzy!'
                });
            }
        </script>
        
        <?php $this->load->view('_includes/js'); ?>
        
    </body>
</html>