<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebGIS | Dinas Sosial</title>
    <link rel="icon" href="<?= base_url()?>assets/template/dist/img/garut.png">
    <link rel="stylesheet" href="<?= base_url()?>assets/template/dist/css/materialize.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/template/dist/css/ionicons.min.css">
    <script src="<?= base_url()?>assets/template/dist/js/jquery-3.2.1.min.js"></script>
    <script src="<?= base_url()?>assets/template/dist/js/materialize.min.js"></script>
    <style>
        .trans {
        background: rgba(0, 106, 193, 0.75);
    }
    </style>
</head>
<body style="background: url(assets/template/dist/img/bg.jpg); background-size: cover;" class="trans">
    <div class="white-text" style="background-color: rgba(0, 0, 0, 0.75); width: 100%; height: 700px; margin-top: -35px">
        <center>
            <div style="padding-top: 175px;">
                <h1><img src="<?= base_url()?>assets/template/dist/img/garut.png" class="img-responsive" style="width: 100px; height:100px" ></h1>
                <h1>Selamat Datang <b style="font-family: Futura Md BT"></b></h1>
                <p style="font-family: Futura Md BT; font-size: 21px"><span style="color: grey">Web GIS & Data DTKS (Data Terpadu Kesejahteraan Sosial)</span></p>
                <a href="<?= base_url()?>user/peta" target="_blank" style="font-family: segoe ui light;"><button class="btn waves-effect">Klik Disini <i class="ion-android-search"></i></button></a>
            </div>
        </center>
    </div>
    <div class="white black-text container-fluid">
        <div class="row">
            <div class="col s12">
                <h3 class="center">Website ini Berisi :</h3>
            </div>
            <div class="col s6 center">
                <h1><a href="<?= base_url()?>user/peta" target="_blank"><i class="ion-map"></i></a></h1>
                <h5>Peta DTKS</h5>
                <p>Peta ini berisi mengenai informasi berupa data DTKS perkecamatan di Kabupaten Garut.</p>
            </div>
            <div class="col s6 center">
            <h1><a href="<?= base_url()?>user/kecamatan" target="_blank"><i class="ion-document"></i></a></h1>
                <h5>Data DTKS Kecamatan</h5>
                <p>Data DTKS ini berisi mengenai Jumlah Ruta, Jumlah KK, dan Jumlah Jiwa penerima bantuan perkecamatan di Kabupaten Garut.</p>
            </div>
            <div class="col s6 center">
            <h1><a href="<?= base_url()?>user/pencarian" target="_blank"><i class="ion-search"></i></a></h1>
                <h5>Pencarian Data DTKS</h5>
                <p>Masyarakat dapat melakukan pencarian data diri melalui NIK apakah terdaftar di DTKS atau tidak.</p>
            </div>
            <div class="col s6 center">
            <h1><a href="<?= base_url()?>" target="_blank"><i class="ion-person"></i></a></h1>
                <h5>Manfaat Website</h5>
                <p>Website ini memudahkan masyarakat untuk mendapatkan informasi mengenai data DTKS perkecamatan di Kabupaten Garut yang disajikan melalui peta interaktif.</p>
            </div>
        </div>
        <footer class="page-footer" style="background-color: #0f0f0f;"> #2980B9;
            <div class="container-fluid">
                <div class="row">
                    <div class="col l6 s12">
                        <img src="<?= base_url()?>assets/template/dist/img/garut.png" width="50" height="50">
                        <h6 class="white-text">Dinas Sosial</h6>
                        <p class="white-text text-lightent-4">Web GIS & Data DTKS.</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Jika ada kendala silakan hubungi di</h5>
                        <ul>
                            <li><a href="#" class="grey-text text-lighten-4" target="_blank"><i class="ion-social-facebook"></i> Facebook</a> <br/></li>
                            <li><a href="#" class="grey-text text-lighten-4" target="_blank"><i class="ion-social-instagram"></i> Instagram</a></li>
                            <li><a href="#" class="grey-text text-lighten-4" target="_blank"><i class="ion-email"></i> Email</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container-fluid">
                    Copyright &copy; 2021 Dinas Sosial
                </div>
            </div>
        </footer>
    </div>
</body>
</html>