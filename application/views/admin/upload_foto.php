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
          <h1>dashboard</h1>
        </div>
        <div class="right">
          <h1>dashboard /</h1>
          <a href="#">Upload Foto</a>
        </div>
      </div>
      <!-- end head bottom -->
    </div>
    <!-- end content head -->
    <!-- start with the real content -->
    <div id="real">
      <div class="row">
        <div class="col-md-12">
          <?php if(isset($error)) echo $error; ?>
          <?php echo form_open_multipart('admin/do_upload');?>
          <br>
          <input type="file" name="foto" size="20" />
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <input type="hidden" name="path" value="<?php echo $path; ?>">
          <?php if(isset($old_image)):?>
          <input type="hidden" name="old_image" value="<?php if ($old_image == "") echo "default.jpg"; else echo $old_image; ?>">
          <?php endif ?>

          <br /><br />

          <input type="submit" value="upload" />

          </form>
        </div>
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
