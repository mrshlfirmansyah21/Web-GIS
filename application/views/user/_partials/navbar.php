<div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </form>
        <div class="navbar-nav navbar-right">
          <div class="col" style="color: white";
          padding: 15px 50px 5px 50px;
          float: right;
          font-size: 16px;>
          Tanggal : <?=date('d M Y') ?></div>
        </div>
        <a href="<?=base_url()?>admin/login" type="button "class="btn btn-success">Login</a>
      </nav>
      

      