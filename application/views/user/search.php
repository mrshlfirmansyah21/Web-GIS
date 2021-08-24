<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("user/_partials/head.php") ?>
</head>
<body id="page-top">
    <?php $this->load->view("user/_partials/navbar.php")?>
    
    <div id="wrapper">
        <?php $this->load->view("user/_partials/sidebar.php") ?>
              
        <div class="card mb-3">
            <div class="form-group" style="height: 400px">
                <div class="container" style="margin-top: 60px">
                    <h3 class="text-center">Pencarian Data</h3>
                    <img src="<?= base_url('assets/template/dist/img/garut.png')?>" class="rounded mx-auto d-block" height="100px"/>
                    <br>
                    <form action="<?= base_url('user/pencarian/hasil')?>" action="GET">  
                        <div class="container my-3">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <div class="input-group rounded">
                                        <input type="number" id="cari" name="cari" placeholder="Silahkan Masukan Nomor NIK Anda" aria-describedby="button-addon5" class="form-control" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')"> 
                                        <div class="input-group-append">
                                            <button id="button-addon5" type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view("user/_partials/footer.php") ?>
    <?php $this->load->view("user/_partials/js.php") ?>
    
</body>
</html>