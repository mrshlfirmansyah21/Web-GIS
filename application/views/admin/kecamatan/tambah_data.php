<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title ?></title>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top">
    <?php $this->load->view("admin/_partials/navbar.php") ?>
    <div id="wrapper">
        <?php $this->load->view("admin/_partials/sidebar.php") ?> 
        <div class="card mb-3">
            <div class="card-header">
               <a href="<?php echo site_url('admin/kecamatan/')?>"><i class="fas fa-arrow-left"></i> Kembali</a>
           </div>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="container" style= "margin-top: 20px">
                        <?php echo form_open('admin/kecamatan/simpan') ?>
                            <div class="form-group">
                                <label for="text">Nama Kecamatan</label>
                                <input type="text" name="nama_kecamatan" class="form-control" placeholder="Nama Kecamatan"></input>
                            </div>
                            <div class="form-group">
                                <label for="text">Jumlah Ruta</label>
                                <input type="text" name="jumlah_ruta" class="form-control" placeholder="Jumlah Ruta"></input>
                            </div>
                            <div class="form-group">
                                <label for="text">Jumlah KK</label>
                                <input type="text" name="jumlah_kk" class="form-control" placeholder="Jumlah KK"></input>
                            </div>
                            <div class="form-group">
                                <label for="text">Jumlah Jiwa</label>
                                <input type="text" name="jumlah_dtks" class="form-control" placeholder="Jumlah Jiwa"></input>
                            </div>

                            <button type="submit" class="btn btn-md btn-success">Simpan</button>
                            <button type="reset" class="btn btn-md btn-warning">Reset</button>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        <?php $this->load->view("admin/_partials/modal.php") ?>
        <?php $this->load->view("admin/_partials/js.php")?>
        <?php $this->load->view("admin/_partials/footer.php") ?>

    <script>
        function deleteConfirm(url){
            $('#btn-delete').attr('href', url);
            $('#deleteModal').modal();
        }
	</script>
</body>
</html>