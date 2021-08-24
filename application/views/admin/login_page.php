<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login | Admin</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url()?>assets/template/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/template/dist/css/all.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?= base_url()?>assets/template/node_modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url()?>assets/template/dist/css/style.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/template/dist/css/components.css">
  <link rel="icon" href="<?= base_url()?>assets/template/dist/img/garut.png">
  
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
          <div class="p-4 m-3">
            <img src="<?=base_url()?>assets/template/dist/img/garut.png" alt="logo" width="110" class="rounded mx-auto d-block mb-4 mt-2">
            <h4 class="text-center font-weight-bold">Selamat Datang <br> <span class="text-dark font-weight-normal">Peta DTKS Kabupaten Garut</span></h4>
            <form method="POST" action="#" class="needs-validation" novalidate="">
              <div class="form-group">
                <label for="text">Username</label>
                <input id="text" type="text" class="form-control" name="username" tabindex="1" required autofocus>
                <div class="invalid-feedback">
                  Silahkan masukan Username
                </div>
              </div>

              <div class="form-group">
                <div class="d-block">
                  <label for="password" class="control-label">Password</label>
                </div>
                <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                <div class="invalid-feedback">
                  Silahkan masukan Password
                </div>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right btn-block" tabindex="4">
                  Login
                </button>
              </div>
            </form>

          </div>
        </div>
        <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" style="height: 632px;" data-background="<?=base_url()?>assets/template/dist/img/kota.jpg">
          <div class="absolute-bottom-left index-2">
            <div class="text-light p-5 pb-2">
              <div class="mb-5 pb-3">
                <h1> <span class="text-gray mb-2 display-4 font-weight-bold">Selamat Datang</span><h1>
                <h5 class="font-weight-normal text-muted-transparent">Peta DTKS Kabupaten Garut</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="<?= base_url()?>assets/template/dist/js/jquery-3.3.1.min.js"></script>
  <script src="<?= base_url()?>assets/template/dist/js/popper.min.js"></script>
  <script src="<?= base_url()?>assets/template/dist/js/bootstrap.min.js"></script>
  <script src="<?= base_url()?>assets/template/dist/js/jquery.nicescroll.min.js"></script>
  <script src="<?= base_url()?>assets/template/dist/js/moment.min.js"></script>
  <script src="<?= base_url()?>assets/template/dist/js/stisla.js"></script>

  <!-- Template JS File -->
  <script src="<?= base_url()?>assets/template/dist/js/scripts.js"></script>
  <script src="<?= base_url()?>assets/template/dist/js/custom.js"></script>

</body>
</html>
