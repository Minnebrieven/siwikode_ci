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
          <a href="#">dashboard</a>
        </div>
      </div>
      <!-- end head bottom -->
    </div>
    <!-- end content head -->
    <!-- start with the real content -->
    <div id="real">
      <div class="row">
        <!-- start analytics -->
        <div class="col-lg-3">
          <div class="analytics">
            <div class="card">
              <div class="icon"><i class="fa fa-umbrella-beach"></i></div>
              <div class="text">
                <h1>984</h1>
                <p>Wisata Rekreasi</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="analytics">
            <div class="card">
              <div class="icon"><i class="fa fa-utensils"></i></div>
              <div class="text">
                <h1>1455</h1>
                <p>Wisata Kuliner</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="analytics">
            <div class="card">
              <div class="icon"><i class="fa fa-users"></i></div>
              <div class="text">
                <h1>32</h1>
                <p>Total users</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="analytics">
            <div class="card">
              <div class="icon"><i class="fa fa-comment-dots"></i></div>
              <div class="text">
                <h1>43</h1>
                <p>Total Testimoni</p>
              </div>
            </div>
          </div>
        </div>
        <!-- end analytics -->
        <!-- start user -->
        <div class="col-lg-6">
          <div class="users">
            <div class="card">
              <h1 class="head">Users</h1>
              <div class="user">
                <div class="uImg"><img src="img/act/1.jpg" alt=""></div>
                <div class="info">
                  <h1>Josephine Walker</h1>
                  <p>Apple Iwork 08 Review</p>
                </div>
                <div class="type">
                  <div class="btn btn-info">Free</div>
                </div>
              </div>
              <div class="user">
                <div class="uImg"><img src="img/act/2.jpg" alt=""></div>
                <div class="info">
                  <h1>Josephine Walker</h1>
                  <p>Apple Iwork 08 Review</p>
                </div>
                <div class="type">
                  <div class="btn btn-success">pro</div>
                </div>
              </div>
              <div class="user">
                <div class="uImg"><img src="img/act/3.jpg" alt=""></div>
                <div class="info">
                  <h1>Josephine Walker</h1>
                  <p>Apple Iwork 08 Review</p>
                </div>
                <div class="type">
                  <div class="btn btn-info">Free</div>
                </div>
              </div>
              <div class="user">
                <div class="uImg"><img src="img/act/4.jpg" alt=""></div>
                <div class="info">
                  <h1>Josephine Walker</h1>
                  <p>Apple Iwork 08 Review</p>
                </div>
                <div class="type">
                  <div class="btn btn-info">Free</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end user -->
        <!-- start user -->
        <div class="col-lg-6">
          <div class="users">
            <div class="card">
              <h1 class="head">messages</h1>
              <div class="user">
                <div class="uImg"><img src="img/act/5.jpg" alt=""></div>
                <div class="info">
                  <h1>Josephine Walker</h1>
                  <p>Apple Iwork 08 Review</p>
                </div>
                <div class="type">
                  <div class="btn btn-primary">read</div>
                </div>
              </div>
              <div class="user">
                <div class="uImg"><img src="img/act/6.jpg" alt=""></div>
                <div class="info">
                  <h1>Josephine Walker</h1>
                  <p>Apple Iwork 08 Review</p>
                </div>
                <div class="type">
                  <div class="btn btn-primary">read</div>
                </div>
              </div>
              <div class="user">
                <div class="uImg"><img src="img/act/7.jpg" alt=""></div>
                <div class="info">
                  <h1>Josephine Walker</h1>
                  <p>Apple Iwork 08 Review</p>
                </div>
                <div class="type">
                  <div class="btn btn-primary">read</div>
                </div>
              </div>
              <div class="user">
                <div class="uImg"><img src="img/act/8.jpg" alt=""></div>
                <div class="info">
                  <h1>Josephine Walker</h1>
                  <p>Apple Iwork 08 Review</p>
                </div>
                <div class="type">
                  <div class="btn btn-primary">read</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end user -->
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
