<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('admin/_includes/head'); ?>
<body>
<!-- start admin -->
<section id="admin">
  <?php $this->load->view('admin/_includes/sidebar'); ?>
  <!-- start content -->
  <div class="content">
    <!-- start content head -->
    <div class="head">
      <!--  head top -->
      <?php $this->load->view('admin/_includes/navbar'); ?>
      <!-- end head top -->
      <!-- start head bottom -->
      <div class="bottom">
        <div class="left">
          <h1>User</h1>
        </div>
        <div class="right">
          <h1>dashboard /</h1>
          <a href="#">User</a>
        </div>
      </div>
      <!-- end head bottom -->
    </div>
    <!-- end content head -->
    <!-- start with the real content -->
    <div id="real">
    <div id="forms">
        <div class="wrap card">
        	<section class="app-content">
        		<div class="row">
        			<div class="col-md-12">
        				<h3>Form Edit User</h3>
        			</div>
        			<div class="col-lg-12">
        				<form action="<?php echo base_url('admin/update_user'); ?>" class="form-horizontal" method="POST">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
						<div class="form-group">
        						<label for="nama" class="col-sm-3">Nama</label>
        						<div class="col-sm-12">
        							<input type="text" id="nama" class="form-control" placeholder="Masukan Nama" name="nama" value="<?php echo $nama ?>" required>
        						</div>
        					</div><!-- .form-group -->
                            <div class="form-group">
        						<label for="username" class="col-sm-3">Username</label>
        						<div class="col-sm-12">
        							<input  type="username" id="username" class="form-control" placeholder="Masukan Username" name="username" value="<?php echo $username ?>" required>
        						</div>
        					</div><!-- .form-group -->
                            <div class="form-group">
        						<label for="role" class="col-sm-3">Role</label>
        						<div id="role" class="col-sm-12">
        							<select class="form-control" name="role" required>
										<option hidden>Pilih Role</option>
										<option value="admin" <?php if ($role == "admin") echo "selected"; ?>>Admin</option>
										<option value="user" <?php if ($role == "user") echo "selected"; ?>>User</option>
        							</select>
        						</div>
        					</div><!-- .form-group -->
                            <br>
                            <button type="submit" class="col-md-3 btn btn-primary btn-block" style="float:right">Edit</button>
        				</form>
        			</div>
        		</div><!-- END row -->
        	</section><!-- #dash-content -->
        </div><!-- .wrap -->
      </div>
    </div>
    <!-- end the real content -->
  </div>
  <!-- end content -->
</section>
<!-- end admin -->
<?php $this->load->view('admin/_includes/footer');?>
</body>
</html>
