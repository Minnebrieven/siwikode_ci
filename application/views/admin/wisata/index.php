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
          <h1>Wisata</h1>
        </div>
        <div class="right">
          <h1>dashboard /</h1>
          <a href="#">Wisata</a>
        </div>
      </div>
      <!-- end head bottom -->
    </div>
    <!-- end content head -->
    <!-- start with the real content -->
    <div id="real">
      <div class="row">
        <div class="col-md-12">
            <div class="widget p-lg">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="m-b-lg">Daftar Wisata</h4>
                    </div>
                    <div class="col-md-6">
                        <a href="<?php echo base_url('admin/add_new_wisata');?>" class="btn btn-primary btn-block" style="width:200px;float:right"><i class="fa fa-plus"></i>  Tambah</a>
                    </div>
                </div>
                <br>
                <table class="table table-hover">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Wisata</th>
                        <th>Kontak</th>
                        <th>Action</th>
                    </tr>
                        <?php
                        $count = 0;
                        foreach ($wisata->result() as $row) :
                        $count++;?>
                        
                    <tr>
                        <td><?php echo $count ?></td>
                        <td><?php echo $row->nama ?></td>
                        <td><?php echo $row->jenis_wisata_id; ?></td>
                        <td><?php echo $row->kontak ?></td>
                        <td colspan="3">
                            <a href="<?php echo site_url('admin/get_edit_wisata/'.$row->id); ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
                            <a href="<?php echo site_url('wisata/detail/'.$row->id); ?>" class="btn btn-primary btn-sm"  style="background-color:#2578AF"><i class="fa fa-info-circle"></i> Detail</a>
                            <a href="<?php echo site_url('admin/delete_wisata/'.$row->id); ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                        </td>

                    </tr>
                    <?php endforeach?>
                </table>
            </div><!-- .widget -->
        </div><!-- END column -->
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
