<div class="top">
    <div class="left">
        <button id="on" class="btn btn-info"><i class="fa fa-bars"></i></button>
        <button id="off" class="btn btn-info hide"><i class="fa fa-align-left"></i></button>
        <a href="<?php echo base_url(); ?>" class="btn btn-info hidden-xs-down"><i class="fa fa-home"></i>Back Home</a>
    </div>
    <div class="right">
        <a href="<?php echo base_url('user/logout') ?>" class="btn btn-outline-danger"><i class="fa fa-sign-out-alt"></i></a>
        <button class="btn btn-info"><?php echo $this->session->nama; ?></button>
    </div>
</div>