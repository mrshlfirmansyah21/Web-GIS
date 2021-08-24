<div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
            <div style="color: white"
            <?php 
                $hari=array("Minggu","Senin","Selasa","Rabu","Kamis","Ju'mat","Sabtu");
                $bulan=array(1=>"Januari","Febuari","Maret","April","Mei","Juni","Juli","Agustus",
                          "September","Oktober","September","November","Desember");
                $tgl=date("d");
                $bln=date("n");
                $hr=date("w");
                $thn=date("Y");
                echo("Tanggal:");
                echo("<b>$hari[$hr],$tgl $bulan[$bln] $thn</b>");?>>
            </div>
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?=base_url()?>assets/template/dist/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, Admin</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="#" class="dropdown-item has-icon text-danger" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>

      