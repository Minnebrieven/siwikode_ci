<!-- Navigation Area
        ===================================== -->
        <nav class="navbar navbar-pasific navbar-mp megamenu navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand navbar-brand-img page-scroll" href="#page-top">
                        <img src="<?php echo base_url('public/');?>assets/img/logo/logo-default-img.png" alt="logo">
                    </a>
                </div>
        
                <div class="navbar-collapse collapse navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <li class="menu"><a href="<?php echo base_url(); ?>" class="color-gray">Home </a>
                        </li>
                        
                        <li class="dropdown menu-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle color-light">Wisata </a>
                            <ul class="dropdown-menu fullwidth">
                                <li class="menu-content withoutdesc">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3 class="title text-uppercase font-montserrat color-dark">Wisata</h3>
                                            <ul>
                                                <li><a href="<?php echo base_url('wisata'); ?>">Semua Wisata</a></li>
                                                <li><a href="<?php echo base_url('wisata/rekreasi'); ?>">Rekreasi</a></li>
                                                <li><a href="<?php echo base_url('wisata/kuliner'); ?>">Kuliner</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Our Team</a>
                        </li>
                        <li><a href="#" data-toggle="modal" data-target="#searchModal"><i class="fa fa-search fa-fw color-green"></i></a></li>
                        <?php if ($this->session->id): ?>
                        <li class="dropdown menu-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle color-light"><?php echo $this->session->nama; ?> </a>
                            <ul class="dropdown-menu fullwidth">
                                <li class="menu-content withoutdesc">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3 class="title text-uppercase font-montserrat color-dark">Akun</h3>
                                            <ul>
                                                <li><a href="<?php echo base_url('user/logout'); ?>">Logout</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <?php else: ?>
                        <li class="dropdown menu-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle color-light">Login </a>
                            <ul class="dropdown-menu fullwidth">
                                <li class="menu-content withoutdesc">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3 class="title text-uppercase font-montserrat color-dark">Akun</h3>
                                            <ul>
                                                <li><a href="#" data-toggle="modal" data-target="#loginModal">Login</a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#registerModal">Registrasi</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <?php endif ?>
                    </ul>
                
                </div>
            </div>
        </nav>
        
        
        <!-- Search Modal Dialog Box
        ===================================== -->
        <div id="searchModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header bg-gray">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title text-center"><i class="fa fa-search fa-fw"></i> Search here</h5>
                    </div>
                    <div class="modal-body">                        
                        <form action="#" class="inline-form">
                            <input type="text" class="modal-search-input" autofocus>
                        </form>
                    </div>
                    <div class="modal-footer bg-gray">
                        <span class="text-center"><a href="#" class="color-dark">SIWIKODE</a></span>
                    </div>
                </div>

            </div>
        </div> 


        <!-- Login Modal Dialog Box
        ===================================== -->
        <div id="loginModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header bg-gray">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title text-center"><i class="fa fa-sign-in fa-fw"></i> Login here</h5>
                    </div>
                    <div class="modal-body">                        
                        <form action="<?php echo base_url('user/login'); ?>" class="inline-form" method="POST">
                           <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="input-md input-circle form-control" name="username" placeholder="Masukan Username" maxlength="100" autofocus>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="input-md input-circle form-control" name="password" placeholder="Masukan Password" maxlength="100">
                            </div>
                            <button type="submit" class="button button-md button-rounded button-pasific hover-ripple-out button-block">Log In</button>
                        </form>
                    </div>
                    <div class="modal-footer bg-gray">
                        <span class="text-center"><a href="#" class="color-dark">SIWIKODE</a></span>
                    </div>
                </div>

            </div>
        </div>


        <!-- Register Modal Dialog Box
        ===================================== -->
        <div id="registerModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header bg-gray">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title text-center"><i class="fa fa-sign-in fa-fw"></i> Register here</h5>
                    </div>
                    <div class="modal-body">                        
                        <form action="<?php echo base_url('user/daftar'); ?>" class="inline-form" method="POST">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="input-md input-circle form-control" name="nama" placeholder="Masukan Nama" maxlength="100" autofocus>
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="input-md input-circle form-control" name="username" placeholder="Masukan Username" maxlength="100">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="input-md input-circle form-control" name="password" placeholder="Masukan Password" maxlength="100">
                            </div>
                            <button type="submit" class="button button-md button-rounded button-pasific hover-ripple-out button-block">Daftar</button>
                        </form>
                    </div>
                    <div class="modal-footer bg-gray">
                        <span class="text-center"><a href="#" class="color-dark">SIWIKODE</a></span>
                    </div>
                </div>

            </div>
        </div>